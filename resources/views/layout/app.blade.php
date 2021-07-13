<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Travel Agency')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        
    </head>
    <body>
        <header>
            <div class="container">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Travel Agency</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav w-100 d-flex justify-content-end">
                        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link {{Route::currentRouteName() === 'travels' ? 'active' : '' }}" href="{{route('travels')}}">Travels</a>
                        <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : '' }}" href="{{route('about')}}">About</a>
                        <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="{{route('contacts')}}">Contacts</a>
                      </div>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer>
            <div class="container">
                Site Footer
            </div>
        </footer>
    </body>
</html>