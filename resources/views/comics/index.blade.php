@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div>
        <h5 class="jumbotron-heading">serie attuale</h5>
    </div>
    <div class="boxes cont-comics">
        @foreach ($comics as $comic)
            <a class="link-offset-2 link-underline link-underline-opacity-0"
                href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <div class="comics-card">
                    <div class="img-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="text-comics text-light"> {{ $comic['title'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <button>
            <i class="fa-solid fa-plus"></i>
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ route('comics.create') }}">Aggiungi
                Fumetto</a>
        </button>
    </div>
@endsection
