@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex-center position-rel full-height">
        <div class="jumbotron pb-4">
            <h1 class="display-4 mb-5">Электронная зачетная книжка</h1>
            <p class="lead">Онлайн сервис для студентов.</p>
            <hr class="my-4">
            <p class="mb-5">Для входа в личный кабинет необходимо авторизоваться</p>
            <p class="lead welcome-button m-0">
                <a class="btn btn-primary btn-lg btn-block @auth disabled @endauth" onclick="window.location.href='{{ route('login') }}'" href="#" role="button">Вход в личный кабинет</a>
            </p>
        </div>
    </div>
</div>
@endsection