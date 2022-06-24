{{--
    1 - Create un nuovo progetto Laravel 7
    2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
    3 - Importate nel vostro database la tabella movies in allegato
    4 - inserite le vostre credenziali per il database nel file .env
    5 - Create un model Movie
    php artisan make:model Movie
    6 - Create un controller che gestirà le rotte Home - Chi siamo - Contatti
    php artisan make:controller PageController (questo controller gestirà le pagine statiche - Home - Chi siamo - Contatti)
    7 - Create un controller che gestirà la rotta /movies
    php artisan make:controller MovieController
    8 - All’interno della funzione index() do MovieController, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
    BONUS:
    Stilare il layout nei dettagli con Sass
--}}

@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>
@endsection
