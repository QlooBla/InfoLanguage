@extends('layouts.base')
@section('title-page', 'Направления')
@section('direction-page')
    <!-- Over-block -->
    <section class="over-block">
        <div class="over-block__container _container">
            <div class="over-block__body">
                <h1 class="over-block__title">Все виды направлений обучения</h1>
                <div class="over-block__subtitle">
                    <p>
                        “Учитесь так, словно вы постоянно ощущаете нехватку своих
                        знаний, и так, словно вы постоянно боитесь растерять свои
                        знания.”
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- directions -->
    <section class="directions">
        <div class="directions__container _container">
            <div class="title-block _anim-items _anim-no-hide">
                <div class="title-block__over-title">
                    <div class="title-block__line"></div>
                    <div class="title-block__text _anim-items _anim-no-hide">
                        Направления
                    </div>
                </div>
                <h2 class="title-block__title _anim-items _anim-no-hide">
                    СПИСОК НАПРАВЛЕНИЙ ИЗУЧЕНИЯ ЯЗЫКА
                </h2>
            </div>
            @auth()
                @if(Auth::user() -> user_role == 'admin')
                    <a href="{{ route('direction.add') }}" class="directions__btn-add">Добавить направление</a>
                @endif
            @endauth
            @if(count($directions) > 0)
            <div class="directions__row">
                @foreach($directions as $direction)
                <div class="directions__item">
                    <div class="directions__image">
                        <img src="{{asset(str_replace('public/', 'storage/', $direction->img))}}" alt="{{ $direction -> title }}" />
                    </div>
                    <div class="directions__block">
                        <div class="directions__over-text">Направление:</div>
                        <h3 class="directions__title">{{ $direction -> title }}</h3>
                        <div class="directions__subtitle">
                            <p>
                                {{ $direction -> subtitle }}
                            </p>
                        </div>
                        <div class="directions__beneficts">
                            <div class="directions__plus-body">
                                <div class="directions__icon">
                                    <svg
                                        width="19"
                                        height="20"
                                        viewBox="0 0 19 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9.5 0.399994C4.25341 0.399994 0 4.6534 0 9.89999C0 15.1466 4.25341 19.4 9.5 19.4C14.7466 19.4 19 15.1466 19 9.89999C19 4.6534 14.7466 0.399994 9.5 0.399994ZM14.8308 6.92045C13.7836 7.96977 13.0776 8.58079 11.1107 10.9536C9.975 12.3225 8.90193 13.7928 8.8933 13.8036L8.42261 14.3909C8.3233 14.5226 8.13114 14.5377 8.01023 14.4254L4.22966 10.9126C3.84534 10.5564 3.82375 9.95397 4.18 9.56965C4.53625 9.18534 5.13864 9.16375 5.52295 9.52L7.78784 11.6251C7.90659 11.7352 8.09227 11.7223 8.19591 11.597C8.54568 11.1631 9.025 10.6362 9.54318 10.1159C11.4907 8.15329 12.6868 7.09965 13.3259 6.63329C14.1032 6.06761 14.9949 5.58397 15.2108 5.8517C15.5455 6.27056 15.3403 6.40874 14.8308 6.92045Z"
                                            fill="white"
                                        />
                                    </svg>
                                </div>
                                <div class="directions__text">Различные курсы</div>
                            </div>
                            <div class="directions__plus-body">
                                <div class="directions__icon">
                                    <svg
                                        width="19"
                                        height="20"
                                        viewBox="0 0 19 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9.5 0.399994C4.25341 0.399994 0 4.6534 0 9.89999C0 15.1466 4.25341 19.4 9.5 19.4C14.7466 19.4 19 15.1466 19 9.89999C19 4.6534 14.7466 0.399994 9.5 0.399994ZM14.8308 6.92045C13.7836 7.96977 13.0776 8.58079 11.1107 10.9536C9.975 12.3225 8.90193 13.7928 8.8933 13.8036L8.42261 14.3909C8.3233 14.5226 8.13114 14.5377 8.01023 14.4254L4.22966 10.9126C3.84534 10.5564 3.82375 9.95397 4.18 9.56965C4.53625 9.18534 5.13864 9.16375 5.52295 9.52L7.78784 11.6251C7.90659 11.7352 8.09227 11.7223 8.19591 11.597C8.54568 11.1631 9.025 10.6362 9.54318 10.1159C11.4907 8.15329 12.6868 7.09965 13.3259 6.63329C14.1032 6.06761 14.9949 5.58397 15.2108 5.8517C15.5455 6.27056 15.3403 6.40874 14.8308 6.92045Z"
                                            fill="white"
                                        />
                                    </svg>
                                </div>
                                <div class="directions__text">
                                    Бесплатный доступ авторизованным
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('directionSpecific', ['direction' => $direction -> id]) }}" class="directions__btn border-btn">
                            <span>Посмотреть всё</span>
                        </a>
                        @auth()
                            @if(Auth::user() -> user_role == 'admin')
                                <a href="{{ route('direction.edit', ['direction' => $direction -> id]) }}" class="directions__update-btn">Редактировать</a>
                                <form action="{{ route('direction.deleted', ['direction' => $direction -> id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="directions__delete-btn" value="Удалить">
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>
            @else()
            <div class="directions__item-not">
                Направлений обучения не обнаружено, но скоро будет добавлено!
            </div>
            @endif
            <div class="notification-popup">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
        </div>
    </section>
@endsection
