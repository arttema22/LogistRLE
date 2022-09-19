@extends('layouts.app')

@section('title')Общая сверка@endsection

@section('content')
<nav class="navbar">
    <div class="container-fluid">
        <h1>Общая сверка</h1>
        @cannot('is-driver')
        <a class="btn btn-outline-success btn-sm" href="{{ route('profit.export-all') }}">Экспорт всех</a>
        @endcan
    </div>
</nav>

@foreach ( $Users as $User)
<div class="card mb-3">
    <div class="card-header navbar">
        <h5>{{ $User->profile->fullName }}</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Сальдо начальное</th>
                        <th>Выплаты</th>
                        <th>Начислено</th>
                        <th>Сальдо конечное</th>
                        <th>Комментарий</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $User->profit as $Profit )
                    <tr>
                        <td>{{$Profit->date}}</td>
                        <td>{{$Profit->saldo_start}}</td>
                        <td>{{$Profit->sum_salary}}</td>
                        <td style="text-align: right">{{$Profit->sum_amount}}
                            <a href="#" tabindex="0" class="btn btn-outline-info btn-sm" role="button"
                                data-toggle="popover" data-bs-trigger="focus" data-bs-title="Информация"
                                data-bs-content="Заправки - {{$Profit->sum_refuelings}} руб.
                                                        Маршруты - {{$Profit->sum_routes}} руб.
                                                        Услуги - {{$Profit->sum_services}} руб.
                                                        "><i class="bi bi-info"></i>
                            </a>
                        </td>
                        <td>{{$Profit->saldo_end}}</td>
                        <td>{{$Profit->comment}}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer navbar">
        <i></i>
        <a class="btn btn-outline-success btn-sm" href="{{ route('profit.export-archive', $User->id) }}"
            role="button">Экспорт</a>
    </div>
</div>
@endforeach
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            placement : 'left'
        });
    });
</script>
@endsection
