@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush
@section('content')
    <h1 align="center">Новости<br>&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;</h1>
    <section class="news-block">
        <div class="news-catalog">
            @foreach ($news as $newItem)
                <div class="newsBlog">
                <div class="newsIMG">
                    <img src="storage\{!! $newItem['image']!!}">
                </div>
                <div class="newsTXT">
                    <h1>{!! $newItem['tittle']!!}</h1>
                    {!! $newItem['text']!!}
                </div>
                </div>
                <img src={{asset("img/home/dot.png")}} class="dot">
            @endforeach
        </div>
        {{$news->links("pagination::bootstrap-4")}}
    </section>
@endsection
