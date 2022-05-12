<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @stack('css')
</head>
<body class="body_">
<div class="top">
    <div class="top_left">
        <button class="openMenu" onclick="menuOpen()" >&#9776;</button>
    </div>
    <img alt="logo" src={{asset('img/MarioLOGO.png')}} class="img_logo">
    <div class="top_right">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container_login">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <li onclick="popUp()" class="nav-item">
                                        <a class="nav-link" ><img alt="login" src={{asset('img/buttons/login.png')}}>{{ __('Войти') }}</a>
                                    </li>
                                    </button>
                                @endif
                                @else
                                    <li>
                                        <button class="basket" href=""><img alt="card" src={{asset('img/buttons/card.png')}}></button>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <img alt="logout" src={{asset("img/buttons/logout.png")}}>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="menu">
    <nav class="menu-list">
        <a href="{{route('home.index')}}">Главная</a>
        <a href="{{route('catalog.index')}}">Каталог</a>
        <a href="">Мастер-классы</a>
        <a href="{{route('home.about')}}">О нас </a>
        <a href="">Наши достижения</a>
        <a href="{{route('home.news')}}">Новости</a>
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
@include('auth.login')
<footer>
    <button class="inst"> <a href="https://instagram.com/mario.sevastopol?utm_medium=copy_link"><img alt="instagram" src={{asset('img/buttons/instagram.png')}}></a></button>
    <button class="telega"> <a href="https://www.pinterest.ru/danilovuha/_saved/"><img alt="telegram" src={{asset('img/buttons/telegram.png')}}></a></button>
    <button class="vk"><a href="https://vk.com/mario.sevastopol"><img alt="vk" src={{asset('img/buttons/vk.png')}}></a></button>
</footer>
<script src={{asset('js/layout.js') }}></script>
<script src={{asset('js/register.js') }}></script>
</body>
</html>
