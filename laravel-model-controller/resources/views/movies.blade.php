@extends('layouts.main')

@section('title', 'Film')

@section('content')
    <h1>Movies</h1>

    <div class="card">
        @foreach ($movies as $movie)
            <ul>
                <li>Titolo -
                    <strong>{{$movie->title}}</strong>
                </li>
                <li>Titolo originale -
                    <strong>{{$movie->original_title}}</strong>
                </li>
                <li>Nazione di produzione -
                    <strong>{{$movie->nationality}}</strong>
                </li>
                <li>Data di rilascio -
                    <strong>{{$movie->date}}</strong>
                </li>
                <li>Voto -
                    <strong>{{$movie->vote}}</strong>
                </li>
            </ul>
        @endforeach
    </div>

@endsection
