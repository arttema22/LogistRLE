@extends('layouts.app')

@section('title')Изменение маршрута@endsection

@section('content')
<div class="container px-4 py-5">
    <h1>Изменение маршрута</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="post" action="{{route('routes.update', $Route->id)}}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Дата маршрута -->
                    <div class="form-floating mb-3">
                        <input type="date" name="date-route" id="date-route" placeholder="Дата маршрута"
                            class="form-control form-control-lg" value="{{$Route->dateEdit}}">
                        <label for="date-route">Дата маршрута</label>
                    </div>
                    <!-- Дата маршрута конец -->

                    <!-- Список водителей -->
                    @cannot('is-driver')
                    <div class="form-floating mb-3">
                        <select name="driver-id" id="driver-id" class="form-select form-select-lg mb-3">
                            @foreach($Users as $User)
                            <option value="{{$User->id}}" @if($Route->driver_id == $User->id) selected @endif
                                >{{$User->profile->FullName}}</option>
                            @endforeach
                        </select>
                        <label for="driver-id">Водитель</label>
                    </div>
                    @endcan
                    <!-- Список водителей конец -->

                    <!-- Список типов авто -->
                    <div class="form-floating mb-3">
                        <input type="text" name="type-truck" id="type-truck" placeholder="Тип"
                            class="form-control form-control-lg" value="{{$Route->typeTruck->title}}" disabled>
                        <label for="type-truck">Тип</label>
                    </div>
                    <!-- Список типов авто конец -->

                    <!-- Список грузов -->
                    <div class="form-floating mb-3">
                        <select name="cargo" id="cargo" class="form-select form-select-lg mb-3">
                            @foreach($Cargo as $Cargo)
                            <option value="{{$Cargo->id}}" @if($Route->cargo_id == $Cargo->id) selected @endif
                                >{{$Cargo->title}}</option>
                            @endforeach
                        </select>
                        <label for="cargo">Груз</label>
                    </div>
                    <!-- Список грузов конец -->

                    <!-- Список плательщиков -->
                    <div class="form-floating mb-3">
                        <select name="payer" id="payer" class="form-select form-select-lg mb-3">
                            @foreach($Payers as $Payer)
                            <option value="{{$Payer->id}}" @if($Route->payer_id == $Payer->id) selected @endif
                                >{{$Payer->title}}</option>
                            @endforeach
                        </select>
                        <label for="payer">Плательщик</label>
                    </div>
                    <!-- Список плательщиков конец -->

                    <!--Пункт погрузки -->
                    <div class="form-floating mb-3">
                        <input type="text" name="address-loading" id="address-loading" placeholder="Пункт погрузки"
                            class="form-control form-control-lg" value="{{$Route->address_loading}}">
                        <label for="route-length">Пункт погрузки</label>
                    </div>
                    <!-- Пункт погрузки конец -->

                    <!-- Пункт разгрузки -->
                    <div class="form-floating mb-3">
                        <input type="text" name="address-unloading" id="address-unloading" placeholder="Пункт разгрузки"
                            class="form-control form-control-lg" value="{{$Route->address_unloading}}">
                        <label for="route-length">Пункт разгрузки</label>
                    </div>
                    <!-- Пункт разгрузки конец -->

                    <!-- Длина маршрута -->
                    <div class="form-floating mb-3">
                        <input type="number" min="10" max="500" name="route-length" id="route-length"
                            placeholder="Длина маршрута" class="form-control form-control-lg"
                            value="{{$Route->route_length}}">
                        <label for="route-length">Длина маршрута</label>
                    </div>
                    <!-- Длина маршрута конец -->

                    <!-- Количество рейсов -->
                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="10" name="number-trips" id="number-trips"
                            placeholder="Количество рейсов" class="form-control form-control-lg"
                            value="{{$Route->number_trips}}">
                        <label for="number-trips">Количество рейсов</label>
                    </div>
                    <!-- Количество рейсов конец -->

                    <!-- Непредвиденные расходы -->
                    <div class="form-floating mb-3">
                        <input type="number" step="any" name="unexpected-expenses" id="unexpected-expenses"
                            placeholder="Непредвиденные расходы" class="form-control form-control-lg"
                            value="{{$Route->unexpected_expenses}}">
                        <label for="unexpected-expenses">Непредвиденные расходы</label>
                    </div>
                    <!-- Непредвиденные расходы конец -->

                    <!-- Комментарий -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="comment" id="comment"
                            rows="3">{{$Route->comment}}</textarea>
                        <label for="comment" class="form-label">Комментарий</label>
                    </div>
                    <!-- Комментарий конец -->
                </div>
            </div>
        </div>

        <!-- Дополнительные услуги -->
        @if (count($Route->services))
        <div class="card mb-3">
            <div class="card-header">
                <h4>Дополнительные услуги</h4>
            </div>
            <div class="card-body services-list">
                @foreach ( $Route->services as $Serv )
                <div class="row">
                    <!-- Список услуг -->
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select name="service-id[]" id="service-id-[]" class="form-select mb-3" aria-label="Услуга">
                                @foreach ($Services as $Service)
                                <option value="{{ $Service->id }}" @if($Serv->id == $Service->id) selected @endif>{{
                                    $Service->title }}</option>
                                @endforeach
                            </select>
                            <label for="service-id[]">Услуга</label>
                        </div>
                    </div>
                    <!-- Список услуг конец -->
                    <!-- Количество операций -->
                    <div class="col-md-2">
                        <div class="form-floating mb-3">
                            <input type="number" min="1" max="8" name="number-operations[]" id="number-operations[]"
                                placeholder="Количество" class="form-control" value="{{$Serv->number_operations}}">
                            <label for="number-operations[]">Количество</label>
                        </div>
                    </div>
                    <!-- Количество операций конец -->
                    <!-- Комментарий -->
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="service-comment[]" id="service-comment[]"
                                rows="3">{{$Serv->comment}}</textarea>
                            <label for="service-comment[]" class="form-label">Комментарий</label>
                        </div>
                    </div>
                    <!-- Комментарий конец -->
                    <div class="col-md-1">
                        <div class="form-floating mb-3 d-grid">
                            <button type="button" class="btn btn-danger remove-service"> Удалить</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card-footer d-grid">
                <a class="btn btn-success service-add">Добавить услугу</a>
            </div>
        </div>
        @endif
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
            <a class="btn btn-outline-secondary btn-lg" href="{{route('routes.list')}}" role="button">Отмена</a>
        </div>
    </form>
