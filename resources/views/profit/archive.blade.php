@extends('layouts.app')

@section('title')Список расчетов@endsection

@section('content')
<h1 class="mt-5">Список расчетов</h1>
@if (count($Profits))
@can('is-driver')
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th scope="col" style="width: 1%">#</th>
                <th scope="col">Дата</th>
                <th scope="col">Сумма выплаты</th>
                <th scope="col">Сумма заправок</th>
                <th scope="col">Сумма маршрутов</th>
                <th scope="col">Сумма услуг</th>
                <th scope="col">Сумма итоговая</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Profits as $Profit)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $Profit->created_at }}</td>
                <td>{{ $Profit->sum_salary }} руб.</td>
                <td>{{ $Profit->sum_refuelings }} руб.</td>
                <td>{{ $Profit->sum_routes }} руб.</td>
                <td>{{ $Profit->sum_services }} руб.</td>
                <td>
                    <h6>{{ $Profit->sum_total }} руб.</h6>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Всего начислений: {{ $Profits->count() }}</td>
                <td>
                    <h6>{{ $Profits->sum('sum_total') }} руб.</h6>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@else
<div class="accordion accordion-flush" id="accordionFlushRoutes">
    @foreach ($Profits as $Profit)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading{{ $Profit->id }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse{{ $Profit->id }}" aria-expanded="false"
                aria-controls="flush-collapse{{ $Profit->id }}">
                <h4>{{ $loop->iteration }} {{ $Profit->created_at }}</h4>
            </button>
        </h2>
        <div id="flush-collapse{{ $Profit->id }}" class="accordion-collapse collapse"
            aria-labelledby="flush-heading{{ $Profit->id }}" data-bs-parent="#accordionFlushRoutes">
            <div class="accordion-body">
                @if (count($Profit->profitData->where('profit_id', $Profit->id)))
                @foreach ($Profit->profitData->where('profit_id', $Profit->id) as $Data)
                <div class="table-responsive">
                    <table class="table table-hover caption-top">
                        <caption>
                            {{ $Data->driver->profile->FullName }}
                            <a class="btn btn-outline-success btn-sm"
                                href="{{ route('profit.export', [$Profit->id, $Data->id]) }}" role="button">Экспорт</a>
                        </caption>
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Дата</th>
                                <th>Документ</th>
                                <th>Сумма за маршрут</th>
                                <th>Топливо</th>
                                <th>Выплачено</th>
                                <th>Итог</th>
                            </tr>
                        </thead>
                        <!-- Маршруты -->
                        @if (count($Data->driver->driverRoute->where('profit_id', $Profit->id)))
                        @foreach ($Data->driver->driverRoute->where('profit_id', $Profit->id) as $Route)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $Route->date_route }}</td>
                            <td>
                                {{ $Route->address_loading }} - {{ $Route->address_unloading }} {{ $Route->route_length
                                }} км.
                                <!-- Услуги -->
                                @if (count($Route->services->where('route_id', $Route->id)))
                                @foreach ($Route->services->where('route_id', $Route->id) as $Service)
                                <br>{{ $Service->service->title }} {{ $Service->number_operations }} сумма: {{
                                $Service->sum }} руб.
                                ( {{ $Service->comment }} )
                                @endforeach
                                @endif
                                <!-- Услуги -->
                            </td>
                            <td>{{ $Route->summ_route }} руб.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                        @endif
                        <!-- Маршруты -->
                        <!-- Заправки -->
                        @if (count($Data->driver->driverRefilling->where('profit_id', $Profit->id)))
                        @foreach ($Data->driver->driverRefilling->where('profit_id', $Profit->id) as $Refilling)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $Refilling->date_car_refueling }}</td>
                            <td>{{ $Refilling->num_liters_car_refueling }} л.</td>
                            <td></td>
                            <td>{{ $Refilling->cost_car_refueling }} руб.</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                        @endif
                        <!-- Заправки -->
                        <!-- Выплаты -->
                        @if (count($Data->driver->driverSalary->where('profit_id', $Profit->id)))
                        @foreach ($Data->driver->driverSalary->where('profit_id', $Profit->id) as $Salary)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $Salary->date }}</td>
                            <td>{{ $Salary->comment }}</td>
                            <td></td>
                            <td></td>
                            <td>{{ $Salary->salary }} руб.</td>
                            <td></td>
                        </tr>
                        @endforeach
                        @endif
                        <!-- Выплаты -->
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ $Data->sum_routes }} руб.<br>
                                    {{ $Data->sum_services }} руб. за услуги</td>
                                <td>{{ $Data->sum_refuelings }} руб.</td>
                                <td>{{ $Data->sum_salary }} руб.</td>
                                <td>
                                    <span class="badge @if ($Data->sum_total < 0) bg-danger @else bg-success @endif ">{{
                                        $Data->sum_total }} руб.</span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endcan
@endif
@endsection
