@extends('layouts.app')

@section('title')Изменение начисления@endsection

@section('content')
<div class="container px-4 py-5">
    <h1 class="mt-5">Изменение начисления</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <form method="post" action="{{route('salary.update', $Salary->id)}}">
            @csrf
            <div class="row">
                <div class="col">
                    <!-- Дата выплаты -->
                    <div class="form-floating mb-3">
                        <input type="date" name="date-salary" id="date-salary" placeholder="Дата выплаты" class="form-control form-control-lg" value="{{$Salary->dateEdit}}">
                        <label for="date-salary">Дата выплаты</label>
                    </div>
                    <!-- Дата выплаты конец -->
                    <!-- Размер выплаты -->
                    <div class="form-floating mb-3">
                        <input type="number" step="any" name="salary" id="salary" placeholder="Размер выплаты" class="form-control form-control-lg" value="{{$Salary->salary}}">
                        <label for="salary">Размер выплаты</label>
                    </div>
                    <!-- Размер выплаты конец -->
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
                <a class="btn btn-outline-secondary btn-lg" href="{{route('salary.list')}}" role="button">Отмена</a>
            </div>
        </form>
    </div>
</div>
@endsection