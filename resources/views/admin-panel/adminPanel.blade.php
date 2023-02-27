@extends('layouts.base');
@section('title-page', 'Личный кабинет администратора')
@section('admin-panel')
    <section class="start">
        <div class="admin-panel__container _container">
            <h1 class="admin-panel__title">Добро пожаловать в личный кабинет, <span>{{ Auth::user() -> login }}</span></h1>
            @auth()
                @if(Auth::user() -> user_role == 'admin')
                    <div class="admin-panel__body">
                        <h2 class="admin-panel__list-user-title">Список пользователей</h2>
                        <a href="{{ route('user.add') }}" class="directions__btn-add">Добавить пользователя</a>
                        <div class="admin-panel__row">
                        @foreach($users as $user)
                            <div class="admin-panel__item">
                            <div class="admin-panel__infos">
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Логин</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->login))
                                            {{ $user->login }}
                                        @else
                                            Не указан
                                        @endif
                                    </div>
                                </div>
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Имя</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->name))
                                            {{ $user->name }}
                                        @else
                                            Не указано
                                        @endif
                                    </div>
                                </div>
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Фамилия</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->surname))
                                            {{ $user->surname }}
                                        @else
                                            Не указана
                                        @endif
                                    </div>
                                </div>
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Отчество</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->patronymic))
                                            {{ $user->patronymic }}
                                        @else
                                            Не указано
                                        @endif
                                    </div>
                                </div>
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Email</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->email))
                                            {{ $user->email }}
                                        @else
                                            Не указан
                                        @endif
                                    </div>
                                </div>
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Ссылка на соц.сеть:</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->social_vk))
                                            {{ $user->social_vk }}
                                        @else
                                            Не указана
                                        @endif
                                    </div>
                                </div>
                                <div class="admin-panel__items">
                                    <div class="admin-panel__info">Тип юзера:</div>
                                    <div class="admin-panel__sub-info">
                                        @if (!empty($user->user_role))
                                            {{ $user->user_role }}
                                        @else
                                            Не указан
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="admin-panel__buttons">
                                <form action="{{ route('user.deleted', ['user' => $user -> id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="admin-panel__delete-btn" value="Удалить">
                                </form>

                                <a href="{{ route('user.edit', ['user' => $user -> id]) }}" class="admin-panel__edit">Редактировать</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
                @endif

            @endauth

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
