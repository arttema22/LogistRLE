@extends('layouts.app')

@section('title')Заправки@endsection

@section('content')
@if(count($Refillings))
<nav class="navbar">
    <div class="container-fluid">
        <h1>Заправки</h1>
        @cannot('is-driver')
        <form class="d-flex" method="get">
            <select name="driver-id" id="driver-id" class="form-select me-2" aria-label="Водитель">
                <option value="0">Водитель</option>
                @foreach($Users as $User)
                <option value="{{$User->id}}" @if(isset($_GET['driver-id'])) @if($_GET['driver-id']==$User->id) selected
                    @endif @endif>{{$User->profile->FullName}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary me-2">Фильтр</button>
            <a class="btn btn-outline-primary" href="{{route('refilling.list')}}">Очистить</a>
        </form>
        @endcan
    </div>
</nav>
@foreach ($Refillings as $Refilling)
<div class="card mb-3">
    @cannot('is-driver')
    <div class="card-header">
        {{ $Refilling->driver->profile->FullName }}
    </div>
    @endcan
    <div class="card-body">
        <p class="card-text">{{$Refilling->date_car_refueling}} - {{$Refilling->cost_car_refueling}} руб.</p>
        <p class="card-text">АЗС - {{$Refilling->petrolStation->title}} 1 литр - {{$Refilling->price_car_refueling}}
            руб. Заправлено {{$Refilling->num_liters_car_refueling}} л.</p>
        <a href="{{ route('refilling.edit', $Refilling->id) }}" class="btn btn-outline-primary btn-sm">Изменить</a>
        <!-- Кнопка удаления записи -->
        <!-- Обязательно подключение include('inc.modal-delete') -->
        <!-- data-bs-url - содержит ссылку на удаление -->
        <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
            data-bs-url="{{ route('refilling.destroy', $Refilling->id) }}" data-bs-type="заправки"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Удалить</button>
    </div>
    <div class="card-footer text-muted">
        <small>
            Создана: {{$Refilling->created_at}}
            Изменена: {{$Refilling->updated_at}}
            Владелец: {{$Refilling->owner->profile->FullName}}
        </small>
    </div>
</div>
@endforeach
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary btn-lg" href="{{route('refilling.create')}}" role="button">Новая заправка</a>
</div>
@include('inc.modal-delete')
@else
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Заправок нет</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Не совершено ни одной заправки. Необходимо создать новую заправку или перейти к просмотру
            архива.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{route('refilling.create')}}" role="button">Новая
                заправка</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{route('refilling.archive')}}" role="button">Архив
                заправок</a>
        </div>
    </div>
</div>
@endif
@endsection
