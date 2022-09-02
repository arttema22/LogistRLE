@extends('layouts.app')

@section('title')Изменение маршрута@endsection

@section('content')
<div class="container px-4 py-5">
    <h1 class="mt-5">Изменение маршрута</h1>

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
        <form method="post" action="{{route('routes.update', $Route->id)}}">
            @csrf
            <div class="row">
                <div class="col">
                    <!-- Дата маршрута -->
                    <div class="form-floating mb-3">
                        <input type="date" name="date-route" id="date-route" placeholder="Дата маршрута" class="form-control form-control-lg" value="{{$Route->dateEdit}}">
                        <label for="date-route">Дата маршрута</label>
                    </div>
                    <!-- Дата маршрута конец -->

                    <!-- Список водителей -->
                    <div class="form-floating mb-3">
                        <select name="driver-id" id="driver-id" class="form-select form-select-lg mb-3">
                            @foreach($Users as $User)
                            <option value="{{$User->id}}" @if($Route->driver_id == $User->id) selected @endif >{{$User->profile->FullName}}</option>
                            @endforeach
                        </select>
                        <label for="driver-id">Водитель</label>
                    </div>
                    <!-- Список водителей конец -->

                    <!-- Список типов авто -->
                    <div class="form-floating mb-3">
                        <select name="type-truck" id="type-truck" class="form-select form-select-lg mb-3">
                            @foreach($TypeTrucks as $TypeTruck)
                            <!-- если типу разрешено оказывать услуги, то
                            присваиваем отрицательное значение для дальнейшей обработки
                            -->
                            <?php
                            if ($TypeTruck->is_service == 1) {
                                $val = gmp_neg($TypeTruck->id);
                            } else {
                                $val = $TypeTruck->id;
                            }
                            ?>
                            <option value="{{$val}}" @if($Route->dir_type_trucks_id == $TypeTruck->id) selected @endif >{{$TypeTruck->title}}</option>
                            @endforeach
                        </select>
                        <label for="type-truck">Тип</label>
                    </div>
                    <!-- Список типов авто конец -->

                    <!-- Список грузов -->
                    <div class="form-floating mb-3">
                        <select name="cargo" id="cargo" class="form-select form-select-lg mb-3">
                            @foreach($Cargo as $Cargo)
                            <option value="{{$Cargo->id}}" @if($Route->cargo_id == $Cargo->id) selected @endif >{{$Cargo->title}}</option>
                            @endforeach
                        </select>
                        <label for="cargo">Груз</label>
                    </div>
                    <!-- Список грузов конец -->

                    <!-- Список плательщиков -->
                    <div class="form-floating mb-3">
                        <select name="payer" id="payer" class="form-select form-select-lg mb-3">
                            @foreach($Payers as $Payer)
                            <option value="{{$Payer->id}}" @if($Route->payer_id == $Payer->id) selected @endif >{{$Payer->title}}</option>
                            @endforeach
                        </select>
                        <label for="payer">Плательщик</label>
                    </div>
                    <!-- Список плательщиков конец -->

                    <!--Пункт погрузки -->
                    <div class="form-floating mb-3">
                        <input type="text" name="address-loading" id="address-loading" placeholder="Пункт погрузки" class="form-control form-control-lg" value="{{$Route->address_loading}}">
                        <label for="route-length">Пункт погрузки</label>
                    </div>
                    <!-- Пункт погрузки конец -->

                    <!-- Пункт разгрузки -->
                    <div class="form-floating mb-3">
                        <input type="text" name="address-unloading" id="address-unloading" placeholder="Пункт разгрузки" class="form-control form-control-lg" value="{{$Route->address_unloading}}">
                        <label for="route-length">Пункт разгрузки</label>
                    </div>
                    <!-- Пункт разгрузки конец -->

                    <!-- Длина маршрута -->
                    <div class="form-floating mb-3">
                        <input type="number" min="10" max="500" name="route-length" id="route-length" placeholder="Длина маршрута" class="form-control form-control-lg" value="{{$Route->route_length}}">
                        <label for="route-length">Длина маршрута</label>
                    </div>
                    <!-- Длина маршрута конец -->

                    <!-- Цена маршрута -->
                    <div class="form-floating mb-3">
                        <input type="number" step="any" name="price-route" id="price-route" placeholder="Цена маршрута" class="form-control form-control-lg" value="{{$Route->price_route}}">
                        <label for="price-route">Цена маршрута</label>
                    </div>
                    <!-- Цена маршрута конец -->

                    <!-- Количество рейсов -->
                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="10" name="number-trips" id="number-trips" placeholder="Количество рейсов" class="form-control form-control-lg" value="{{$Route->number_trips}}">
                        <label for="number-trips">Количество рейсов</label>
                    </div>
                    <!-- Количество рейсов конец -->

                    <!-- Непредвиденные расходы -->
                    <div class="form-floating mb-3">
                        <input type="number" step="any" name="unexpected-expenses" id="unexpected-expenses" placeholder="Непредвиденные расходы" class="form-control form-control-lg" value="{{$Route->unexpected_expenses}}">
                        <label for="unexpected-expenses">Непредвиденные расходы</label>
                    </div>
                    <!-- Непредвиденные расходы конец -->

                    <!-- Комментарий -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="comment" id="comment" rows="3">{{$Route->comment}}</textarea>
                        <label for="comment" class="form-label">Комментарий</label>
                    </div>
                    <!-- Комментарий конец -->
                </div>
            </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
        <a class="btn btn-outline-secondary btn-lg" href="{{route('routes.list')}}" role="button">Отмена</a>
    </div>
</form>
</div>
</div>
<script>
    $("#type-truck").change(function () {
        if (this.value < 0) {
            $(".additional-servis").css({'display': 'block'});
        } else {
            $(".additional-servis").css({'display': 'none'});
        }
    });
</script>
<script>
    $("#route-billing").change(function () {
        if (this.value < 0) {
            $(".custom-route").css({'display': 'block'});
        } else {
            $(".custom-route").css({'display': 'none'});
        }
    });
</script>
<script>
    $(document).ready(function () {
        $('#driver-id').select2({theme: "bootstrap-5"});
        $('#type-truck').select2({theme: "bootstrap-5"});
        $('#cargo').select2({theme: "bootstrap-5"});
        $('#payer').select2({theme: "bootstrap-5"});
        $('#route-billing').select2({theme: "bootstrap-5"});
    }
    );
</script>

@endsection