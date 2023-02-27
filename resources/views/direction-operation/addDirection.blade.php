@extends('layouts.base')
@section('title-page', 'Добавление направления')

@section('addDirectionPage')
    <div class="start">
        <div class="addDirectionPage__container _container">
            <h2 class="addDirectionPage__title">Пожалуйста, заполните поля.</h2>
            <form action="{{ route('direction.added') }}" class="addDirectionPage__form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="right-form__item">
                    <label for="title" class="right-form__label">Название направления</label>
                    <input maxlength="255" value="{{ old('title') }}" type="text" id="title" name="title" class="right-form__inp" autocomplete="name">
                    @error('title')
                        <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="subtitle" class="right-form__label">Описание направления</label>
                    <input maxlength="255" value="{{ old('subtitle') }}" type="text" id="subtitle" name="subtitle" class="right-form__inp" autocomplete="subtitle">
                    @error('subtitle')
                        <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="file" class="right-form__label">Картинка</label>
                    <input type="file" id="file" name="file" class="right-form__inp">
                    @error('file')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="green-addDirectionPage" type="submit" value="">Добавить направление</button>
            </form>
            <a href="{{ route('direction') }}" class="addDirectionPage__back">Вернуться назад</a>
        </div>

    </div>

@endsection
