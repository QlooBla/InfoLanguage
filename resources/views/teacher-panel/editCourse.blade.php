@extends('layouts.base')
@section('title-page', 'Добавление пользователя')

@section('addDirectionPage')
    <div class="start">
        <div class="addDirectionPage__container _container">
            <h2 class="addDirectionPage__title">Пожалуйста, измените поля.</h2>
            <form action="{{ route('course.update', ['course' => $course -> id]) }}" class="addDirectionPage__form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="right-form__item">
                    <label for="title_course" class="right-form__label">Название курса (его основной заголовок)</label>
                    <input value="{{ old('title_course', $course -> title_course)}}" type="text" id="title_course" name="title_course" class="right-form__inp" autocomplete="title_course">
                    @error('title_course')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="short_desc" class="right-form__label">Небольшое описание курса (о чём он, для чего он)</label>
                    <input value="{{ old('short_desc', $course -> short_desc)}}" type="text" id="short_desc" name="short_desc" class="right-form__inp" autocomplete="short_desc">
                    @error('short_desc')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="learn_desc" class="right-form__label">Опишите, чему ученик научится, пройдя этот курс. Также можете описать, почему ваш курс лучше, чем у других.</label>
                    <textarea class="right-form__textarea" name="learn_desc" id="learn_desc">{{ old('learn_desc', $course -> learn_desc)}}</textarea>
                    @error('learn_desc')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="requirements_desc" class="right-form__label">Опишите, какие  навыки должен иметь ученик, чтобы комфортно пользоваться вашим курсом.</label>
                    <textarea class="right-form__textarea" name="requirements_desc" id="requirements_desc">{{ old('requirements_desc', $course -> requirements_desc)}}</textarea>
                    @error('requirements_desc')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="file" class="right-form__label">Загрузите картинку (она будет обложкой вашего курса)</label>
                    <img style="width: 400px; margin-bottom: 10px;" src="{{asset(str_replace('public/', 'storage/', $course->image))}}" alt="{{ $course -> title }}" />
                    <input type="file" id="file" name="file" class="right-form__inp">
                    @error('file')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="direction" class="right-form__label">Выберите направление</label>
                    <select name="direction" id="direction" class="right-form__inp right-form-select">
                        @foreach($directions as $direction)
                            @if($direction->id==$course->direction_id)
                                <option value="{{$direction->id}}" selected="selected">{{$direction->title}}</option>
                            @else
                                <option value="{{$direction->id}}">{{$direction->title}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button class="green-addDirectionPage" type="submit" value="">Редактировать курс</button>
            </form>
            <a href="{{ route('teacherPanel') }}" class="addDirectionPage__back">Вернуться назад</a>
        </div>

    </div>

@endsection
