@extends('layouts.app')

@section('title')
    Тарифы по маршруту
@endsection

@section('content')
    <h1 class="mt-5">Тарифы по маршруту</h1>
    @if (count($RouteBilling))
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Начало маршрута</th>
                    <th scope="col">Конец маршрута</th>
                    <th scope="col">Расстояние</th>
                    <th scope="col">Управление</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($RouteBilling as $RouteBill)
                    <tr>
                        <td>{{ $RouteBill->start }}</td>
                        <td>{{ $RouteBill->finish }}</td>
                        <td>{{ $RouteBill->length }}</td>
                        <td>
                            <a href="{{ route('billing.route-edit', $RouteBill->id) }}"
                                class="btn btn-outline-primary btn-sm">Изменить</a>
                            <!-- Кнопка удаления записи -->
                            <!-- Обязательно подключение include('inc.modal-delete') -->
                            <!-- data-bs-url - содержит ссылку на удаление -->
                            <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                                data-bs-url="{{ route('billing.route-destroy', $RouteBill->id) }}"
                                data-bs-type="тарифного маршрута" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Удалить</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('inc.modal-delete')
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 pt-5">
        <a class="btn btn-primary btn-lg" href="{{ route('billing.route-create') }}" role="button">Новый</a>
    </div>
@endsection
