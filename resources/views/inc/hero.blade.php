<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/logo-rle.png" alt="" width="15%">
    <h1 class="display-5 fw-bold">Логистика</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Система "Логистика" для компании РегионЛесЭкспорт. Проект находится на стадии разработки.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            @if(Auth::check())
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{route('user.logout')}}" role="button">Выход</a>
            @else 
            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{route('user.login')}}" role="button">Вход</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{route('user.registration')}}" role="button">Зарегистрироваться</a>
            @endif 
        </div>
    </div>
</div>