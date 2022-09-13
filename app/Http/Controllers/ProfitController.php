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

class ProfitController extends Controller
{

    // список сверок
    public function index(Request $request)
    {
        $data = $request->validate(['driver-id' => 'numeric']);
        $filter = app()->make(ProfitFilter::class, ['queryParams' => array_filter($data)]);
        $isService = 0;
        if (Gate::allows('is-driver')) {
            $Users = User::where('id', Auth::user()->id)->get();
            return view('profit.profit', ['Users' => $Users, 'isService' => $isService]);
        } else {
            $Users = User::where('role_id', 2)->filter($filter)->get();
            $User_list = User::where('role_id', 2)->get();
            return view('profit.profit', ['Users' => $Users, 'User_list' => $User_list, 'isService' => $isService]);
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
        $Users = User::where('role_id', 2)->get();
        foreach ($Users as $User) {
            if (!$User->driverRefilling->where('status', 1)->isEmpty() or !$User->driverRoute->where('status', 1)->isEmpty() or !$User->driverSalary->where('status', 1)->isEmpty()) {
                $Profit = new Profits();
                $Profit->date = $request->input('date-close');
                $Profit->owner_id = Auth::user()->id;
                $Profit->driver_id = $User->id;
                $Profit->saldo_start = $User->profit->last()->saldo_end;
                $Profit->sum_salary = $User->driverSalary->where('status', 1)->sum('salary');
                $Profit->sum_refuelings = $User->driverRefilling->where('status', 1)->sum('cost_car_refueling');
                $Profit->sum_routes = $User->driverRoute->where('status', 1)->sum('summ_route');
                $Profit->sum_services = $User->driverService->where('status', 1)->sum('sum');

                $isService = 0;
                foreach ($User->driverRoute->where('status', 1) as $Route) {
                    if ($Route->is_service) {
                        $isService = 1;
                    }
                }

                if ($isService) {
                    $Profit->saldo_end = $Profit->saldo_start + $Profit->sum_routes +
                        $Profit->sum_services - $Profit->sum_salary;
                } else {
                    $Profit->saldo_end = $Profit->saldo_start + $Profit->sum_routes - $Profit->sum_refuelings -
                        $Profit->sum_salary;
                }

                $Profit->comment = $request->input('comment');
                $Profit->save();
            }
        }

        // if ($salary != null) {
        //     Salary::whereIn('id', $salary)->where('status', 1)->where('driver_id', $User->id)->update(['status' => 0, 'profit_id' => $Profit->id]);
        // }
        // if ($refilling != null) {
        //     Refilling::whereIn('id', $refilling)->where('status', 1)->where('driver_id', $User->id)->update(['status' => 0, 'profit_id' => $Profit->id]);
        // }
        // if ($route != null) {
        //     Routes::whereIn('id', $route)->where('status', 1)->where('driver_id', $User->id)->update(['status' => 0, 'profit_id' => $Profit->id]);
        //     Services::where('driver_id', $User->id)->where('status', 1)->update(['status' => 0]);
        // }


        //$Telegram = new TelegramController();
        //$Telegram->sendMessage('Произведено новое начисление.');
        return redirect()->route('profit.list')->with('success', 'Произведено закрытие периода.');
    }

    public function export($id)
    {
        return Excel::download(new ProfitExport($id), 'Profit-' . $id . '.xlsx');
    }
}
