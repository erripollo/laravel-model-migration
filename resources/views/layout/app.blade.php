<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', Travel Agency)</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
        <header>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('travels')}}">Travels</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contacts')}}"></a>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            Site Footer
        </footer>
    </body>
</html>