</div>
</div>
<script>
    $(document).ready(function () {
        $('#driver-id').select2({theme: "bootstrap-5"});
        $('#cargo').select2({theme: "bootstrap-5"});
        $('#payer').select2({theme: "bootstrap-5"});

// добавление строки с услугой
$('.service-add').click(function() {
$('.services-list').append(
'<div class="row">' +
    '<div class="col-md-4">' +
        '<div class="form-floating">' +
            '<select name="service_id[]" id="service-id[]" class="form-select mb-3" aria-label="Услуга" required>' +
                '<option value="0" selected>выбрать</option>' +
                '@foreach ($Services as $Service)' +
                '<option value="{{ $Service->id }}">{{ $Service->title }}</option>' +
                '@endforeach' +
                '</select>' +
            '<label for="service-id[]">Услуга</label>' +
            '</div>' +
        '</div>' +
    '<div class="col-md-2">' +
        '<div class="form-floating mb-3">' +
            '<input type="number" min="1" max="8" name="number_operations[]" id="number-operations[]" placeholder="Количество" class="form-control" value=1>' +
            '<label for="number-operations[]">Количество</label>' +
            '</div>' +
        '</div>' +
    '<div class="col-md-4">' +
        '<div class="form-floating mb-3">' +
            '<textarea class="form-control" name="service_comment[]" id="service-comment[]" rows="3"></textarea>' +
            '<label for="service-comment[]" class="form-label">Комментарий</label>' +
            '</div>' +
        '</div>' +
    '<div class="col-md-1">' +
        '<div class="form-floating mb-3 d-grid">' +
            '<button type="button" class="btn btn-danger remove-service"> Удалить</button>' +
            '</div>' +
        '</div>' +
    '</div>'
)
});

// Удаление строки услуги
$(document).on('click', '.remove-service', function(e) {
e.preventDefault();
let row_item = $(this).parent().parent().parent();
$(row_item).remove();
});
    });
</script>
@endsection
