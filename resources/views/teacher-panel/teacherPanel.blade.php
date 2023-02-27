@extends('layouts.base');
@section('title-page', 'Личный кабинет учителя')
@section('teacher-panel')
    <section class="start">
        <div class="admin-panel__container _container">
            <h1 class="admin-panel__title">Добро пожаловать в личный кабинет, <span>{{ Auth::user() -> login }}</span></h1>
            <h2 class="admin-panel2__title">Ваши курсы:</h2>
            <a href="{{ route('course.add') }}" class="directions__btn-add">Добавить новый курс</a>
            <div class="all-courses__row">
                @if(count($courses)> 0)
                    @foreach($courses as $course)
                        <div class="all-courses__bodyyy">
                            <a href="{{ route('coursePage', ['course' => $course -> id]) }}" id="all-courses-fleex" class="all-courses__item ">
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
                            <a href="{{ route('course.edit', ['course' => $course -> id]) }}" class="directions__update-btn">Редактировать</a>
                            <form action="{{ route('course.deleted', ['course' => $course -> id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="directions__delete-btn" value="Удалить">
                            </form>
                        </div>
                    @endforeach
                @else
                    <div class="directions__item-not">
                        У вас нет своих курсов, но вы можете их добавить по клику на кнопку выше.
                    </div>
                @endif
            </div>

        </div>

    </section>
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
