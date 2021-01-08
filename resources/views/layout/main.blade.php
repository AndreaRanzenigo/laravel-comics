<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-comics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!--Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    </head>
    <body>
        {{-- Overall --}}
        @include('partials.overall')

        {{-- Header --}}
        @include('partials.header')

        {{-- Jumbotron --}}
        @include('partials.jumbotron')
        
        {{-- Main --}}
        @yield('content')

        {{-- Footer --}}
        <footer class="main-footer">
            MAIN FOOTER
        </footer>
    </body>
</html>
