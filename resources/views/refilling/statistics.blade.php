@extends('layouts.app')

@section('title')
    Статистика по заправкам
@endsection

@section('content')
    <div class="chart-container">
        <div class="pie-chart-container">
            <canvas id="pie-chart"></canvas>
        </div>
    </div>



    {{-- <link rel="stylesheet" href="/css/tablesort.css">
    <script src='/js/tablesort.min.js'></script>
    @if (count($Refillings))
        <nav class="navbar">
            <div class="container-fluid">
                <h1>Статистика по заправкам</h1>
                <form class="d-flex" method="get">
                    <select name="driver-id" id="driver-id" class="form-select me-2" aria-label="Водитель">
                        <option value="0">Водитель</option>
                        @foreach ($Users as $User)
                            <option value="{{ $User->id }}"
                                @if (isset($_GET['driver-id'])) @if ($_GET['driver-id'] == $User->id) selected @endif
                                @endif>{{ $User->profile->FullName }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary me-2">Фильтр</button>
                    <a class="btn btn-outline-primary" href="{{ route('refilling.statistics') }}">Очистить</a>
                </form>
            </div>
        </nav>
        <div class="table-responsive">
            <table class="table table-hover" id="sort-table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Дата заправки</th>
                        <th scope="col">Водитель</th>
                        <th scope="col">АЗС</th>
                        <th scope="col">Кол-во</th>
                        <th scope="col">Цена 1л</th>
                        <th scope="col">Стоимость</th>
                        <th scope="col" data-sort-method='none'>Запись о заправке</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Refillings as $Refilling)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $Refilling->date_car_refueling }}</td>
                            <td>{{ $Refilling->driver->profile->FullName }}</td>
                            <td>{{ $Refilling->petrolStation->title }}</td>
                            <td>{{ $Refilling->num_liters_car_refueling }}</td>
                            <td>{{ $Refilling->price_car_refueling }}</td>
                            <td>
                                <h6>{{ $Refilling->cost_car_refueling }} руб.</h6>
                            </td>
                            <td>
                                <small class="text-muted">
                                    Создана: {{ $Refilling->created_at }}<br>
                                    Изменена: {{ $Refilling->updated_at }}<br>
                                    Владелец: {{ $Refilling->owner->profile->FullName }}
                                </small>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                {{ $Refillings->withQueryString()->links() }}
            </div>
        </nav>
        <script>
            new Tablesort(document.getElementById('sort-table'));
        </script>
    @else
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Статистика пуста</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Не совершено ни одной заправки. Необходимо создать новую заправку или перейти к
                    просмотру архива.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('refilling.create') }}"
                        role="button">Новая заправка</a>
                    <a class="btn btn-outline-secondary btn-lg px-4" href="{{ route('refilling.archive') }}"
                        role="button">Архив заправок</a>
                </div>
            </div>
        </div>
    @endif --}}


    <script>
        $(function() {
            //get the pie chart canvas
            var cData = JSON.parse(`<?php echo $chart_data; ?>`);
            var ctx = $("#pie-chart");

            //pie chart data
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Users Count",
                    data: cData.data,
                    backgroundColor: [
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                        "#F4A460",
                        "#2E8B57",
                        "#1D7A46",
                        "#CDA776",
                    ],
                    borderColor: [
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                        "#E39371",
                        "#1D7A46",
                        "#F4A460",
                        "#CDA776",
                    ],
                    borderWidth: [1, 1, 1, 1, 1, 1, 1]
                }]
            };

            //options
            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Последние заправки -  Количество в день",
                    fontSize: 24,
                    fontColor: "#000"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };

            //create Pie Chart class object
            var chart1 = new Chart(ctx, {
                type: "pie",
                data: data,
                options: options
            });

        });
    </script>
@endsection
