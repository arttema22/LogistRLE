@extends('layouts.app')

@section('title'){{__('refilling.refillings')}}Заправки@endsection

@section('content')
{{-- @if(count($FuelSuppliers))
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Организация</th>
                <th>Договор</th>
                <th>Баланс</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($FuelSuppliers as $FuelSupplier)
            <tr>
                <td>
                    {{ $FuelSupplier->name }}<br>
                    <small class="text-muted"><em>ИНН:{{ $FuelSupplier->inn }}/КПП:{{ $FuelSupplier->kpp }}</em></small>
                </td>
                <td>
                    {{ $FuelSupplier->number }}<br>
                    <small class="text-muted"><em>от {{$FuelSupplier->date}}</em></small>
                </td>
                <td>
                    <h5>{{$FuelSupplier->balance}}</h5>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
@include('inc.list-empty')
@endif --}}

@if(count($Contracts))
<h3>Договор</h3>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Организация</th>
                <th>Договор</th>
                <th>Баланс</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $Contracts ?? [] as $Contract)
            <tr>
                <td>
                    MОНОПОЛИЯ<br>
                    <small class="text-muted"><em>ИНН:{{ $Contract['inn'] }}/КПП:{{ $Contract['kpp'] }}</em></small>
                </td>
                <td>
                    {{ $Contract['number'] }}<br>
                    <small class="text-muted"><em>от {{$Contract['date']}}</em></small>
                </td>
                <td>
                    <h5>{{$Contract['balance']}}</h5>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
@include('inc.list-empty')
@endif

@if(count($Payments))
<h3>Платежи</h3>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Тип</th>
                <th>Сумма</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $Payments ?? [] as $Payment)
            <tr>
                <td>
                    {{ $Payment['date'] }}
                </td>
                <td>
                    {{ $Payment['name'] }}
                </td>
                <td>
                    {{ $Payment['total'] }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
@include('inc.list-empty')
@endif

@if(count($Transactions))
<h3>Заправки</h3>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Кто</th>
                <th>Топливо</th>
                <th>Стоимость</th>
                <th>Заправка</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $Transactions ?? [] as $Transaction)
            <tr>
                <td>
                    {{$Transaction['refuelingDate']}}
                </td>
                <td>
                    Авто: {{$Transaction['regNumber']}}<br>
                    Тел: {{$Transaction['driverPhone']}}
                </td>
                <td>
                    {{$Transaction['fuelType']}}<br>
                    {{$Transaction['refuelVolume']}} л.
                </td>
                <td>
                    Скидка: {{$Transaction['discountPercent']}}%<br>
                    Цена с учетом скидки: {{$Transaction['pricePerUnitWithDiscount']}}<br>
                    Цена стелы: {{$Transaction['pricePerUnit']}}<br>
                    Стоимость с учетом скидки: {{$Transaction['totalCostsWithDiscount']}}<br>
                    Стоимость по стеле: {{$Transaction['totalCosts']}}<br>
                </td>
                <td>
                    {{$Transaction['station']['brand']}}<br>
                    {{$Transaction['station']['addressDetails']}}<br>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
@include('inc.list-empty')
@endif

@endsection