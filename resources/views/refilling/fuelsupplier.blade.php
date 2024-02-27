@extends('layouts.app')

@section('title'){{__('refilling.refillings')}}Заправки@endsection

@section('content')

@if(count($FuelSuppliers))
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Организация</th>
                <th>Договор</th>
                <th>Дата</th>
                <th>Баланс</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($FuelSuppliers as $FuelSupplier)
            <tr>
                <td>{{ $FuelSupplier->name }}</td>
                <td>{{ $FuelSupplier->number }}</td>
                <td>{{$FuelSupplier->date}}</td>
                <td>{{$FuelSupplier->balance}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
@include('inc.list-empty')
@endif
@endsection