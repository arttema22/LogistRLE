@extends('layouts.app')

@section('title')Маршруты@endsection

@section('content')
@include('inc.filter-route')
@if(count($Routes))
<div class="accordion accordion-flush" id="accordionFlushRoutes">
    @foreach($Routes as $Route)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading{{$Route->id}}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse{{$Route->id}}" aria-expanded="false"
                aria-controls="flush-collapse{{$Route->id}}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">{{$Route->date}}</div>
                        @cannot('is-driver')
                        <div class="col-md-4">{{$Route->driver->profile->FullName}}</div>
                        @endcan
                        <div class="col-md-4">{{$Route->address_loading}} - {{$Route->address_unloading}}</div>
                        <div class="col-md-2">{{$Route->summ_route}} руб.</div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="flush-collapse{{$Route->id}}" class="accordion-collapse collapse"
            aria-labelledby="flush-heading{{$Route->id}}" data-bs-parent="#accordionFlushRoutes">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <p>Маршрут: {{$Route->address_loading}} - {{$Route->address_unloading}}
                            ({{$Route->route_length}}
                            км.)</p>
                        <div>
                            {{-- <a href="{{ route('routes.edit', $Route->id) }}"
                                class="btn btn-outline-primary btn-sm">Изменить</a> --}}

                            <!-- Кнопка удаления записи -->
                            <!-- Обязательно подключение include('inc.modal-delete') -->
                            <!-- data-bs-url - содержит ссылку на удаление -->
                            <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                                data-bs-url="{{ route('routes.destroy', $Route->id) }}" data-bs-type="маршрута"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                    class="bi bi-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Подробности</h5>
                        <p class="card-text">
                            Рейсов: {{$Route->number_trips}} Груз: {{$Route->cargo->title}}
                            Автомобиль: {{$Route->typeTruck->title}} Плательщик: {{$Route->payer->title}}<br>
                            Стоимость: {{$Route->price_route}} руб. Расходы: {{$Route->unexpected_expenses}}
                            <b>Начислено:
                                {{$Route->summ_route}} руб.</b><br>
                            {{$Route->comment}}
                        </p>
                        <h5 class="card-title">Дополнительные услуги</h5>
                        @if(count($Route->services))
                        @foreach($Route->services as $Service)
                        <p class="card-text">
                            {{$Service->service->title}}
                            {{$Service->price}} * {{$Service->number_operations}} = {{$Service->sum}}<br>
                            {{$Service->comment}}
                        </p>
                        @endforeach
                        <p class="card-text"><b>Начислено за услуги: {{$Route->services->sum('sum')}} руб.</b></p>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        <small>
                            Создан: {{$Route->created_at}}
                            Изменен: {{$Route->updated_at}}
                            Владелец: {{$Route->owner->profile->FullName}}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary btn-lg" href="{{route('routes.create')}}" role="button">Новый маршрут</a>
</div>
@include('inc.modal-delete')
@else
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Маршруты</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Актуальных маршрутов нет. Необходимо создать новый маршрут или перейти к просмотру архива.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{route('routes.create')}}" role="button">Новый
                маршрут</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{route('routes.archive')}}" role="button">Архив</a>
        </div>
    </div>
</div>
@endif
@endsection
