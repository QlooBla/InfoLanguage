@extends('layouts.base')
@section('title-page', 'Регистрация')
@section('reg-page')
    <section class="form">
        <div class="form__container _container">
            <div class="form__body">
                <div class="form__image">
                    <img src="img/auth-reg/01.jpg" alt="" />
                </div>
                <div class="form__fight-form right-form">
                    <h1 class="right-form__title">Регистрация</h1>
                    <form method="POST" action="{{ route('register') }}" class="right-form__form">
                        @csrf
                        <div class="right-form__item">
                            <label for="name" class="right-form__label"
                            >{{ __('Ваше имя:') }}</label
                            >
                            <input
                                value="{{ old('name') }}"
                                autocomplete="name"
                                name="name"
                                placeholder="Иван"
                                id="name"
                                type="text"
                                class="right-form__inp @error('name') is-invalid @enderror"/>
                            @error('name')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="surname" class="right-form__label"
                            >{{ __('Ваша фамилия:') }}</label
                            >
                            <input
                                placeholder="Иванович"
                                value="{{ old('surname') }}"
                                autocomplete="surname"
                                name="surname"
                                id="surname"
                                type="text"
                                class="right-form__inp  @error('surname') is-invalid @enderror"
                            />
                            @error('surname')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="patronymic" class="right-form__label">{{ __('Ваше отчество:') }}</label>
                            <input value="{{ old('patronymic') }}" placeholder="Николаевич" autocomplete="patronymic"  id="patronymic" name="patronymic" type="text"  class="right-form__inp"/>
                            @error('patronymic')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="phone" class="right-form__label"
                            >{{ __('Ваша электронная почта:') }}</label
                            >
                            <input
                                placeholder="editor@mail.ru"
                                value="{{ old('email') }}"
                                id="email"
                                autocomplete="email"
                                name="email"
                                type="email"
                                class="right-form__inp"
                            />
                            @error('email')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="login" class="right-form__label"
                            >{{ __('Придуймайте логин') }}</label
                            >
                            <input value="{{ old('login') }}" autocomplete="login" id="login"type="text" name="login" class="right-form__inp" />
                            @error('login')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="password" class="right-form__label"
                            >{{ __('Придумайте пароль:') }}</label
                            >
                            <input

                                autocomplete="login"
                                id="password"
                                type="password"
                                value="{{ old('password') }}"
                                name="password"
                                class="right-form__inp"
                            />
                            <button type="button" style="opacity: 0; visibility: hidden; transition: all .3s linear" id="toggle-btn">Показать/Скрыть</button>
                            @error('password')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="right-form__item">
                            <label for="password_confirmation" class="right-form__label">{{ __('Подтвердите пароль:') }}</label>
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                class="right-form__inp"/>
                            <button type="button" style="opacity: 0; visibility: hidden; transition: all .3s linear" id="toggle-btn1">Показать/Скрыть</button>
                            @error('password_confirmation')
                            <span class="invalid-feedback-a" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="right-form__btn" type="submit">
                            {{ __('Зарегистрироваться') }}
                        </button>
                    </form>
                    <div class="right-form__bottom-info">
                        <div style="margin-bottom: 10px;" class="right-form__quest">
                            Регистрируясь, вы соглашаетесь с <a href="{{ route('privacy') }}">политикой конфиденциальности</a>!
                        </div>
                        <div class="right-form__quest">
                            Уже есть аккаунт? <a href="{{ route('login') }}">Войти!</a>
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
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

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
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
