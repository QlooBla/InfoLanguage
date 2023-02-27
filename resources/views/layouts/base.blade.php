<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title-page') | InfoLanguage</title>
    <meta name="description" content="@yield('description-page')">
    <meta charset="UTF-8">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    >

    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="{{asset('favicon/apple-touch-icon.png')}}"
    >
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{asset('favicon/favicon-32x32.png')}}"
    >
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{asset('favicon/favicon-16x16.png')}}"
    >
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}" >
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}} " color="#5bbad5" >
    <meta name="msapplication-TileColor" content="#da532c" >
    <meta name="theme-color" content="#ffffff" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <div class="header__row">
                    <a href="{{ route('index') }}" class="header__logo"><img src="{{asset('img/logo.png')}}" alt=""
                        ></a>
                    <div class="header__menu menu-header">
                        <nav class="menu-header__navigation navigation-menu">
                            <ul class="navigation-menu__list">
                                <li>
                                    <a href="{{ route('index') }}#hello" class="navigation-menu__link link-header">О нас</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}#advantages" class="navigation-menu__link link-header">Преимущества</a>
                                </li>

                                <li>
                                    <a href="{{ route('direction') }}" class="navigation-menu__link link-header">Направления</a>
                                </li>

                                <li>
                                    <a href="{{ route('index') }}#reviews" class="navigation-menu__link link-header">Отзывы</a>
                                </li>
                                @auth()
                                    @if(Auth::user() -> user_role == 'admin')
                                        <li>
                                            <a href="{{ route('adminPanel') }}" class="navigation-menu__link link-header">Личный кабинет</a>
                                        </li>
                                    @endif
                                    @if(Auth::user() -> user_role == 'teacher')
                                        <li>
                                            <a href="{{ route('teacherPanel') }}" class="navigation-menu__link link-header">Личный кабинет</a>
                                        </li>
                                    @endif
                                @endauth
                            </ul>
                        </nav>
                        <div class="menu-header__panel panel-menu">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                @auth()
                                <form action="{{ route('logout') }}" method="POST" class="link-none-1">
                                    @csrf
                                    <input style="cursor: pointer" type="submit" value="Выход" class="panel-menu__link link-header btn-danger">

                                </form>
                                @endauth
                            @else
                                @guest()
                                    <a href="{{ route('register') }}" class="panel-menu__link link-header link-none">Регистрация</a>
                                    <a href="{{ route('login') }}" class="panel-menu__link link-image"><img src="{{asset('img/icon/user.png')}}" alt=""></a>
                                    <a href="{{ route('login') }}" class="panel-menu__link link-header link-none">Вход</a>
                                @endguest
                            @endif
                            <button type="button" class="menu__icon icon-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header__over over-header">
                    <div class="over-header__container _container">
                        <div class="over-header__body">
                            <ul class="over-header__list">
                                <li><a href="{{ route('direction') }}" class="over-header__link">Направления</a></li>
                                <li><a href="{{ route('privacy') }}" class="over-header__link">Политика конфиденциальности</a></li>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    @auth()
                                        @if(Auth::user() -> user_role == 'admin')
                                            <li>
                                                <a href="{{ route('adminPanel') }}" class="over-header__link">Личный кабинет</a>
                                            </li>
                                        @endif
                                        @if(Auth::user() -> user_role == 'teacher')
                                            <li>
                                                <a href="{{ route('teacherPanel') }}" class="over-header__link">Личный кабинет</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                            <div class="over-header__socials">
                                <a href="" class="over-header__linkk">VK</a>
                                <a href="" class="over-header__linkk">VIBER</a>
                                <a href="" class="over-header__linkk">WHATSAPP</a>
                                <a href="" class="over-header__linkk">TELEGRAM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="page">
            <!-- for preloader -->
            <div class="preloader">
                <div class="preloader__row">
                    <img src="{{asset('img/preloader.svg')}}" alt="">
                </div>
            </div>
            @yield('start-page')
            @yield('direction-page')
            @yield('auth-page')
            @yield('reg-page')
            @yield('addDirectionPage')
            @yield('admin-panel')
            @yield('courses')
            @yield('privacy')
            @yield('specific-course')
            @yield('teacher-panel')
        </main>
        <footer class="footer">
            <div class="footer__top top-footer">
                <div class="top-footer__container _container">
                    <div class="top-footer__row">
                        <div class="top-footer__info">
                            <h3 class="top-footer__title">Обучение онлайн без границ</h3>
                            <div class="top-footer__subtitle">
                                Получайте новые знания, становитесь лучше и не
                                останавливайтесь на достигнутом
                            </div>
                        </div>
                        @guest()
                        <a href="{{route('register')}}" class="top-footer__btn border-btn">
                            <span>Войти</span>
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="footer__inner inner-footer">
                <div class="inner-footer__container _container">
                    <div class="inner-footer__row">
                        <nav class="inner-footer__navigation">
                            <ul class="inner-footer__list">
                                <li>
                                    <a href="{{ route('index') }}" class="inner-footer__link">Главная</a>
                                </li>
                                <li>
                                    <a href="{{ route('direction') }}" class="inner-footer__link"
                                    >Направления</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('index') }}#hello" class="inner-footer__link"
                                    >О нас</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('index') }}#reviews" class="inner-footer__link"
                                    >Отзывы</a
                                    >
                                </li>
                            </ul>
                        </nav>
                        <nav class="inner-footer__navigation">
                            <ul class="inner-footer__list">
                                @guest()
                                <li>
                                    <a href="{{route('login')}}" class="inner-footer__link">Вход</a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}" class="inner-footer__link"
                                    >Регистрация</a>
                                </li>
                                @endguest()
                                <li>
                                    <a href="{{ route('privacy') }}" class="inner-footer__link"
                                    >Политика конфиденциальности</a
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer__bottom bottom-footer">
                <div class="bottom-footer__container _container">
                    <div class="bottom-footer__row">
                        <a href="{{ route('index') }}" class="bottom-footer__logo"><img src="{{asset('img/logoFooter.png')}}" alt=""></a>
                        <div class="bottom-footer__copy">
                            <p>© 2022 InfoLanguage</p>
                            <p>Все <a href="{{ route('privacy') }}">права</a> защищены</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/typed.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
