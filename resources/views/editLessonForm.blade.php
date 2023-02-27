@extends('layouts.base')
@section('title-page', 'Изменение урока')

@section('addDirectionPage')
    <div class="start">
        <div class="addDirectionPage__container _container">
            <h2 class="addDirectionPage__title">Пожалуйста, заполните поля.</h2>
            <form action="{{ route('lesson.update', ['lesson' => $lesson->id, 'course' => $course]) }}" class="addDirectionPage__form" method="post">
                @csrf
                @method('PATCH')
                <div class="right-form__item">
                    <label for="title_lesson" class="right-form__label">Название урока</label>
                    <input maxlength="255" value="{{ old('title_lesson', $lesson -> title_lesson) }}" type="text" id="title_lesson" name="title_lesson" class="right-form__inp" autocomplete="title_lesson">
                    @error('title_lesson')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="short_desc_lesson" class="right-form__label">Краткое описание урока</label>
                    <input maxlength="255" value="{{ old('short_desc_lesson', $lesson -> short_desc_lesson) }}" type="text" id="short_desc_lesson" name="short_desc_lesson" class="right-form__inp" autocomplete="short_desc_lesson">
                    @error('short_desc_lesson')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="big_desc_lesson" class="right-form__label">Подробное описание урока</label>
                    <textarea class="right-form__textarea" name="big_desc_lesson" id="big_desc_lesson">{{ old('big_desc_lesson', $lesson -> big_desc_lesson) }}</textarea>
                    @error('big_desc_lesson')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="theme_text_lesson" class="right-form__label">Описывайте вашу тему, вставьте текст лекции и т.д</label>
                    <textarea class="right-form__textarea" name="theme_text_lesson" id="theme_text_lesson">{{ old('theme_text_lesson', $lesson -> theme_text_lesson) }}</textarea>
                    @error('theme_text_lesson')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="training_lesson" class="right-form__label">Добавьте хотя бы 1 упражнение</label>
                    <textarea class="right-form__textarea" name="training_lesson" id="training_lesson">{{ old('training_lesson', $lesson -> training_lesson) }}</textarea>
                    @error('training_lesson')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="conclusion_lesson" class="right-form__label">Напишите небольшой итог вашего урока</label>
                    <textarea class="right-form__textarea" name="conclusion_lesson" id="conclusion_lesson">{{ old('conclusion_lesson', $lesson -> conclusion_lesson) }}</textarea>
                    @error('conclusion_lesson')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="green-addDirectionPage" type="submit" value="">Добавить урок</button>
                <a href="{{ route('coursePage', ['course' => $course->id]) }}" class="addDirectionPage__back">Вернуться назад</a>
            </form>

        </div>

    </div>

@endsection
