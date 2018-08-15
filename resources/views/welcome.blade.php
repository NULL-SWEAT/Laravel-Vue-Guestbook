<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>

        <title>Laravel Guestbook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="app" >

            <navbar></navbar>

            <div class="container">

                <transition name="router-fade" mode="out-in">
                    <router-view></router-view>
                </transition>

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
