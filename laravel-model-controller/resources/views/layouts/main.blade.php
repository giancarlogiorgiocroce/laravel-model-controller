<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    <title>Laravel Mod & Ctrl | @yield('title')</title>
</head>
<body>

    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contacts') }}">Contacts</a></li>
                <li><a href="{{ route('movies') }}">Movies</a></li>
            </ul>
        </nav>

        @yield('content')
    </div>

</body>
</html>
