<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profits;
use App\Models\ProfitsData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Refilling;
use App\Models\Routes;
use App\Models\Services;
use App\Models\Salary;
use Maatwebsite\Excel\Facades\Excel;
use App\Export\ProfitExport;
use Illuminate\Support\Facades\Gate;
use App\Http\Filters\ProfitFilter;
use PhpOffice\PhpSpreadsheet\IOFactory;


use alhimik1986\PhpExcelTemplator\PhpExcelTemplator;
use alhimik1986\PhpExcelTemplator\params\ExcelParam;
use alhimik1986\PhpExcelTemplator\params\CallbackParam;
use alhimik1986\PhpExcelTemplator\setters\CellSetterArrayValueSpecial;
use Illuminate\Support\Carbon;

class ProfitController extends Controller
{

    // список сверок
    public function index(Request $request)
    {
        $data = $request->validate(['date-profit' => 'nullable|date', 'driver-id' => 'numeric']);
        $filter = app()->make(ProfitFilter::class, ['queryParams' => array_filter($data)]);
        $dateProfit = $request->input('date-profit');
        if ($dateProfit == null) {
            $dateProfit = date(config('app.date_format'));
        } else {
            $dateProfit = Carbon::parse($dateProfit)->format(config('app.date_format'));
        }
        $isService = 0;
        if (Gate::allows('is-driver')) {
            $Users = User::where('id', Auth::user()->id)->get();
            return view('profit.profit', ['Users' => $Users, 'isService' => $isService, 'dateProfit' => $dateProfit]);
        } else {
            $Users = User::where('role_id', 2)->filter($filter)->get();
            $Salary = Salary::where('status', 1)->orderByDesc('date')->get();
            $User_list = User::where('role_id', 2)->get();
            return view('profit.profit', [
                'Users' => $Users, 'User_list' => $User_list,
                'isService' => $isService, 'dateProfit' => $dateProfit, 'Salary' => $Salary
            ]);
        }
    }

    public function archive()
    {
        if (Gate::allows('is-driver')) {
            $Users = User::where('id', Auth::user()->id)->get();
        } else {
            $Users = User::where('role_id', 2)->get();
        }
        return view('profit.archive', ['Users' => $Users]);
    }

    public function close()
    {
        return view('profit.close');
    }

    public function store(Request $request)
    {
        $date = $request->input('date-close');
        $Users = User::where('role_id', 2)->get();
        foreach ($Users as $User) {
            if (
                !$User->driverRefilling->where('status', 1)->where('date', '<=', $date)->isEmpty()
                or !$User->driverRoute->where('status', 1)->where('date', '<=', $date)->isEmpty()
                or !$User->driverSalary->where('status', 1)->where('date', '<=', $date)->isEmpty()
            ) {
                $Profit = new Profits();
                $Profit->date = $request->input('date-close');
                $Profit->owner_id = Auth::user()->id;
                $Profit->driver_id = $User->id;
                $Profit->saldo_start = $User->profit->last()->saldo_start + $User->profit->last()->saldo_end;
                $Profit->sum_salary = $User->driverSalary->where('status', 1)->where('date', '<=', $date)->sum('salary');
                $Profit->sum_refuelings = $User->driverRefilling->where('status', 1)->where('date', '<=', $date)->sum('cost_car_refueling');
                $Profit->sum_routes = $User->driverRoute->where('status', 1)->where('date', '<=', $date)->sum('summ_route');
                $Profit->sum_services = $User->driverService->where('status', 1)->where('date', '<=', $date)->sum('sum');

                $isService = 0;
                foreach ($User->driverRoute->where('status', 1)->where('date', '<=', $date) as $Route) {
                    if ($Route->is_service) {
                        $isService = 1;
                    }
                }
                if ($isService) {
                    $Profit->sum_amount = $Profit->sum_routes + $Profit->sum_services;
                } else {
                    $Profit->sum_amount = $Profit->sum_routes - $Profit->sum_refuelings;
                }
                $Profit->saldo_end = $Profit->sum_amount - $Profit->sum_salary;
                $Profit->comment = $request->input('comment');
                $Profit->save();

                Salary::where('status', 1)->where('driver_id', $User->id)->where('date', '<=', $date)->update(['status' => 0, 'profit_id' => $Profit->id]);
                Refilling::where('status', 1)->where('driver_id', $User->id)->where('date', '<=', $date)->update(['status' => 0, 'profit_id' => $Profit->id]);
                Routes::where('status', 1)->where('driver_id', $User->id)->where('date', '<=', $date)->update(['status' => 0, 'profit_id' => $Profit->id]);
                Services::where('status', 1)->where('driver_id', $User->id)->where('date', '<=', $date)->update(['status' => 0]);
            }
        }

        //$Telegram = new TelegramController();
        //$Telegram->sendMessage('Произведено новое начисление.');
        return redirect()->route('profit.list')->with('success', 'Произведено закрытие периода.');
    }

