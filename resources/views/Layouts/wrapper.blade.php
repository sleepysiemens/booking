<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/0a007e12dc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="container justify-space-between">
        <div class="header-logo"><h4>Название</h4></div>
        <nav class="header-nav">
            <ul>
                <li class="nav-item">
                    <a class="nav-item-a">
                        Тариф
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-a">
                        Помощь
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-a">
                        Блог
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-a">
                        Отзывы
                    </a>
                </li>
            </ul>
        </nav>
        <a class="header-login">
            <i class="fas fa-user"></i>
            <p> Мой профиль</p>
        </a>
    </div>
</header>

<main>
    <div class="bg-banner">
    </div>
    @yield('content')
</main>
<footer>

</footer>
</body>
</html>

<script>
    function headerBG() {
        if ($(window).scrollTop() > 150) {
            $('header').css('background', 'linear-gradient(200deg, rgba(2,0,36,1) 0%, rgba(2,0,36,1) 75%, rgba(16,16,156,1) 100%)');
        } else {
            $('header').css('background', 'transparent');
        }
    }
    headerBG();

    $(window).scroll(function() {
        headerBG();
    });
</script>
