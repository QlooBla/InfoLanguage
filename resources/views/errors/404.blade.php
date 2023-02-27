@extends('layouts.for404')
@section('title-page', '404')
@section('error-page')
    <section class="start">
        <div class="error-page__container _container">
            <div class="error-page__body">
                <h1 class="error-page__title">404</h1>
                <h2 class="error-page__subtitle">Такой страницы нет</h2>
                <h3 class="error-page__bottom-title">Зато есть много интересных направлений изучения языков, которые можно найти
                    <a href="{{ route('direction') }}" class="error-page__link">тут</a>.
                </h3>
            </div>
        </div>
    </section>
@endsection
