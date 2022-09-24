@extends('layouts.app')

@section('title')Общая сверка@endsection

@section('content')
@include('inc.filter-profit')
<nav class="navbar">
    <div class="container-fluid">
        @cannot('is-driver')
        {{-- <a class="btn btn-outline-success btn-sm" href="{{ route('profit.export-all') }}">Экспорт всех</a> --}}
        @endcan
    </div>
</nav>

@foreach ( $Users as $User)
<div class="card mb-3">
    <div class="card-header navbar">
        <h5>{{ $User->profile->fullName }}</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Сальдо начальное</th>
                        <th>Выплаты</th>
                        <th>Начислено</th>
                        <th>Период</th>
                        <th>Сальдо конечное</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $User->profit->where('status', 1)->where('date','<=', $dateProfit)->
                        sortBy('date') as $Profit )
                        <tr>
                            <td>{{$Profit->date}}</td>
                            <td>{{$Profit->saldo_start}}</td>
                            <td>{{$Profit->sum_salary}}</td>
                            <td>{{$Profit->sum_amount}}</td>
                            <td>{{$Profit->sum_amount}}</td>
                            <td>{{$Profit->saldo_end}}</td>
                        </tr>
                        @endforeach
                        <tr class="table-info">
                            @php
                            echo '<td>'. date('d.m.Y') .'</td>';
                            $sumRefilling = $User->driverRefilling->where('status', 1)->sum('cost_car_refueling');
                            $sumRoute = $User->driverRoute->where('status', 1)->sum('summ_route');
                            $sumService = $User->driverService->where('status', 1)->sum('sum');

                            $saldoStart = $User->profit->last()->saldo_end;
                            echo '<td>'.$saldoStart.'</td>';

                            $sumSalary = $User->driverSalary->where('status', 1)->sum('salary');
                            echo '<td>'.$sumSalary.'</td>';

                            $isService = 0;
                            foreach ($User->driverRoute->where('status', 1) as $Route) { if
                            ($Route->is_service) {
                            $isService = 1;
                            }
                            }
                            if ($isService) {
                            $sumAccrual = $sumRoute + $sumService;
                            } else {
                            $sumAccrual = $sumRoute - $sumRefilling;
                            }
                            echo '<td>'.$sumAccrual.'</td>';

                            $sumAmount = $sumAccrual - $sumSalary;
                            echo '<td>'.$sumAmount.'</td>';

                            $saldoEnd = $saldoStart + $sumAmount;
                            echo '<td>'.$saldoEnd.'</td>';
                            @endphp
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer navbar">
        <i></i>
        <a class="btn btn-outline-success btn-sm" href="{{ route('profit.export-archive', [$User->id, $dateProfit]) }}"
            role="button">Экспорт</a>
    </div>
</div>
@endforeach
@endsection
