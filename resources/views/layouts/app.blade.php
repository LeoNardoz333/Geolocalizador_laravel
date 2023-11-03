<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <title>Login Administradores</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @vite(['resources/js/app.js'])
        <style></style>
    </head>
    <body>
        @include('partials.navegacionUsuarios')
        @yield('container')
    </body>
</html>
