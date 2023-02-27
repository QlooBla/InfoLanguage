@extends('layouts.base')
@section('title-page', 'Вход')
@section('auth-page')
    <section class="form">
        <div class="form__container _container">
            <div class="form__body">
                <div class="form__image form__image_auth">
                    <img src="img/auth-reg/01.jpg" alt="" />
                </div>
                <div class="form__fight-form right-form">
                    <h1 class="right-form__title">Авторизация</h1>
                    <form action="{{ route('login') }}" class="right-form__form" method="POST">
                        @csrf
                        <div class="right-form__item">
                            <label for="email" class="right-form__label">{{ __('Введите вашу почту:') }}</label>
                            <input value="{{ old('email') }}" name="email" id="email" type="email" class="right-form__inp" />
                            @error('email')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="password" class="right-form__label">{{ __('Введите ваш пароль:') }}</label>
                            <input
                                id="password"
                                value="{{ old('password') }}"
                                name="password"
                                type="password"
                                class="right-form__inp"
                            />
                            @error('password')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="right-form__btn" type="submit">{{ __('Вход') }}</button>
                    </form>
                    <div class="right-form__bottom-info">
                        <div class="right-form__quest">
                            Нет аккаунта?
                            <a href="{{ route('register') }}">Зарегистрироваться!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
