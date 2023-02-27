@extends('layouts.base')
@section('title-page', 'Курс | ' . $direction -> title)

@section('courses')
    <!-- Over-block -->
    <section class="over-block">
        <div class="over-block__container _container">
            <div class="over-block__body">
                <h1 class="over-block__title">{{ $direction -> title }}</h1>
                <div class="over-block__subtitle">
                    <p>
                        Подробнее ознакомиться с курсом вы можете при клике на него*
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- All courses -->
    <section class="all-courses">
        <div class="all-courses__container _container">
            <div class="title-block _anim-items _anim-no-hide">
                <div class="title-block__over-title">
                    <div class="title-block__line"></div>
                    <div class="title-block__text">Курсы</div>
                </div>
                <h2 class="title-block__title _anim-items _anim-no-hide">
                    КУРСЫ, ДОСТУПНЫЕ НА ДАННЫЙ МОМЕНТ <span>({{ count($courses) }})</span>
                </h2>
            </div>
            <div class="all-courses__row">
                @if(count($courses)> 0)
                    @foreach($courses as $course)
                        <a href="{{ route('coursePage', ['course' => $course -> id]) }}" class="all-courses__item">
                            <div class="all-courses__image">
                                <img src="{{asset(str_replace('public/', 'storage/', $course->image))}}" alt="" />
                            </div>
                            <div class="all-courses__body-info">
                                <h3 class="all-courses__title">
                                    {{ $course -> title_course }}
                                </h3>
                                <div class="all-courses__bottom-info">
                                    <div class="all-courses__author">
                                        Автор курса: <span>{{ $course -> user -> name }} {{ $course -> user -> surname }}</span>
                                    </div>
                                    <div class="all-courses__date">{{ $course -> created_at -> format('Y-m-d') }}</div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                <div class="directions__item-not">
                    Курсов по данному направлению ещё нету, но скоро появятся!
                </div>
                @endif
            </div>
            <a href="{{ route('direction') }}" class="addDirectionPage__back">Вернуться назад</a>
        </div>
    </section>
@endsection
