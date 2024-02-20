@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div>
        <h5 class="jumbotron-heading">serie attuale</h5>
    </div>
    <h2 class="text-center text-white fw-bold pt-4">
        DC COMICS
    </h2>
    <div class="d-flex justify-content-center">
        <button>
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ route('comics.index') }}">Scopri di
                più</a>
        </button>
    </div>
@endsection
