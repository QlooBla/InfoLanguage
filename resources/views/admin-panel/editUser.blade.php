@extends('layouts.base')
@section('title-page', 'Редактирование пользователя')

@section('addDirectionPage')
    <div class="start">
        <div class="addDirectionPage__container _container">
            <h2 class="addDirectionPage__title">Пожалуйста, измените поля.</h2>
            <form action="{{ route('user.update', ['user' => $user -> id]) }}" class="addDirectionPage__form" method="post">
                @csrf
                @method('PATCH')
                <div class="right-form__item">
                    <label for="login" class="right-form__label">Логин пользователя</label>
                    <input value="{{ old('login', $user -> login) }}" type="text" id="login" name="login" class="right-form__inp" autocomplete="login">
                    @error('login')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="name" class="right-form__label">Имя пользователя</label>
                    <input value="{{ old('name', $user -> name) }}" type="text" id="name" name="name" class="right-form__inp" autocomplete="name">
                    @error('name')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="surname" class="right-form__label">Фамилия пользователя</label>
                    <input value="{{ old('surname', $user -> surname) }}" type="text" id="surname" name="surname" class="right-form__inp" autocomplete="surname">
                    @error('surname')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="patronymic" class="right-form__label">Отчество пользователя</label>
                    <input value="{{ old('patronymic', $user -> patronymic) }}" type="text" id="patronymic" name="patronymic" class="right-form__inp" autocomplete="patronymic">
                    @error('patronymic')
                    <span class="invalid-feedback-a" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="right-form__item">
                    <label for="user_role" class="right-form__label">Тип пользователя</label>
                    <select name="user_role" id="user_role" class="right-form__inp right-form-select">
                        <option selected value="user">Обычный пользователь</option>
                        <option  value="teacher">Учитель</option>
                        <option value="admin">Администратор</option>
                    </select>
                </div>
                <button class="green-addDirectionPage" type="submit" value="">Добавить пользователя</button>
            </form>
            <a href="{{ route('adminPanel') }}" class="addDirectionPage__back">Вернуться назад</a>
        </div>

    </div>

@endsection
