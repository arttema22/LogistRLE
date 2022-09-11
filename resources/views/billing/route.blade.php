@extends('layouts.app')

@section('title')
Тарифы по маршруту
@endsection

@section('content')
<h1 class="mt-5">Тарифы по маршруту</h1>
@if (count($RouteBilling))
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th scope="col" style="width: 35%">Начало маршрута</th>
            <th scope="col" style="width: 35%">Конец маршрута</th>
            <th scope="col" style="width: 10%">Расстояние</th>
            <th scope="col" style="width: 10%">Цена</th>
            <th scope="col" style="width: 10%"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($RouteBilling as $RouteBill)
        <tr>
            <td>{{ $RouteBill->start }}</td>
            <td>{{ $RouteBill->finish }}</td>
            <td>{{ $RouteBill->length }}</td>
            <td>{{ $RouteBill->price }}</td>
            <td>
                <a href="{{ route('billing.route-edit', $RouteBill->id) }}" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-pencil"></i></a>
                <!-- Кнопка удаления записи -->
                <!-- Обязательно подключение include('inc.modal-delete') -->
                <!-- data-bs-url - содержит ссылку на удаление -->
                <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                    data-bs-url="{{ route('billing.route-destroy', $RouteBill->id) }}" data-bs-type="тарифного маршрута"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('inc.modal-delete')
@endif
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        {{$RouteBilling->withQueryString()->links()}}
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a class="btn btn-primary btn-lg" href="{{route('billing.route-create')}}" role="button">Новый</a>
        </div>
    </div>
</nav>
@endsection