    public function export($id, $date)
    {
        $User = User::find($id);

        $Salary = $User->driverSalary->where('status', 1)->where('date', '<=', $date)->sortByDesc('date')->toArray();
        foreach ($Salary as $i) {
            $all_date[] = $i['date'];
            $all_data[] = $i['comment'] . ' ';
            $salary_sum[] = $i['salary'];
            $refilling_sum[]  = ' ';
            $route_sum[]  = ' ';
            $service_sum[] = ' ';
            $all_sum[] = ' ';
        }

        $Refilling = $User->driverRefilling->where('status', 1)->where('date', '<=', $date)->sortByDesc('date')->toArray();
        foreach ($Refilling as $i) {
            $all_date[] = $i['date'];
            $all_data[] = 'Заправлено ' . $i['num_liters_car_refueling'] . ' л. по ' . $i['price_car_refueling'] . ' руб.';
            $salary_sum[] = ' ';
            $refilling_sum[]  = $i['cost_car_refueling'];
            $route_sum[]  = ' ';
            $service_sum[] = ' ';
            $all_sum[] = ' ';
        }

        $Route = $User->driverRoute->where('status', 1)->where('date', '<=', $date)->sortByDesc('date')->toArray();
        foreach ($Route as $i) {
            $all_date[] = $i['date'];
            $all_data[] = $i['address_loading'] . ' - ' . $i['address_unloading'] . ' ' . $i['route_length'] .
                ' Рейсов - ' . $i['number_trips'] . ' Стоимость - ' . $i['price_route'] .
                ' руб. Непредвиденные расходы - ' . $i['unexpected_expenses'] . ' ' . $i['comment'];
            $salary_sum[] = ' ';
            $refilling_sum[]  = ' ';
            $route_sum[]  = $i['summ_route'];
            $service_sum[] = ' ';
            $all_sum[] = ' ';
        }

        $Service = $User->driverService->where('status', 1)->where('date', '<=', $date)->sortByDesc('date')->toArray();
        foreach ($Service as $i) {
            $all_date[] = $i['date'];
            $all_data[] = $i['price'] . ' - ' . $i['number_operations'] . ' ' . $i['comment'];
            $salary_sum[] = ' ';
            $refilling_sum[]  = ' ';
            $route_sum[]  = ' ';
            $service_sum[] = $i['sum'];
            $all_sum[] = ' ';
        }

        $isService = 0;
        foreach ($User->driverRoute->where('status', 1)->where('date', '<=', $date) as $Route) {
            if ($Route->typeTruck->is_service) {
                $isService = 1;
            }
        }
        if ($isService) {
            $sumPeriod = $User->driverRoute->where('status', 1)->where('date', '<=', $date)->sum('summ_route') +
                $User->driverService->where('status', 1)->where('date', '<=', $date)->sum('sum') -
                $User->driverSalary->where('status', 1)->where('date', '<=', $date)->sum('salary');
        } else {
            $sumPeriod = $User->driverRoute->where('status', 1)->where('date', '<=', $date)->sum('summ_route') -
                $User->driverRefilling->where('status', 1)->where('date', '<=', $date)->sum('cost_car_refueling') -
                $User->driverSalary->where('status', 1)->where('date', '<=', $date)->sum('salary');
        }

        $params = [
            '{num}' => $User->profit->last()->id,
            '{date_start}' => $User->profit->last()->created_at,
            '{date_end}' => date('d.m.Y'),
            '{driver_full_name}' => $User->profile->FullName,
            '{saldo_start}' => $User->profit->last()->saldo_end,
            '{salary_sum_period}' => $User->driverSalary->where('status', 1)->sum('salary'),
            '{refilling_sum_period}' => $User->driverRefilling->where('status', 1)->sum('cost_car_refueling'),
            '{route_sum_period}' => $User->driverRoute->where('status', 1)->sum('summ_route'),
            '{service_sum_period}' => $User->driverService->where('status', 1)->sum('sum'),
            '{sum_period}' => $sumPeriod,
            '{saldo_end}' => $User->profit->last()->saldo_end + $sumPeriod,

            '[all_date]' => $all_date,
            '[all_data]' => $all_data,
            '[salary_sum]' => $salary_sum,
            '[refilling_sum]' => $refilling_sum,
            '[route_sum]' => $route_sum,
            '[service_sum]' => $service_sum,
            '[all_sum]' => $all_sum,
        ];

        $templateFile = 'template-rle-1.xlsx';
        $fileName = 'Акт сверки ' . $User->profile->fullName . '.xlsx';

        PhpExcelTemplator::outputToFile($templateFile, $fileName, $params);
        // return Excel::download(new ProfitExport($id), 'Profit-' . $id . '.xlsx');
    }

