@extends('layouts.app')

@section('title')Архив выплат@endsection

@section('content')
<link rel="stylesheet" href="/css/tablesort.css">
<script src='/js/tablesort.min.js'></script>
@if (count($Salaries))
<nav class="navbar">
    <div class="container-fluid">
        <h1>Архив выплат</h1>
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
            <a class="btn btn-outline-primary" href="{{ route('salary.archive') }}">Очистить</a>
        </form>
        @endcan
    </div>
</nav>
<div class="table-responsive">
    <table class="table table-hover" id="sort-table">
        <thead class="table-primary">
            <tr>
                <th scope="col" style="width: 1%">#</th>
                <th scope="col" style="width: 1%">Дата</th>
                @cannot('is-driver')
                <th scope="col">Водитель</th>
                @endcan
                <th scope="col">Сумма</th>
                <th scope="col" style="width: 1%">Инфо</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Salaries as $Salary)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $Salary->date }}</td>
                @cannot('is-driver')
                <td>{{ $Salary->driver->profile->FullName }}</td>
                @endcan
                <td>{{ $Salary->salary }} руб.</td>
                <td>
                    <a href="#" tabindex="0" class="btn btn-outline-info btn-sm" role="button" data-toggle="popover"
                        data-bs-trigger="focus" data-bs-title="Информация" data-bs-content="{{ $Salary->comment }}
                        Создана: {{ $Salary->created_at }}
                        Изменена: {{ $Salary->updated_at }}
                        Владелец: {{ $Salary->owner->profile->FullName }}">i
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        {{ $Salaries->withQueryString()->links() }}
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a class="btn btn-primary btn-lg" href="{{ route('salary.create') }}" role="button">Новое
                начисление</a>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            placement : 'left'
        });
    });
    // new Tablesort(document.getElementById('sort-table'));
</script>
@else
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Архив выплат</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Не совершено ни одной выплаты. Необходимо сделать начисления и произвести рассчет.</p>
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
