<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <title>@yield('title','Curso Laravel Paypal')</title>

        <!-- Normalize Styles -->
        <link rel="stylesheet" href="{{ url('assets/css/normalize.css') }}">
        
        <!-- Font Awesome-->
        <link rel="stylesheet" href="{{ url('assets/css/font-awesome/css/all.min.css') }}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Personal Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ url('assets/img/etifavicon.png') }}">

    </head>
    <body>

        @include('store.templates.components.header')

        @yield('content')

        @stack('headerScripts')
    </body>
</html>