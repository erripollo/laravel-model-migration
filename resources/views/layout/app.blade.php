<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Travel Agency')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        
    </head>
    <body>
        @include('layout.partials.header')
        
        <div class="jumbotron m-0">
            <img src="https://image.urlaubspiraten.de/1600/image/upload/v1603286919/mediavault_images/s5aunpmnf1bvinp3ko3l.jpg" alt="">
        </div>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

       @include('layout.partials.footer')

    </body>
</html>