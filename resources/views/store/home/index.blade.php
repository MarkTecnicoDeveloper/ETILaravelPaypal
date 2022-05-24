@extends('store.templates.master')

@section('title', 'Home Page Laravel PayPal')

@section('content')

    <h1 class="uppercase text-gray-800 text-3xl my-7 font-bold">Lançamentos mais recentes:</h1>
    
    <section class="grid grid-cols-2 gap-7 md:grid-cols-4 sm:grid-cols-3">
        @foreach ($products as $product)
            <article class="flex flex-col justify-center text-center">
                <img src="{{ url("assets/img/temp/{$product->image}") }}" alt="{{ $product->name }}">
                <h1 class="uppercase my-4 text-xl">{{ $product->name }}</h1>
                <a href="{{ route('add.cart', $product->id) }}" class="bg-gray-800 py-3 text-white hover:bg-gray-900 transition-all">
                    Adicionar no Carrinho
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>          
            </article>
        @endforeach
    </section>

@endsection