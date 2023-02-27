<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title-page') | InfoLanguage</title>
    <meta charset="UTF-8" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="{{asset('favicon/apple-touch-icon.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{asset('favicon/favicon-32x32.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{asset('favicon/favicon-16x16.png')}}"
    />
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}" />
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}} " color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
</head>
<body>
    <div class="wrapper">
        @yield('error-page')
    </div>
</body>
