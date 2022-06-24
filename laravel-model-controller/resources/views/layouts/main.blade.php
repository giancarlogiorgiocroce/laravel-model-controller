<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lar Model Contr | @yield('title')</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contacts') }}">Contacts</a></li>
            <li><a href="{{ route('movies') }}">Movies</a></li>
        </ul>
    </nav>

    @yield('content')

</body>
</html>
