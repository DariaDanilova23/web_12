@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endpush
@section('content')
    <h1>{{$catalog['name']}}</h1>
    <section class="catalog">
        <div class="img-catalog">
                    <div class="products">
                        @foreach ($product as $productItem)
                            <form action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                                <div>
                                    <img src="\storage\{{ $productItem['image'] }}">
                                </div>
                                <div>
                                    <p>{{ $productItem['price'].' ₽' }}</p>
                                </div>
                                @csrf
                                <input type="hidden" value="{{ $productItem['id'] }}" name="id">
                                <input type="hidden" value="{{ $productItem['name'] }}" name="name">
                                <input type="hidden" value="{{ $productItem['price'] }}" name="price">
                                <input type="hidden" value="{{ $productItem['image'] }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                            </form>

                        <!--    <div class="catalog-item">
                                <div class="photo">
                                   <img src="\storage\{!! nl2br($productItem['image']) !!}">
                                        <div class="product-info">
                                            <div class="product-name">{!! nl2br($productItem['name']) !!}</div>
                                            <div class="product-price">{!! nl2br($productItem['price']) !!}</div>
                                        </div>
                                </div>
                            </div>
                    </div>-->
                        @endforeach
                    </div>
        </div>
    </section>
@endsection
