<?php

namespace App\Http\Controllers\billing;

use App\Models\RouteBilling;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DirTypeTrucks;

class RouteBillingController extends Controller
{

    public function index()
    {
        $RouteBilling = RouteBilling::where('status', 1)->simplePaginate(config('app.pagination_count'));
        return view('billing.route', ['RouteBilling' => $RouteBilling]);
    }

    public function create()
    {
        return view('billing.route-create');
    }

    public function store(Request $request)
    {
        // проверка введенных данных
        $valid = $request->validate([
            'start' => 'required',
            'finish' => 'required',
        ]);
        if ($request->input('collapse-new-type')) {
            $valid = $request->validate(['price' => 'required',]);
        } else {
            $valid = $request->validate(['length' => 'required',]);
        }
        $RouteBilling = new RouteBilling();
        // заполнение модели данными из формы
        $RouteBilling->start = $request->input('start');
        $RouteBilling->finish = $request->input('finish');
        if ($request->input('collapse-new-type')) {
            $RouteBilling->is_static = 1;
            $RouteBilling->price = $request->input('price');
        } else {
            $RouteBilling->is_static = 0;
            $RouteBilling->length = $request->input('length');
        }
        // сохранение данных в базе
        $RouteBilling->save();
        // переход к странице списка
        return redirect()->route('billing.route')->with('success', 'Создан новый тарифный маршрут.');
    }

    public function edit($id)
    {
        $RouteBilling = RouteBilling::where('status', 1)->find($id);
        return view('billing.route-edit', ['RouteBilling' => $RouteBilling]);
    }

    public function update($id, Request $request)
    {
        // проверка введенных данных
        $valid = $request->validate([
            'start' => 'required',
            'finish' => 'required',
        ]);
        if ($request->input('collapse-new-type')) {
            $valid = $request->validate(['price' => 'required',]);
        } else {
            $valid = $request->validate(['length' => 'required',]);
        }
        $RouteBilling = RouteBilling::find($id);
        // заполнение модели данными из формы
        $RouteBilling->start = $request->input('start');
        $RouteBilling->finish = $request->input('finish');
        if ($request->input('collapse-new-type')) {
            $RouteBilling->is_static = 1;
            $RouteBilling->length = null;
            $RouteBilling->price = $request->input('price');
        } else {
            $RouteBilling->is_static = 0;
            $RouteBilling->length = $request->input('length');
            $RouteBilling->price = null;
        }
        // сохранение данных в базе
        $RouteBilling->save();
        // переход к странице списка
        return redirect()->route('billing.route')->with('success', 'Тарифный маршрут изменен.');
    }

    public function destroy($id)
    {
        RouteBilling::find($id)->delete();
        return redirect()->route('billing.route')->with('warning', 'Тарифный маршрут был удален.');
    }
}
