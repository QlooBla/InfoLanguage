@extends('layouts.base')
@section('title-page', 'Курс')

@section('specific-course')
    <!-- Over-Course -->
    <div class="over-course">
        <div class="over-course__container _container">
            <div class="over-course__body">
                <h1 class="over-course__title">
                    {{ $course -> title_course }}
                </h1>
                <div class="over-course__subtitle">
                    <p>
                        {{ $course -> short_desc }}
                    </p>
                </div>
                @guest()
                <div class="over-course__cta">
                    Хотите обучаться?
                    <a href="{{ route('login') }}">Войдите в аккаунт!</a>
                </div>
                @endguest
                <div class="over-course__bottom">
                    <div class="over-course__author">
                        Автор курса: <span>{{ $course -> user -> name }} {{ $course -> user -> surname }}</span>
                    </div>
                    <div class="over-course__date">{{ $course -> created_at -> format('Y-m-d') }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner for auth -->
    @auth()
    <div class="banner">
        <div class="banner__body">
            <div class="banner__image">
                <img src="{{ asset('img/courses/banner.jpg') }}" alt="" />
            </div>
            <div class="banner__textt">
                <div class="banner__sub-image">
                    Главный онлайн - университет по преподаванию иностранных языков
                    в СНГ
                </div>
                <a href="{{ route('direction') }}" class="banner__direction"
                >Перейти к другим направлениям</a
                >
            </div>
        </div>
    </div>
    @endauth
    <!-- Banner for not auth -->
    @guest()
    <div class="banner">
        <div class="banner__body">
            <div class="banner__image">
                <img src="{{asset('img/courses/banner.jpg')}}" alt="" />
            </div>
            <div class="banner__textt">
                <div class="banner__sub-image">
                    Главный онлайн - университет по преподаванию иностранных языков
                    в СНГ
                </div>
                <div class="banner__info">
                    Для того, чтобы получить доступ к урокам данного курса
                    <a href="{{ route('login') }}">войдите в аккаунт</a>
                </div>
                <a href="{{ route('direction') }}" class="banner__direction"
                >Перейти к другим направлениям</a
                >
            </div>
        </div>
    </div>
    @endguest
    <!-- Learn block for auth -->
    @auth()
    <div class="sub-over-body">
        <div class="sub-over-body__container _container">
            <div class="sub-over-body__items">
                @if(Auth::user() -> user_role == 'teacher')
                    <a href="{{ route('showAddLessonForm', ['course' => $course->id]) }}" class="directions__btn-add">Добавить урок</a>
                @endif
                <h2 class="learn-item__title title-courses">Уроки:</h2>
                <div class="sub-over-body__lesson lesson-item">
                    <div class="lesson-item__row">
                        @if(!is_null($lessons))
                            @if ($lessons->count() > 0)
                                @foreach($lessons as $lesson)
                                    <div class="body-for-a">
                                        <a href="{{ route('showSpecificLessonPage', ['course' => $course, 'lesson' => $lesson]) }}" class="lesson-item__item">
                                            <h2 class="lesson-item__title">{{$lesson -> title_lesson}}</h2>
                                            <div class="lesson-item__description">
                                                {{ $lesson -> short_desc_lesson }}
                                            </div>
                                            @if(Auth::user() -> user_role == 'teacher')
                                                <form action="{{ route('lesson.delete', ['course' => $course, 'lesson' => $lesson->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="deleteLessonBtn" type="submit">Удалить</button>
                                                </form>
                                            @endif
                                        </a>
                                        @if(Auth::user() -> user_role == 'teacher')
                                            <a href="{{ route('showEditLessonForm', ['lesson' => $lesson->id, 'course' => $course]) }}" class="updateLessonBtn">Редактировать</a>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                @if(Auth::user() -> user_role === 'teacher')
                                    <div class="directions__item-not">
                                        Уроки ещё не были добавлены, сделайте это!
                                    </div>
                                @else
                                    <div class="directions__item-not">
                                        По данному курсу уроков найдено не было. Приносим свои извинения, мы работаем над этим!
                                    </div>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
{{--                    ОТЗЫВЫ БУДУТ НА ДИПЛОМ --}}
{{--                <div class="sub-over-body__rev rev-body">--}}
{{--                    <h3 class="rev-body__title">Оставить отзыв</h3>--}}
{{--                    <form action="" class="rev-body__form">--}}
{{--                          <textarea--}}
{{--                              name=""--}}
{{--                              class="rev-body__textar"--}}
{{--                              placeholder="Напишите отзыв тут"--}}
{{--                          ></textarea>--}}
{{--                        <button class="rev-body__btn" type="submit">Отправить</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    @endauth
    @guest()
    <!-- Learn block for not auth -->
    <div class="sub-over-body">
        <div class="sub-over-body__container _container">
            <div class="sub-over-body__items">
                <div class="sub-over-body__item learn-item">
                    <h2 class="learn-item__title title-courses">
                        Чему вы научитесь:
                    </h2>
                    <div class="learn-item__text text-courses">
                        {{ $course -> learn_desc }}
                    </div>
                </div>
                <div class="sub-over-body__item learn-item">
                    <h2 class="learn-item__title title-courses">Требования</h2>
                    <div class="learn-item__text text-courses">
                        {{ $course -> requirements_desc }}
                    </div>
                </div>
{{--                <div class="reviews-item">--}}
{{--                    <h2 class="learn-item__title title-courses">Отзывы:</h2>--}}
{{--                    <div class="reviews-item__row">--}}
{{--                        <div class="reviews-item__review">--}}
{{--                            <div class="reviews-item__top">--}}
{{--                                <div class="reviews-item__logo">--}}
{{--                                    <img src="img/mainPage/review/01.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="reviews-item__info-body">--}}
{{--                                    <h3 class="reviews-item__name">Артём Попов</h3>--}}
{{--                                    <div class="reviews-item__subname">29.11.2022</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="reviews-item__text">--}}
{{--                                <p>--}}
{{--                                    Комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="reviews-item__review">--}}
{{--                            <div class="reviews-item__top">--}}
{{--                                <div class="reviews-item__logo">--}}
{{--                                    <img src="img/mainPage/review/01.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="reviews-item__info-body">--}}
{{--                                    <h3 class="reviews-item__name">Артём Попов</h3>--}}
{{--                                    <div class="reviews-item__subname">29.11.2022</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="reviews-item__text">--}}
{{--                                <p>--}}
{{--                                    Комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="reviews-item__review">--}}
{{--                            <div class="reviews-item__top">--}}
{{--                                <div class="reviews-item__logo">--}}
{{--                                    <img src="img/mainPage/review/01.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="reviews-item__info-body">--}}
{{--                                    <h3 class="reviews-item__name">Артём Попов</h3>--}}
{{--                                    <div class="reviews-item__subname">29.11.2022</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="reviews-item__text">--}}
{{--                                <p>--}}
{{--                                    Комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="reviews-item__review">--}}
{{--                            <div class="reviews-item__top">--}}
{{--                                <div class="reviews-item__logo">--}}
{{--                                    <img src="img/mainPage/review/01.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="reviews-item__info-body">--}}
{{--                                    <h3 class="reviews-item__name">Артём Попов</h3>--}}
{{--                                    <div class="reviews-item__subname">29.11.2022</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="reviews-item__text">--}}
{{--                                <p>--}}
{{--                                    Комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий комментарий комментарий комментарий--}}
{{--                                    комментарий--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="all-courses__pagination">--}}
{{--                        <div class="all-courses__item-paginat">--}}
{{--                            <svg--}}
{{--                                width="8"--}}
{{--                                height="14"--}}
{{--                                viewBox="0 0 8 14"--}}
{{--                                fill="none"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    d="M7 12.0151L0.795395 7L7 1.98488L7 12.0151Z"--}}
{{--                                    stroke="#353BE2"--}}
{{--                                />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <div class="all-courses__item-paginat">1</div>--}}
{{--                        <div class="all-courses__item-paginat">2</div>--}}
{{--                        <div class="all-courses__item-paginat">3</div>--}}
{{--                        <div class="all-courses__item-paginat">4</div>--}}
{{--                        <div class="all-courses__item-paginat">5</div>--}}
{{--                        <div class="all-courses__item-paginat">6</div>--}}
{{--                        <div class="all-courses__item-paginat">7</div>--}}
{{--                        <div class="all-courses__item-paginat">15</div>--}}
{{--                        <div class="all-courses__item-paginat">--}}
{{--                            <svg--}}
{{--                                width="8"--}}
{{--                                height="14"--}}
{{--                                viewBox="0 0 8 14"--}}
{{--                                fill="none"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    d="M1 1.98488L7.2046 7L1 12.0151L1 1.98488Z"--}}
{{--                                    stroke="#353BE2"--}}
{{--                                />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    @endguest
    <div class="notification-popup">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
    </div>
@endsection
