@extends('layouts.app')

@section('title')Панель@endsection

@section('content')
<div class="container py-4" id="hanging-icons">
    <div class="row g-4 py-4 row-cols-1 row-cols-lg-2">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Маршруты <span class="badge rounded-pill text-bg-success">{{$RoutesActive}}</span></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Сервис работы с маршрутами. Не забывайте подать данные.</p>
                    <a href="{{route('routes.create')}}" class="btn btn-primary">Новый маршрут</a>
                    <a href="{{route('routes.list')}}" class="btn btn-outline-primary">Список</a>
                    <a href="{{route('routes.archive')}}" class="card-link">Архив</a>
                </div>
                <div class="card-footer">
                    Маршрутов всего {{$RoutesAll}} из них активных {{$RoutesActive}}
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Заправки <span class="badge rounded-pill text-bg-success">{{$RefillingsActive}}</span></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Сервис работы с заправками автомобиля. Не забывайте подать данные.</p>
                    <a href="{{route('refilling.create')}}" class="btn btn-primary">Новая заправка</a>
                    <a href="{{route('refilling.list')}}" class="btn btn-outline-primary">Список</a>
                    <a href="{{route('refilling.archive')}}" class="card-link">Архив</a>
                </div>
                <div class="card-footer">
                    Заправок всего {{$RefillingsAll}} из них активных {{$RefillingsActive}}
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Выплаты <span class="badge rounded-pill text-bg-success">{{$SalaryActive}}</span></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Сервис работы с выплатами.</p>
                    <a href="{{route('salary.create')}}" class="btn btn-primary">Новая выплата</a>
                    <a href="{{route('salary.list')}}" class="btn btn-outline-primary">Список</a>
                    <a href="{{route('salary.archive')}}" class="card-link">Архив</a>
                </div>
                <div class="card-footer">
                    Выплат всего {{$SalaryAll}} из них активных {{$SalaryActive}}
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Расчеты</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Сервис работы с начислениями зарплаты.</p>
                    <a href="{{route('profit.list')}}" class="btn btn-outline-primary">Текщие</a>
                    <a href="{{route('profit.archive')}}" class="btn btn-outline-primary">Общая сверка</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
