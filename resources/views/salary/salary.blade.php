@extends('layouts.app')

@section('title')Начисления@endsection

@section('content')
@if (count($Salaries))
<nav class="navbar">
    <div class="container-fluid">
        <h1>Начисления</h1>
        @cannot('is-driver')
        <form class="d-flex" method="get">
            <select name="driver-id" id="driver-id" class="form-select me-2" aria-label="Водитель">
                <option value="0">Водитель</option>
                @foreach ($Users as $User)
                <option value="{{ $User->id }}" @if (isset($_GET['driver-id'])) @if ($_GET['driver-id']==$User->id)
                    selected @endif
                    @endif>{{ $User->profile->FullName }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary me-2">Фильтр</button>
            <a class="btn btn-outline-primary" href="{{ route('salary.list') }}">Очистить</a>
        </form>
        @endcan
    </div>
</nav>
@foreach ($Salaries as $Salary)
<div class="card mb-3">
    @cannot('is-driver')
    <div class="card-header">
        {{ $Salary->driver->profile->FullName }}
    </div>
    @endcan
    <div class="card-body">
        <p class="card-text">{{ $Salary->date }} - {{ $Salary->salary }} руб.</p>
        <a href="{{ route('salary.edit', $Salary->id) }}" class="btn btn-outline-primary btn-sm">Изменить</a>
        <!-- Кнопка удаления записи -->
        <!-- Обязательно подключение include('inc.modal-delete') -->
        <!-- data-bs-url - содержит ссылку на удаление -->
        <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
            data-bs-url="{{ route('salary.destroy', $Salary->id) }}" data-bs-type="начисления" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">Удалить</button>
    </div>
    <div class="card-footer text-muted">
        <small>
            Создано: {{$Salary->created_at}}
            Изменено: {{$Salary->updated_at}}
            Владелец: {{$Salary->owner->profile->FullName}}
        </small>
    </div>
</div>
@endforeach
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary btn-lg" href="{{ route('salary.create') }}" role="button">Новое начисление</a>
</div>
@include('inc.modal-delete')
@else
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Начислений нет</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Не совершено ни одного начисления. Необходимо создать новое начисление или перейти к
            просмотру архива.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('salary.create') }}" role="button">Новое
                начисление</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{ route('salary.archive') }}"
                role="button">Выплаты</a>
        </div>
    </div>
</div>
@endif
@endsection
