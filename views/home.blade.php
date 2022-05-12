@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush
@section('content')
    <div class="welcome">
        <img class="main_photo" src={{asset('img/marioBack.png')}}>
        <h1 class="motto"> НЕ ПРОСТО <br> КОНДИТЕРСКАЯ</h1>
    </div>
    <img src={{asset("img/home/dot.png")}} class="dot">
    <div class="block2">
        <div class="cake">
            <p>Кондитерская студия Mari'O - это <br> студия Севастополя, в которой можно наблюдать не только пирожные и торты, но и целую Философию вкусной жизни.  </p>
            <img src={{asset("img/home/cake.jpg")}} class="cake" align="right">
        </div>
    </div>
    <div class="block3">
        <h1>АДРЕСА <br>&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;</h1>
        <div class="block_adress">
            <div class="adress1">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8547a96bf7237a8107a1a923adf060d4854e4d1ba09283ddc5eef037c98b56a8&amp;source=constructor" ></iframe>
                <p>Севастополь<br>ул. Тараса Шевченко, 49</p>
            </div>
            <div class="adress2">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab167a0e1a39a1894ffab81c67bf7b2c9a15b48e940b128fd3ea90fce269a9a97&amp;source=constructor"></iframe>
                <p>Севастополь <br> ТЦ "Sea Mall"<br>просп. Генерала Острякова,  260<br>2 этаж ТЖК</p>
            </div>
        </div>
    </div>
@endsection
