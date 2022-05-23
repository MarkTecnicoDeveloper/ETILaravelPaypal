@extends('store.templates.master')

@section('title', 'Home Page Laravel PayPal')

@section('content')

    <h1 class="uppercase text-gray-800 text-3xl my-7 font-bold">Lançamentos mais recentes:</h1>
    
    <section class="grid grid-cols-2 gap-7 md:grid-cols-4 sm:grid-cols-3">
        @for ($i = 0; $i < 10; $i++)
            <article class="flex flex-col justify-center text-center">
                <img src="{{ url('assets/img/temp/batman.jpg') }}" alt="batman">
                <h1 class="uppercase my-4 text-xl">Title my Product</h1>
                <a href="#" class="bg-gray-800 py-3 text-white hover:bg-gray-900 transition-all">
                    Adicionar no Carrinho
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>          
            </article>
            <article class="flex flex-col justify-center text-center">
                <img src="{{ url('assets/img/temp/thor.jpg') }}" alt="thor">
                <h1 class="uppercase my-4 text-xl">Title my Product</h1>
                <a href="#" class="bg-gray-800 py-3 text-white hover:bg-gray-900 transition-all">
                    Adicionar no Carrinho
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>          
            </article>
            <article class="flex flex-col justify-center text-center">
                <img src="{{ url('assets/img/temp/matrix.jpg') }}" alt="matrix">
                <h1 class="uppercase my-4 text-xl">Title my Product</h1>
                <a href="#" class="bg-gray-800 py-3 text-white hover:bg-gray-900 transition-all">
                    Adicionar no Carrinho
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>          
            </article>
        @endfor
    </section>

@endsection