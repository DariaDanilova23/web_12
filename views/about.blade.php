@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
@section('content')
    <section class="about">
        <div class="about_block">
            <img  align="left" src="ing/family.jpg">
            <div class="about_text">
                <h1>О нас</h1>
                <p> Кондитерская студия Mari'O - первая студия, в которой вы встретитесь с настоящим волшебством кулинарного искусства!
                    У нас можно наблюдать не только пирожные и торты, но целую Философию вкусной жизни</p>
            </div>
        </div>
        <div class="master_block">
            <div class="master_text">
                <h1>Мастер классы</h1>
                <p> Мы регулярно проводим мастер-классы для начинающих и опытных кондитеров.</p>
            </div>
            <img  align="right" src="img/master.jpg">
        </div>
    </section>
@endsection
