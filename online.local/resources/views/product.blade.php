@extends('master')

@section('title', 'товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Цена: <b>{{ $product->price }} руб.</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>{{ $product->description }}</p>
    <a class="btn btn-success" href="{{ route('basket-add', $product) }}">Добавить в корзину</a>
@endsection