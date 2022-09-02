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

class ProfitController extends Controller
{

    // список сверок
    public function index()
    {
        if (Gate::allows('is-driver')) {
            $Salary = Salary::where('status', 1)->where('driver_id', Auth::user()->id)->get();
            $Routes = Routes::where('status', 1)->where('driver_id', Auth::user()->id)->get();
            $Refillings = Refilling::where('status', 1)->where('driver_id', Auth::user()->id)->get();
        } else {
            $Salary = Salary::where('status', 1)->get();
            $Routes = Routes::where('status', 1)->get();
            $Refillings = Refilling::where('status', 1)->get();
        }
        return view('profit.profit', ['Salaries' => $Salary, 'Routes' => $Routes, 'Refillings' => $Refillings]);
    }

    public function archive()
    {
        if (Gate::allows('is-driver')) {
            $Profits = ProfitsData::where('status', 1)->where('driver_id', Auth::user()->id)->orderByDesc('created_at')->get();
            //$Profits = ProfitsData::where('status', 1)->where('driver_id', Auth::user()->id)->orderByDesc('created_at')->simplePaginate(config('app.pagination_count'));
        } else {
            $Profits = Profits::where('status', 1)->orderByDesc('created_at')->simplePaginate(config('app.pagination_count'));
        }
        return view('profit.archive', ['Profits' => $Profits]);
    }

    public function store(Request $request)
    {
        $Profit = new Profits();
        $Profit->owner_id = Auth::user()->id;
        $Profit->save();

        $Users = User::where('role_id', 2)->get();
        foreach ($Users as $User) {
            $ProfitData = new ProfitsData();
            $ProfitData->profit_id = $Profit->id;
            $ProfitData->driver_id = $User->id;

            // расчет суммы всех начислений водителю
            $salary = $request->salary;
            if ($salary == null) {
                $ProfitData->sum_salary = 0;
            } else {
                $ProfitData->sum_salary = Salary::whereIn('id', $salary)->where('status', 1)->where('driver_id', $User->id)->sum('salary');
            }

            // расчет суммы всех заправок водителя
            $refilling = $request->refilling;
            if ($refilling == null) {
                $ProfitData->sum_refuelings = 0;
            } else {
                $ProfitData->sum_refuelings = Refilling::whereIn('id', $refilling)->where('status', 1)->where('driver_id', $User->id)->sum('cost_car_refueling');
            }

            // расчет суммы всех маршрутов водителя
            $route = $request->route;
            if ($route == null) {
                $ProfitData->sum_routes = 0;
                $ProfitData->sum_services = 0;
            } else {
                $ProfitData->sum_routes = Routes::whereIn('id', $route)->where('status', 1)->where('driver_id', $User->id)->sum('summ_route');
                $ProfitData->sum_services = Services::whereIn('route_id', $route)->where('status', 1)->sum('sum');
            }

            $ProfitData->sum_total = $ProfitData->sum_salary + $ProfitData->sum_refuelings + $ProfitData->sum_routes + $ProfitData->sum_services;
            $ProfitData->save();
            //Salary::whereIn('id', $salary)->where('status', 1)->where('driver_id', $User->id)->update(['status' => 0, 'profit_id' => $Profit->id]);
            //Refilling::whereIn('id', $refilling)->where('status', 1)->where('driver_id', $User->id)->update(['status' => 0, 'profit_id' => $Profit->id]);
            //Routes::where('status', 1)->where('driver_id', $User->id)->update(['status' => 0, 'profit_id' => $Profit->id]);
            //Services::where('status', 1)->where('route_id', $Routes->id)->update(['status' => 0]);
        }
        //$Telegram = new TelegramController();
        //$Telegram->sendMessage('Произведено новое начисление.');
        return redirect()->route('profit.list')->with('success', 'Произведено новое начисление.');
    }

    public function export($id, $uid)
    {
        return Excel::download(new ProfitExport($id, $uid), 'Profit-' . $id . '-' . $uid . '.xlsx');
    }
}
