<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GrabTaxi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <p id="nav_logo">GrabTaxi</p>
        <nav>
            <ul class="nav_bar">
                <li><a href="/">Home</a></li>
                <li><a href="/edit">Edit</a></li>
            </ul>
        </nav>
    </header>
        @yield('content')

        <footer>
            Copyright 2020 GrabTaxi
        </footer>
    </body>

    
</html>