    public function export_archive($id)
    {
        $User = User::find($id);
        $Profits = Profits::where('status', 1)->where('driver_id', $id)->get();
        foreach ($Profits as $Profit) {
            $date[] = $Profit->date;
            $saldo_start[] = $Profit->saldo_start;
            $sum_salary[] = $Profit->sum_salary;
            $sum_refuelings[] = $Profit->sum_refuelings;
            $sum_routes[] = $Profit->sum_routes;
            $sum_services[] = $Profit->sum_services;
            $saldo_end[] = $Profit->saldo_end;
            $comment[] = $Profit->comment;
        }

        $params = [
            '{name}' => $User->profile->fullName,

            '[date]' => $date,
            '[saldo_start]' => $saldo_start,
            '[sum_salary]' => $sum_salary,
            '[sum_refuelings]' => $sum_refuelings,
            '[sum_routes]' => $sum_routes,
            '[sum_services]' => $sum_services,
            '[saldo_end]' => $saldo_end,
            '[comment]' => $comment,
        ];

        $templateFile = 'template-rle-2.xlsx';
        $fileName = 'Cверки ' . $User->profile->fullName . '.xlsx';

        PhpExcelTemplator::outputToFile($templateFile, $fileName, $params);
    }

    public function export_all()
    {

        $Profits = Profits::where('status', 1)->get();
        foreach ($Profits as $Profit) {
            $name[] = $Profit->driver->profile->fullName;
            $date[] = $Profit->date;
            $saldo_start[] = $Profit->saldo_start;
            $sum_salary[] = $Profit->sum_salary;
            $sum_refuelings[] = $Profit->sum_refuelings;
            $sum_routes[] = $Profit->sum_routes;
            $sum_services[] = $Profit->sum_services;
            $saldo_end[] = $Profit->saldo_end;
            $comment[] = $Profit->comment;
        }

        $params = [
            '[name]' => $name,
            '[date]' => $date,
            '[saldo_start]' => $saldo_start,
            '[sum_salary]' => $sum_salary,
            '[sum_refuelings]' => $sum_refuelings,
            '[sum_routes]' => $sum_routes,
            '[sum_services]' => $sum_services,
            '[saldo_end]' => $saldo_end,
            '[comment]' => $comment,
        ];

        $templateFile = 'template-rle-all.xlsx';
        $fileName = 'Cверки.xlsx';

        PhpExcelTemplator::outputToFile($templateFile, $fileName, $params);
    }
}
