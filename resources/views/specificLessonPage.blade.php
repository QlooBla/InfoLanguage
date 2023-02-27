@extends('layouts.base')
@section('title-page', 'Курс')

@section('specific-course')
    <!-- Over-Course -->
    <div class="over-course">
        <div class="over-course__container _container">
            <div class="over-course__body">
                <h1 class="over-course__title">
                    {{ $lesson -> title_lesson }}
                </h1>
                <div class="over-course__subtitle">
                    <p>
                        {{ $lesson -> big_desc_lesson }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn block for not auth -->
    <div class="sub-over-body">
        <div class="sub-over-body__container _container">
            <div class="sub-over-body__items">
                <div class="sub-over-body__item learn-item">
                    <h2 class="learn-item__title title-courses">
                        Тема:
                    </h2>
                    <div class="learn-item__text text-courses">
                        {{ $lesson -> theme_text_lesson }}
                    </div>
                </div>
                <div class="sub-over-body__item learn-item">
                    <h2 class="learn-item__title title-courses">Упражнения:</h2>
                    <div class="learn-item__text text-courses">
                        {{ $lesson -> training_lesson }}
                    </div>
                </div>
                <div class="sub-over-body__item learn-item">
                    <h2 class="learn-item__title title-courses">Итог:</h2>
                    <div class="learn-item__text text-courses">
                        {{ $lesson -> conclusion_lesson }}
                    </div>
                </div>
            </div>
        </div>
    </div>
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
