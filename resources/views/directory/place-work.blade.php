@extends('layouts.app')

@section('title')Места работы водителей@endsection

@section('content')
<h1 class="mt-5">Места работы водителей</h1>
@if(count($PlaceWorks))
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Управление</th>
        </tr>
    </thead>
    <tbody>
        @foreach($PlaceWorks as $PlaceWork)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$PlaceWork->title}}</td>
            <td><a href="{{ route('directory.place-work-update', $PlaceWork->id) }}" class="btn btn-outline-primary btn-sm">Изменить</a>
                @if($PlaceWork->status)
                <!-- Кнопка удаления записи -->
                <!-- Обязательно подключение include('inc.modal-delete') -->
                <!-- data-bs-url - содержит ссылку на удаление -->
                <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                        data-bs-url="{{ route('directory.place-work-delete', $PlaceWork->id) }}"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Удалить</button>
                @else
                <a href="{{ route('directory.place-work-recover', $PlaceWork->id) }}" class="btn btn-outline-secondary btn-sm">Восстановить</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('inc.modal-delete')
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 pt-5">
    <a class="btn btn-primary btn-lg" href="{{route('directory.place-work-new')}}" role="button">Новый</a>
</div>
@endsection