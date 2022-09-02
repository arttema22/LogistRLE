@extends('layouts.app')

@section('title')Маршруты@endsection

@section('content')

@if(count($Routes))
<nav class="navbar">
    <div class="container-fluid">
        <h1>Маршруты</h1>
        @cannot('is-driver')
        <form class="d-flex" method="get">
            <select name="driver-id" id="driver-id" class="form-select me-2" aria-label="Водитель">
                <option value="0">Водитель</option>
                @foreach($Users as $User)
                <option value="{{$User->id}}" @if(isset($_GET['driver-id'])) @if($_GET['driver-id'] == $User->id) selected @endif @endif>{{$User->profile->FullName}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary me-2">Фильтр</button>
            <a class="btn btn-outline-primary" href="{{route('routes.list')}}">Очистить</a>
        </form>
        @endcan
    </div>
</nav>
<div class="accordion accordion-flush" id="accordionFlushRoutes">
    @foreach($Routes as $Route)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading{{$Route->id}}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$Route->id}}" aria-expanded="false" aria-controls="flush-collapse{{$Route->id}}">
                <div class="container">
                    <div class="row">
                        <div class="col-2">{{$Route->date_route}}</div>
                        @cannot('is-driver')
                        <div class="col-4">{{$Route->driver->profile->FullName}}</div>
                        @endcan
                        <div class="col-4">{{$Route->address_loading}} - {{$Route->address_unloading}}</div>
                        <div class="col-2">{{$Route->summ_route}} руб.</div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="flush-collapse{{$Route->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$Route->id}}" data-bs-parent="#accordionFlushRoutes">
            <div class="accordion-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="sort-table">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Маршрут</th>
                                <th scope="col" style="width: 50px">Рейсов</th>
                                <th scope="col" style="width: 100px">Груз</th>
                                <th scope="col" style="width: 100px">Авто</th>
                                <th scope="col" style="width: 100px">Плательщик</th>
                                <th scope="col" style="width: 50px">Стоимость</th>
                                <th scope="col" style="width: 50px">Расходы</th>
                                <th scope="col" style="width: 50px">Начислено</th>
                                <th scope="col">Комментарий</th>
                                <th scope="col">Редактирование</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form method="post" action="{{route('routes.service-update', $Route->id)}}">
                            @csrf
                            <tr>
                                <td>
                                    <input type="text" name="address-load-{{$Route->id}}" id="address-load-{{$Route->id}}" class="form-control" value="{{$Route->address_loading}}">
                                    <input type="text" name="address-unload-{{$Route->id}}" id="address-unload-{{$Route->id}}" class="form-control" value="{{$Route->address_unloading}}">
                                    <input type="text" name="route-length-{{$Route->id}}" id="route-length-{{$Route->id}}" class="form-control" value="{{$Route->route_length}}">
                                </td>
                                <td><input type="number" name="route-num-trips-{{$Route->id}}" id="route-num-trips-{{$Route->id}}" class="form-control" value="{{$Route->number_trips}}"></td>
                                <td>
                                    <select name="cargo-{{$Route->id}}" id="cargo-{{$Route->id}}" class="form-select">
                                        @foreach($Cargo as $Carg)
                                        <option value="{{$Carg->id}}" @if ($Route->cargo->id == $Carg->id) selected @endif >{{$Carg->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select name="truck-{{$Route->id}}" id="truck-{{$Route->id}}" class="form-select">
                                        @foreach($TypeTrucks as $TypeTruck)
                                        <option value="{{$TypeTruck->id}}" @if ($Route->typeTruck->id == $TypeTruck->id) selected @endif >{{$TypeTruck->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select name="payer-{{$Route->id}}" id="payer-{{$Route->id}}" class="form-select">
                                        @foreach($Payers as $Payer)
                                        <option value="{{$Payer->id}}" @if ($Route->payer->id == $Payer->id) selected @endif >{{$Payer->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="number" step="any" name="route-price-{{$Route->id}}" id="route-price-{{$Route->id}}" class="form-control" value="{{$Route->price_route}}" disabled></td>
                                <td><input type="number" step="any" name="route-unexpect-{{$Route->id}}" id="route-unexpect-{{$Route->id}}" class="form-control" value="{{$Route->unexpected_expenses}}"></td>
                                <td><input type="number" step="any" name="route-sum-{{$Route->id}}" id="route-sum-{{$Route->id}}" class="form-control" value="{{$Route->summ_route}}" disabled></td>
                                <td><textarea class="form-control" name="route-comment-{{$Route->id}}" id="route-comment-{{$Route->id}}" rows="1">{{$Route->comment}}</textarea></td>
                                <td>
                                    <a href="{{ route('routes.edit', $Route->id) }}" class="btn btn-outline-primary btn-sm">Изменить</a>

                                    <!-- Кнопка удаления записи -->
                                    <!-- Обязательно подключение include('inc.modal-delete') -->
                                    <!-- data-bs-url - содержит ссылку на удаление -->
                                    <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                                            data-bs-url="{{ route('routes.destroy', $Route->id) }}"
                                            data-bs-type ="маршрута"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Удалить</button>
                                </td>
                            </tr>
                        </form>
                        </tbody>
                    </table>
                </div>
                @if(count($Route->services))
                <div class="table-responsive">
                    <table class="table table-hover caption-top">
                        <caption>Дополнительные услуги</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="width: 200px">Наименование</th>
                                <th scope="col" style="width: 100px">Цена</th>
                                <th scope="col" style="width: 100px">Количество</th>
                                <th scope="col" style="width: 100px">Сумма</th>
                                <th scope="col">Комментарий</th>
                                <th scope="col">Редактор</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Route->services as $Service)
                        <form method="post" action="{{route('routes.service-update', $Service->id)}}">
                            @csrf
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>
                                    <select name="service-{{$Service->id}}" id="service-{{$Service->id}}" class="form-select" aria-label="Услуга">
                                        @foreach($Services as $Serv)
                                        <option value="{{$Serv->id}}" @if ($Service->service->id == $Serv->id) selected @endif >{{$Serv->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="number" step="any" name="price-{{$Service->id}}" id="price-{{$Service->id}}" placeholder="Цена" class="form-control" value="{{$Service->price}}"></td>
                                <td><input type="number" min="1" max="10" name="number-oper-{{$Service->id}}" id="number-oper-{{$Service->id}}" placeholder="Количество" class="form-control" value="{{$Service->number_operations}}"></td>
                                <td><input type="number" step="any" name="sum-{{$Service->id}}" id="sum-{{$Service->id}}" placeholder="Сумма" class="form-control" value="{{$Service->sum}}" disabled></td>
                                <td><textarea class="form-control" name="comment-{{$Service->id}}" id="comment-{{$Service->id}}" rows="1">{{$Service->comment}}</textarea></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm" id="save-service-{{$Service->id}}">Сохр</button>
                                    <!-- Кнопка удаления записи -->
                                    <!-- Обязательно подключение include('inc.modal-delete') -->
                                    <!-- data-bs-url - содержит ссылку на удаление -->
                                    <button type="button" class="btn btn-outline-danger btn-sm btn-del-modal"
                                            data-bs-url="{{ route('routes.service-destroy', $Service->id) }}"
                                            data-bs-type ="услуги"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">-</button>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">Итого начислено за услуги:</td>
                                <td>{{$Route->services->sum('sum')}} руб.</td>
                            </tr>
                            <tr class="table-danger">
                                <td colspan="7">Добавление услуги</td>
                            </tr>
                        <form method="post" action="{{route('routes.service-store', $Route->id)}}">
                            @csrf
                            <tr class="table-danger">
                                <td></td>
                                <td>
                                    <select name="service-id" id="service-id" class="form-select mb-1" aria-label="Услуга">
                                        <option value="0" selected>Надо выбрать</option>
                                        @foreach($Services as $Service)
                                        <option value="{{$Service->id}}">{{$Service->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td></td>
                                <td>
                                    <input type="number" min="1" max="8" name="number-operations" id="number-operations" class="form-control">
                                </td>
                                <td></td>
                                <td>
                                    <textarea class="form-control" name="service-comment" id="service-comment" rows="1"></textarea>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm">Создать</button>
                                </td>
                            </tr>
                        </form>
                        </tfoot>
                    </table>
                </div>
                @endif
                <small class="text-muted">
                    Информация о записи:
                    Создана: {{$Route->created_at}}
                    Изменена: {{$Route->updated_at}}
                    Владелец: {{$Route->owner->profile->FullName}}
                </small>
            </div>
        </div>
    </div>
    @endforeach
</div>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        {{$Routes->withQueryString()->links()}}
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a class="btn btn-primary btn-lg" href="{{route('routes.create')}}" role="button">Новый маршрут</a>
        </div>
    </div>
</nav>
@include('inc.modal-delete')
@else
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Маршруты</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Актуальных маршрутов нет. Необходимо создать новый маршрут или перейти к просмотру архива.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{route('routes.create')}}" role="button">Новый маршрут</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{route('routes.archive')}}" role="button">Архив</a>
        </div>
    </div>
</div>
@endif
@endsection