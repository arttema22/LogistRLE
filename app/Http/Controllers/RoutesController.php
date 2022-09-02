<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DirTypeTrucks;
use App\Models\DirCargo;
use App\Models\DirPayers;
use App\Models\DirAddress;
use App\Models\DirServices;
use App\Models\Services;
use App\Models\RouteBilling;
use App\Http\Filters\RoutesFilter;
use App\Models\DistanceBilling;
use Illuminate\Support\Facades\Gate;

//use App\Http\Controllers\TelegramController;

class RoutesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->validate(['driver-id' => 'numeric']);
        $filter = app()->make(RoutesFilter::class, ['queryParams' => array_filter($data)]);
        $Services = DirServices::all();
        $Payers = DirPayers::all();
        $TypeTrucks = DirTypeTrucks::all();
        $Cargo = DirCargo::all();
        if (Gate::allows('is-driver')) {
            $Routes = Routes::where('status', 1)->where('driver_id', Auth::user()->id)->filter($filter)->simplePaginate(config('app.pagination_count'));
            return view('routes.routes', ['Routes' => $Routes, 'Services' => $Services, 'Payers' => $Payers, 'TypeTrucks' => $TypeTrucks, 'Cargo' => $Cargo]);
        } else {
            $Users = User::where('role_id', 2)->get();
            $Routes = Routes::where('status', 1)->filter($filter)->simplePaginate(config('app.pagination_count'));
            return view('routes.routes', ['Routes' => $Routes, 'Users' => $Users, 'Services' => $Services, 'Payers' => $Payers, 'TypeTrucks' => $TypeTrucks, 'Cargo' => $Cargo]);
        }
    }

    public function archive(Request $request)
    {
        $data = $request->validate(['driver-id' => 'numeric']);
        $filter = app()->make(RoutesFilter::class, ['queryParams' => array_filter($data)]);
        if (Gate::allows('is-driver')) {
            $Routes = Routes::where('status', 0)->where('driver_id', Auth::user()->id)->filter($filter)->simplePaginate(config('app.pagination_count'));
            return view('routes.archive', ['Routes' => $Routes]);
        } else {
            $Users = User::where('role_id', 2)->get();
            $Routes = Routes::where('status', 0)->filter($filter)->simplePaginate(config('app.pagination_count'));
            return view('routes.archive', ['Routes' => $Routes, 'Users' => $Users]);
        }
    }

    public function create()
    {
        $TypeTrucks = DirTypeTrucks::all();
        $Cargo = DirCargo::all();
        $Payers = DirPayers::all();
        $RoutesBilling = RouteBilling::all();
        $Services = DirServices::all();
        if (Gate::allows('is-driver')) { //текущий пользователь имеет роль водителя
            return view('routes.create', ['TypeTrucks' => $TypeTrucks, 'Cargo' => $Cargo, 'Payers' => $Payers, 'RoutesBilling' => $RoutesBilling, 'Services' => $Services]);
        } else {
            $Users = User::where('role_id', 2)->get();
            return view('routes.create', ['Users' => $Users, 'TypeTrucks' => $TypeTrucks, 'Cargo' => $Cargo, 'Payers' => $Payers, 'RoutesBilling' => $RoutesBilling, 'Services' => $Services]);
        }
    }

    public function store(Request $request)
    {
        // проверка введенных данных
        if (Gate::allows('is-driver')) {
            $valid = $request->validate([
                'date-route' => 'required|date',
                'type-truck' => 'required|numeric|not_in:0',
                'cargo' => 'required|numeric|min:0|not_in:0',
                'payer' => 'required|numeric|min:0|not_in:0',
                'number-trips' => 'required|numeric',
            ]);
        } else {
            $valid = $request->validate([
                'date-route' => 'required|date',
                'driver-id' => 'required|numeric|min:0|not_in:0',
                'type-truck' => 'required|numeric|not_in:0',
                'cargo' => 'required|numeric|min:0|not_in:0',
                'payer' => 'required|numeric|min:0|not_in:0',
                'number-trips' => 'required|numeric',
            ]);
        }

        // создание модели данных
        $Route = new Routes();
        // заполнение модели данными из формы
        $Route->owner_id = Auth::user()->id;
        if (Gate::allows('is-driver')) { //текущий пользователь имеет роль водителя
            $Route->driver_id = Auth::user()->id;
        } else {
            $Route->driver_id = $request->input('driver-id');
        }
        /* возможно получение отрицательного значения
         * перевод отрицательного значения в положительное
         */
        $val = $request->input('type-truck');
        if ($val < 0) {
            $val = gmp_strval(gmp_neg($val));
        }
        $Route->dir_type_trucks_id = $val;
        $Route->cargo_id = $request->input('cargo');
        $Route->payer_id = $request->input('payer');
        // определяем стандартный маршрут или кастомный
        $route_type = intval($request->input('route-billing'));
        if ($route_type < 0) {
            $Route->address_loading = $request->input('address-loading');
            $Route->address_unloading = $request->input('address-unloading');
            $Route->route_length = $request->input('route-length');
            // Записываем новый маршрут
            $RouteBill = new RouteBilling();
            $RouteBill->start = $request->input('address-loading');
            $RouteBill->finish = $request->input('address-unloading');
            $RouteBill->length = $request->input('route-length');
            $RouteBill->save();
        } else {
            $RouteBill = RouteBilling::find($route_type);
            $Route->address_loading = $RouteBill->start;
            $Route->address_unloading = $RouteBill->finish;
            $Route->route_length = $RouteBill->length;
        }
        $Route->date_route = $request->input('date-route');
        $Route->number_trips = $request->input('number-trips');
        // расчет цены маршрута
        $Distance = DistanceBilling::find($Route->dir_type_trucks_id);
        if ($Route->route_length >= 300) {
            $Route->price_route = $Distance->more_300_km * $Route->route_length; //стоимость за 1 км * расстояние
        } elseif ($Route->route_length >= 60) {
            $Route->price_route = $Distance->more_60_km * $Route->route_length; //стоимость за 1 км * расстояние
        } elseif ($Route->route_length <= 15) {
            $Route->price_route = $Distance->up_15_km; // стоимость всего маршрута
        } elseif ($Route->route_length <= 30) {
            $Route->price_route = $Distance->up_30_km; // стоимость всего маршрута
        } else {
            if ($Route->dir_type_trucks_id == 2) {
                $Route->price_route = $Distance->up_60_km * $Route->route_length; //стоимость за 1 км * расстояние
            } else {
                $Route->price_route = $Distance->up_60_km; // стоимость всего маршрута
            }
        }
        $Route->price_route = $Route->price_route * $Route->number_trips;

        if ($request->filled('unexpected-expenses')) {
            $Route->unexpected_expenses = $request->input('unexpected-expenses');
        }
        $Route->summ_route = $Route->price_route / 2 + $Route->unexpected_expenses;
        $Route->comment = $request->input('comment');
        // сохранение данных в базе
        $Route->save();
        /* Запись дополнительных услуг */
        if ($request->input('service-id-1') > 0) {
            $Service = new Services();
            $Service->route_id = $Route->id;
            $Service->service_id = $request->input('service-id-1');
            $Service->price = $Service->service->price;
            $Service->number_operations = $request->input('number-operations-1');
            $Service->sum = $Service->price * $Service->number_operations;
            $Service->comment = $request->input('service-comment-1');
            $Service->save();
        }
        if ($request->input('service-id-2') > 0) {
            $Service = new Services();
            $Service->route_id = $Route->id;
            $Service->service_id = $request->input('service-id-2');
            $Service->price = $Service->service->price;
            $Service->number_operations = $request->input('number-operations-2');
            $Service->sum = $Service->price * $Service->number_operations;
            $Service->comment = $request->input('service-comment-2');
            $Service->save();
        }
        if ($request->input('service-id-3') > 0) {
            $Service = new Services();
            $Service->route_id = $Route->id;
            $Service->service_id = $request->input('service-id-3');
            $Service->price = $Service->service->price;
            $Service->number_operations = $request->input('number-operations-3');
            $Service->sum = $Service->price * $Service->number_operations;
            $Service->comment = $request->input('service-comment-3');
            $Service->save();
        }
        if ($request->input('service-id-4') > 0) {
            $Service = new Services();
            $Service->route_id = $Route->id;
            $Service->service_id = $request->input('service-id-4');
            $Service->price = $Service->service->price;
            $Service->number_operations = $request->input('number-operations-4');
            $Service->sum = $Service->price * $Service->number_operations;
            $Service->comment = $request->input('service-comment-4');
            $Service->save();
        }
        if ($request->input('service-id-5') > 0) {
            $Service = new Services();
            $Service->route_id = $Route->id;
            $Service->service_id = $request->input('service-id-5');
            $Service->price = $Service->service->price;
            $Service->number_operations = $request->input('number-operations-5');
            $Service->sum = $Service->price * $Service->number_operations;
            $Service->comment = $request->input('service-comment-5');
            $Service->save();
        }
        if ($request->input('service-id-6') > 0) {
            $Service = new Services();
            $Service->route_id = $Route->id;
            $Service->service_id = $request->input('service-id-6');
            $Service->price = $Service->service->price;
            $Service->number_operations = $request->input('number-operations-6');
            $Service->sum = $Service->price * $Service->number_operations;
            $Service->comment = $request->input('service-comment-6');
            $Service->save();
        }
        // Оповещение в Телеграм
        //$Telegram = new TelegramController();
        //$Telegram->sendMessage('Создан новый маршрут.');
        //$Telegram->sendContact();
        // переход к странице списка
        return redirect()->route('routes.list')->with('success', 'Новый маршрут успешно сохранен.');
    }

    public function edit($id)
    {
        $Users = User::where('role_id', 2)->get();
        $TypeTrucks = DirTypeTrucks::all();
        $Cargo = DirCargo::all();
        $Payers = DirPayers::all();
        $Services = DirServices::all();
        $Route = Routes::find($id);
        return view('routes.edit', ['Users' => $Users, 'TypeTrucks' => $TypeTrucks, 'Cargo' => $Cargo, 'Payers' => $Payers, 'Services' => $Services, 'Route' => $Route]);
    }

    public function update($id, Request $request)
    {
        // проверка введенных данных
        $valid = $request->validate([
            'driver-id' => 'required|numeric|min:0|not_in:0',
            'type-truck' => 'required|numeric|not_in:0',
            'cargo' => 'required|numeric|min:0|not_in:0',
            'payer' => 'required|numeric|min:0|not_in:0',
            'address-loading' => 'required',
            'address-unloading' => 'required',
            'route-length' => 'required|numeric',
            'price-route' => 'required|numeric',
            'date-route' => 'required|date',
            'number-trips' => 'required|numeric',
        ]);
        $Route = Routes::find($id);
        // заполнение модели данными из формы
        $Route->driver_id = $request->input('driver-id');
        /* возможно получение отрицательного значения
         * перевод отрицательного значения в положительное
         */
        $val = $request->input('type-truck');
        if ($val < 0) {
            $val = gmp_strval(gmp_neg($val));
        }
        $Route->dir_type_trucks_id = $val;
        $Route->cargo_id = $request->input('cargo');
        $Route->payer_id = $request->input('payer');
        $Route->address_loading = $request->input('address-loading');
        $Route->address_unloading = $request->input('address-unloading');
        $Route->date_route = $request->input('date-route');
        $Route->route_length = $request->input('route-length');
        $Route->price_route = $request->input('price-route');
        $Route->number_trips = $request->input('number-trips');
        if ($request->filled('unexpected-expenses')) {
            $Route->unexpected_expenses = $request->input('unexpected-expenses');
        }
        $Route->summ_route = ($Route->price_route * $Route->number_trips) / 2 + $Route->unexpected_expenses;
        $Route->comment = $request->input('comment');

        // сохранение данных в базе
        $Route->save();
        // переход к странице списка
        return redirect()->route('routes.list')->with('success', 'Маршрут успешно изменен.');
    }

    public function destroy($id)
    {
        Routes::find($id)->delete();
        // переход к странице списка
        return redirect()->route('routes.list')->with('warning', 'Маршрут был удален');
    }

    public function service_store($route_id, Request $request)
    {
        $valid = $request->validate([
            'service-id' => 'required',
            'number-operations' => 'required|numeric|min:0|not_in:0',
        ]);
        $Service = new Services();
        $Service->route_id = $route_id;
        $Service->service_id = $request->input('service-id');
        $Service->price = $Service->service->price;
        $Service->number_operations = $request->input('number-operations');
        $Service->sum = $Service->price * $Service->number_operations;
        $Service->comment = $request->input('service-comment');
        $Service->save();
        return redirect()->route('routes.list');
    }

    public function service_update($id, Request $request)
    {
        $Service = Services::find($id);
        $Service->service_id = $request->input('service-' . $id);
        $Service->price = $request->input('price-' . $id);
        $Service->number_operations = $request->input('number-oper-' . $id);
        $Service->sum = $Service->price * $Service->number_operations;
        $Service->comment = $request->input('comment-' . $id);
        $Service->save();
        return redirect()->route('routes.list');
    }

    public function service_destroy($id)
    {
        Services::find($id)->delete();
        // переход к странице списка
        return redirect()->route('routes.list');
    }
}
