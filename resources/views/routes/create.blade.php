@extends('layouts.app')

@section('title')Новый маршрут@endsection

@section('content')
<div class="container px-4 py-5">
    <h1>Новый маршрут</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{ route('routes.store') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Дата маршрута -->
                    <div class="form-floating mb-3">
                        <input type="date" name="date-route" id="date-route" placeholder="Дата маршрута"
                            class="form-control form-control-lg" value="{{ date('Y-m-d') }}">
                        <label for="date-route">Дата маршрута</label>
                    </div>
                    <!-- Дата маршрута конец -->

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

                    <!-- Список типов авто -->
                    <div class="form-floating mb-3">
                        @if (count($TypeTrucks))
                        <select name="type-truck" id="type-truck" class="form-select form-select-lg mb-3">
                            <option value="0" selected>Тип автомобиля</option>
                            @foreach ($TypeTrucks as $TypeTruck)
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
                            <option value="{{ $val }}">{{ $TypeTruck->title }}</option>
                            @endforeach
                        </select>
                        <label for="type-truck">Тип</label>
                        @else
                        <div class="alert alert-danger" role="alert">
                            В системе нет типов грузовиков. Для начала работы необходимо <a
                                href="{{ route('directory.type-trucks-new') }}" class="alert-link">заполнить типы
                                грузовиков</a>.
                        </div>
                        @endif
                    </div>
                    <!-- Список типов авто конец -->

                    <!-- Список грузов -->
                    <div class="form-floating mb-3">
                        @if (count($Cargo))
                        <select name="cargo" id="cargo" class="form-select form-select-lg mb-3">
                            <option value="0" selected>Груз</option>
                            @foreach ($Cargo as $Cargo)
                            <option value="{{ $Cargo->id }}">{{ $Cargo->title }}</option>
                            @endforeach
                        </select>
                        <label for="cargo">Груз</label>
                        @else
                        <div class="alert alert-danger" role="alert">
                            В системе нет грузов. Для начала работы необходимо <a
                                href="{{ route('directory.cargo-new') }}" class="alert-link">заполнить перевозимые
                                грузы</a>.
                        </div>
                        @endif
                    </div>
                    <!-- Список грузов конец -->

                    <!-- Список плательщиков -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Плательщик
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" data-bs-toggle="collapse"
                                    href=".collapse-payer" id="flexSwitchCheckPayer" aria-controls="collapsePayer">
                                <label class="form-check-label" for="flexSwitchCheckPayer">новый</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="collapse collapse-payer show" id="collapsePayer">
                                <div class="form-floating mb-3">
                                    @if (count($Payers))
                                    <select name="payer" id="payer" class="form-select form-select-lg mb-3">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Payers as $Payer)
                                        <option value="{{ $Payer->id }}">{{ $Payer->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="payer">Плательщик</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет плательщиков. Для начала работы необходимо <a
                                            href="{{ route('directory.payers-new') }}" class="alert-link">заполнить
                                            список
                                            плательщиков</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="collapse collapse-payer" id="collapsePayer">
                                <div class="form-floating mb-3">
                                    <input type="text" name="new-payer" id="new-payer" placeholder="Название"
                                        class="form-control form-control-lg" value="{{ old('new-payer') }}">
                                    <label for="new-payer">Название</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Список плательщиков конец -->

                    {{-- Маршруты --}}
                    <div class="card mb-3">
                        <div class="card-header">
                            Маршрут
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" data-bs-toggle="collapse"
                                    href=".collapse-route" id="flexSwitchCheckRoute" aria-controls="collapseRoute">
                                <label class="form-check-label" for="flexSwitchCheckRoute">новый</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Стандартный маршрут -->
                            <div class="collapse collapse-route show" id="collapseRoute">
                                <div class="form-floating mb-3">
                                    @if (count($RoutesBilling))
                                    <select name="route-billing" id="route-billing"
                                        class="form-select form-select-lg mb-3">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($RoutesBilling as $RouteBilling)
                                        <option value="{{ $RouteBilling->id }}">{{ $RouteBilling->start }} -
                                            {{ $RouteBilling->finish }} ({{ $RouteBilling->length }} км.)</option>
                                        @endforeach
                                    </select>
                                    <label for="route-billing">Стандартный маршрут</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет стандартных маршрутов. Для начала работы необходимо <a
                                            href="{{ route('billing.route-create') }}" class="alert-link">заполнить
                                            список маршрутов</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Стандартный маршрут конец -->
                            <div class="collapse collapse-route" id="collapseRoute">
                                <!--Пункт погрузки -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="address-loading" id="address-loading"
                                        placeholder="Пункт погрузки" class="form-control form-control-lg"
                                        value="{{ old('address-loading') }}">
                                    <label for="route-length">Пункт погрузки</label>
                                </div>
                                <!-- Пункт погрузки конец -->

                                <!-- Пункт разгрузки -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="address-unloading" id="address-unloading"
                                        placeholder="Пункт разгрузки" class="form-control form-control-lg"
                                        value="{{ old('address-unloading') }}">
                                    <label for="route-length">Пункт разгрузки</label>
                                </div>
                                <!-- Пункт разгрузки конец -->

                                <!-- Длина маршрута -->
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="5000" name="route-length" id="route-length"
                                        placeholder="Длина маршрута" class="form-control form-control-lg"
                                        value="{{ old('route-length') }}">
                                    <label for="route-length">Длина маршрута</label>
                                </div>
                                <!-- Длина маршрута конец -->
                            </div>
                        </div>
                    </div>
                    {{-- Маршруты --}}

                    <!-- Количество рейсов -->
                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="10" name="number-trips" id="number-trips"
                            placeholder="Количество рейсов" class="form-control form-control-lg" value="1">
                        <label for="number-trips">Количество рейсов</label>
                    </div>
                    <!-- Количество рейсов конец -->

                    <!-- Непредвиденные расходы -->
                    <div class="form-floating mb-3">
                        <input type="number" step="any" name="unexpected-expenses" id="unexpected-expenses"
                            placeholder="Непредвиденные расходы" class="form-control form-control-lg"
                            value="{{ old('unexpected-expenses') }}">
                        <label for="unexpected-expenses">Непредвиденные расходы</label>
                    </div>
                    <!-- Непредвиденные расходы конец -->

                    <!-- Комментарий -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                        <label for="comment" class="form-label">Комментарий</label>
                    </div>
                    <!-- Комментарий конец -->
                </div>
            </div>

            <!-- Дополнительные услуги -->
            <div class="additional-servis" style="display: none">
                <div class="card">
                    <div class="card-header">
                        <h4>Дополнительные услуги</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Список услуг -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    @if (count($Services))
                                    <select name="service-id-1" id="service-id-1"
                                        class="form-select form-select-lg mb-3" aria-label="Услуга">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Services as $Service)
                                        <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="service-id-1">Услуга</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет услуг. Для начала работы необходимо <a
                                            href="{{ route('directory.services-new') }}" class="alert-link">заполнить
                                            список услуг</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Список услуг конец -->
                            <!-- Количество операций -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="8" name="number-operations-1"
                                        id="number-operations-1" placeholder="Количество операций"
                                        class="form-control form-control-lg">
                                    <label for="number-operations-1">Количество операций</label>
                                </div>
                            </div>
                            <!-- Количество операций конец -->
                            <!-- Комментарий -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="service-comment-1" id="service-comment-1"
                                        rows="3"></textarea>
                                    <label for="service-comment-1" class="form-label">Комментарий</label>
                                </div>
                            </div>
                            <!-- Комментарий конец -->
                        </div>
                        <div class="row one-service-2">
                            <!-- Список услуг -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    @if (count($Services))
                                    <select name="service-id-2" id="service-id-2"
                                        class="form-select form-select-lg mb-3" aria-label="Услуга">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Services as $Service)
                                        <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="service-id-2">Услуга</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет услуг. Для начала работы необходимо <a
                                            href="{{ route('directory.services-new') }}" class="alert-link">заполнить
                                            список услуг</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Список услуг конец -->
                            <!-- Количество операций -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="8" name="number-operations-2"
                                        id="number-operations-2" placeholder="Количество операций"
                                        class="form-control form-control-lg">
                                    <label for="number-operations-2">Количество операций</label>
                                </div>
                            </div>
                            <!-- Количество операций конец -->
                            <!-- Комментарий -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="service-comment-2" id="service-comment-2"
                                        rows="3"></textarea>
                                    <label for="service-comment-2" class="form-label">Комментарий</label>
                                </div>
                            </div>
                            <!-- Комментарий конец -->
                        </div>
                        <div class="row one-service-3">
                            <!-- Список услуг -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    @if (count($Services))
                                    <select name="service-id-3" id="service-id-3"
                                        class="form-select form-select-lg mb-3" aria-label="Услуга">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Services as $Service)
                                        <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="service-id-3">Услуга</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет услуг. Для начала работы необходимо <a
                                            href="{{ route('directory.services-new') }}" class="alert-link">заполнить
                                            список услуг</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Список услуг конец -->
                            <!-- Количество операций -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="8" name="number-operations-3"
                                        id="number-operations-3" placeholder="Количество операций"
                                        class="form-control form-control-lg">
                                    <label for="number-operations-3">Количество операций</label>
                                </div>
                            </div>
                            <!-- Количество операций конец -->
                            <!-- Комментарий -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="service-comment-3" id="service-comment-3"
                                        rows="3"></textarea>
                                    <label for="service-comment-3" class="form-label">Комментарий</label>
                                </div>
                            </div>
                            <!-- Комментарий конец -->
                        </div>
                        <div class="row one-service-4">
                            <!-- Список услуг -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    @if (count($Services))
                                    <select name="service-id-4" id="service-id-4"
                                        class="form-select form-select-lg mb-3" aria-label="Услуга">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Services as $Service)
                                        <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="service-id-4">Услуга</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет услуг. Для начала работы необходимо <a
                                            href="{{ route('directory.services-new') }}" class="alert-link">заполнить
                                            список услуг</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Список услуг конец -->
                            <!-- Количество операций -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="8" name="number-operations-4"
                                        id="number-operations-4" placeholder="Количество операций"
                                        class="form-control form-control-lg">
                                    <label for="number-operations-4">Количество операций</label>
                                </div>
                            </div>
                            <!-- Количество операций конец -->
                            <!-- Комментарий -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="service-comment-4" id="service-comment-4"
                                        rows="3"></textarea>
                                    <label for="service-comment-4" class="form-label">Комментарий</label>
                                </div>
                            </div>
                            <!-- Комментарий конец -->
                        </div>
                        <div class="row one-service-5">
                            <!-- Список услуг -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    @if (count($Services))
                                    <select name="service-id-5" id="service-id-5"
                                        class="form-select form-select-lg mb-3" aria-label="Услуга">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Services as $Service)
                                        <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="service-id-5">Услуга</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет услуг. Для начала работы необходимо <a
                                            href="{{ route('directory.services-new') }}" class="alert-link">заполнить
                                            список услуг</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Список услуг конец -->
                            <!-- Количество операций -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="8" name="number-operations-5"
                                        id="number-operations-5" placeholder="Количество операций"
                                        class="form-control form-control-lg">
                                    <label for="number-operations-5">Количество операций</label>
                                </div>
                            </div>
                            <!-- Количество операций конец -->
                            <!-- Комментарий -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="service-comment-5" id="service-comment-5"
                                        rows="3"></textarea>
                                    <label for="service-comment-5" class="form-label">Комментарий</label>
                                </div>
                            </div>
                            <!-- Комментарий конец -->
                        </div>
                        <div class="row one-service-6">
                            <!-- Список услуг -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    @if (count($Services))
                                    <select name="service-id-6" id="service-id-6"
                                        class="form-select form-select-lg mb-3" aria-label="Услуга">
                                        <option value="0" selected>выбрать</option>
                                        @foreach ($Services as $Service)
                                        <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="service-id-6">Услуга</label>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        В системе нет услуг. Для начала работы необходимо <a
                                            href="{{ route('directory.services-new') }}" class="alert-link">заполнить
                                            список услуг</a>.
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Список услуг конец -->
                            <!-- Количество операций -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" min="1" max="8" name="number-operations-6"
                                        id="number-operations-6" placeholder="Количество операций"
                                        class="form-control form-control-lg">
                                    <label for="number-operations-6">Количество операций</label>
                                </div>
                            </div>
                            <!-- Количество операций конец -->
                            <!-- Комментарий -->
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="service-comment-6" id="service-comment-6"
                                        rows="3"></textarea>
                                    <label for="service-comment-6" class="form-label">Комментарий</label>
                                </div>
                            </div>
                            <!-- Комментарий конец -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Дополнительные услуги конец -->
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
            <a class="btn btn-outline-secondary btn-lg" href="{{ route('routes.list') }}" role="button">Отмена</a>
        </div>
    </form>
</div>
</div>
<script>
    $("#type-truck").change(function() {
            if (this.value < 0) {
                $(".additional-servis").css({
                    'display': 'block'
                });
            } else {
                $(".additional-servis").css({
                    'display': 'none'
                });
            }
        });
</script>
<script>
    $(document).ready(function() {
            $('#driver-id').select2({
                theme: "bootstrap-5"
            });
            $('#type-truck').select2({
                theme: "bootstrap-5"
            });
            $('#cargo').select2({
                theme: "bootstrap-5"
            });
            $('#payer').select2({
                theme: "bootstrap-5"
            });
            $('#route-billing').select2({
                theme: "bootstrap-5"
            });
        });
</script>
@endsection
