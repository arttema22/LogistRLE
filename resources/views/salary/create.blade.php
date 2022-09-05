@extends('layouts.app')

@section('title')Новое начисление@endsection

@section('content')
<div class="container px-4 py-5">
    <h1>Новое начисление</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <form method="post" action="{{ route('salary.store') }}">
            @csrf
            <div class="row">
                <div class="col">
                    <!-- Дата выплаты -->
                    <div class="form-floating mb-3">
                        <input type="date" name="date-salary" id="date-salary" placeholder="Дата выплаты"
                            class="form-control form-control-lg" value="{{ date('Y-m-d') }}">
                        <label for="date-salary">Дата выплаты</label>
                    </div>
                    <!-- Дата выплаты конец -->
                    <!-- Список водителей -->
                    @cannot('is-driver')
                    <div class="form-floating mb-3">
                        @if (count($Users))
                        <select name="driver-id" id="driver-id" class="form-select form-select-lg mb-3">
                            <option value="0" selected>Водитель</option>
                            @foreach ($Users as $User)
                            <option value="{{ $User->id }}">{{ $User->profile->FullName }}</option>
                            @endforeach
                        </select>
                        <label for="driver-id">Водитель</label>
                        @else
                        <div class="alert alert-danger" role="alert">
                            В системе нет водителей. Для начала работы необходимо <a href="user.user-new"
                                class="alert-link">завести водителя</a>.
                        </div>
                        @endif
                    </div>
                    @endcan
                    <!-- Список водителей конец -->
                    <!-- Размер выплаты -->
                    <div class="form-floating mb-3">
                        <input type="number" step="any" name="salary" id="salary" placeholder="Размер выплаты"
                            class="form-control form-control-lg" value="{{ old('salary') }}">
                        <label for="salary">Размер выплаты</label>
                    </div>
                    <!-- Размер выплаты конец -->
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
                <a class="btn btn-outline-secondary btn-lg" href="{{ route('salary.list') }}" role="button">Отмена</a>
            </div>
        </form>
    </div>
</div>
@endsection
