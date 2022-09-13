@extends('layouts.app')

@section('title')Сверка@endsection

@section('content')
<h1 class="mt-5">Сверка</h1>
@foreach ( $Users as $User)
<div class="card mb-3">
    <div class="card-header navbar">
        <h5>{{ $User->profile->fullName }}</h5>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Сальдо начальное</th>
                    <th>Выплаты</th>
                    <th>Заправки</th>
                    <th>Маршруты</th>
                    <th>Услуги</th>
                    <th>Сальдо конечное</th>
                    <th>Комментарий</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $User->profit as $Profit )
                <tr>
                    <td>{{$Profit->date}}</td>
                    <td>{{$Profit->saldo_start}}</td>
                    <td>{{$Profit->sum_salary}}</td>
                    <td>{{$Profit->sum_refuelings}}</td>
                    <td>{{$Profit->sum_routes}}</td>
                    <td>{{$Profit->sum_services}}</td>
                    <td>{{$Profit->saldo_end}}</td>
                    <td>{{$Profit->comment}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endforeach
@endsection
