@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endpush
@section('content')
    <h1 align="center">Каталог<br>&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;</h1>
    <section class="catalog">
        <div class="img-catalog">
    @foreach ($catalog as $catalogItem)
        <div class="catalog-item">
            <div class="photo">
                <a class="catalog-link" href="{{ route('catalog.show', ['catalog' => $catalogItem])}}"> <img src="\storage\{!! nl2br($catalogItem['img']) !!}" >
                    <div class="catalog-item-hover">{!! nl2br($catalogItem['name']) !!}</div>
                </a>
            </div>
        </div>
    @endforeach
        </div>
    </section>
@endsection


