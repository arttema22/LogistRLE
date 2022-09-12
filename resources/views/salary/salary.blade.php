@extends('layouts.app')

@section('title')Выплаты@endsection

@section('content')
@include('inc.filter-salary')
@if (count($Salaries))
@foreach ($Salaries as $Salary)
<div class="card mb-3">
    @cannot('is-driver')
    <div class="card-header">
        {{ $Salary->driver->profile->FullName }}
    </div>
    @endcan
    <div class="card-body">
        <p class="card-text">{{ $Salary->date }} - {{ $Salary->salary }} руб.
            <a href="#" tabindex="0" class="btn btn-outline-info btn-sm" role="button" data-toggle="popover"
                data-bs-trigger="focus" data-bs-title="Информация" data-bs-content="Создана: {{ $Salary->created_at }}
                                Изменена: {{ $Salary->updated_at }}
                                Владелец: {{ $Salary->owner->profile->FullName }}"><i class="bi bi-info"></i>
            </a>
        </p>
        <p class="card-text">{{ $Salary->comment }}</p>
    </div>
    <div class="card-footer text-muted text-end">
        <a href="{{ route('salary.edit', $Salary->id) }}" class="btn btn-outline-primary btn-sm"><i
                class="bi bi-pencil"></i></a>
        <!-- Кнопка удаления записи -->
        <!-- Обязательно подключение include('inc.modal-delete') -->
        <!-- data-bs-url - содержит ссылку на удаление -->
        <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
            data-bs-url="{{ route('salary.destroy', $Salary->id) }}" data-bs-type="начисления" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"><i class="bi bi-trash"></i></button>

    </div>
</div>
@endforeach
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary btn-lg" href="{{ route('salary.create') }}" role="button">Новая выплата</a>
</div>
@include('inc.modal-delete')
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            placement : 'left'
        });
    });
</script>
@else
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Выплаты</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Не совершено ни одной выплаты. Необходимо создать новую выплату или перейти к
            просмотру архива.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('salary.create') }}" role="button">Новая
                выплата</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{ route('salary.archive') }}"
                role="button">Выплаты</a>
        </div>
    </div>
</div>
@endif
@endsection
