<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>@yield('title')</title>
            <link rel="stylesheet" href="{{url('css/style.css')}}">
        </head>

        <body class="antialiased">
            <div class="relative py-4 px-6">
                <nav>
                    <a href="{{ route('home.welcome') }}">Home</a>
                    <a href="{{ route('home.about') }}">About</a>
                    <a href="{{ route('home.contact') }}">Contact</a>
                    <a href="{{ route('computers.index') }}">Computers</a>
                    <a href="{{ route('computers.create') }}">New Computer</a>
                </nav>
            </div>
            <div>
                @yield('content')
            </div>
        </body>
    </html>
