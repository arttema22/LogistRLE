@extends('layouts.app')

@section('title')Панель@endsection

@section('content')

<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Сервисы</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
        <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Маршруты</h5>
              <p class="card-text">Сервис работы с маршрутами. Не забывайте подать данные.</p>
              <a href="{{route('routes.create')}}" class="card-link">Новый маршрут</a>
              <a href="{{route('routes.list')}}" class="card-link">Список</a>
              <a href="{{route('routes.archive')}}" class="card-link">Архив</a>
            </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Заправки</h5>
              <p class="card-text">Сервис работы с заправками автомобиля. Не забывайте подать данные.</p>
              <a href="{{route('refilling.create')}}" class="card-link">Новая заправка</a>
              <a href="{{route('refilling.list')}}" class="card-link">Список</a>
              <a href="{{route('refilling.archive')}}" class="card-link">Архив</a>
            </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Расчеты</h5>
              <p class="card-text">Сервис работы с начислениями зарплаты.</p>
              <a href="{{route('profit.list')}}" class="card-link">Список</a>
              <a href="{{route('profit.archive')}}" class="card-link">Архив</a>
            </div>
        </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Сверки</h5>
                  <p class="card-text">Сервис работы со сверками.</p>
                  <a href="{{route('revise.list')}}" class="card-link">Список</a>
                </div>
            </div>
    </div>
    </div>
</div>

@endsection