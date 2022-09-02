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
<div class="table-responsive">
    <table class="table table-hover" id="sort-table">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Дата</th>
                @cannot('is-driver')
                <th scope="col">Водитель</th>
                @endcan
                <th scope="col">Сумма</th>
                <th scope="col" data-sort-method='none'>Управление</th>
                <th scope="col" data-sort-method='none'>Примечание</th>
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
                <td>
                    <h6>{{ $Salary->salary }} руб.</h6>
                </td>
                <td><a href="{{ route('salary.edit', $Salary->id) }}"
                        class="btn btn-outline-primary btn-sm">Изменить</a>
                    <!-- Кнопка удаления записи -->
                    <!-- Обязательно подключение include('inc.modal-delete') -->
                    <!-- data-bs-url - содержит ссылку на удаление -->
                    <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                        data-bs-url="{{ route('salary.destroy', $Salary->id) }}" data-bs-type="начисления"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Удалить</button>
                </td>
                <td>
                    <small class="text-muted">
                        Создано: {{ $Salary->created_at }}<br>
                        Изменено: {{ $Salary->updated_at }}<br>
                        Владелец: {{ $Salary->owner->profile->FullName }}<br>
                    </small>
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
@include('inc.modal-delete')
<script>
    $('#sort-table').DataTable({
        searching: false,
        paging: false,
        ordering: true,
        // dom: 'Bfrtip',
        // buttons: [
        //     'excel'
        //     ],
        //language: {url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/ru.json'},
    });
</script>
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
