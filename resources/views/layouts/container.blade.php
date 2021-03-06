<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ config('app.name', 'BabangCreator') }}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.message')
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
