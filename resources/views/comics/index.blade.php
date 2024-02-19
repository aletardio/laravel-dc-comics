@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div>
        <h5 class="jumbotron-heading">current series</h5>
    </div>
    <div class="boxes cont-comics">
        @foreach ($comics as $comic)
            <a class="link-offset-2 link-underline link-underline-opacity-0"
                href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <div class="comics-card">
                    <div class="img-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="text-comics text-light"> {{ $comic['series'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <button>
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ route('comics.create') }}">Add
                Comic</a>
        </button>
    </div>
@endsection
