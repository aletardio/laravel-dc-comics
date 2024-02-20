@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="comic-card">
        <img class="card" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
    <div class="line-blue"></div>
    <div class="container-fluid contents">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="text-uppercase py-4">
                        <h3>{{ $comic['title'] }} </h3>
                    </div>
                    <div class="row availability ">
                        <div class="col-9">
                            <div class="d-flex justify-content-between">
                                <div class="py-3 px-2">
                                    <span class="text-green">
                                        U.S. Price:
                                    </span>
                                    <span class="text-white fw-bold">
                                        {{ $comic['price'] }}
                                    </span>
                                </div>
                                <div class="text-green fw-bold text-uppercase py-3">
                                    Available
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn-available text-center text-white border-start py-3">
                                Check Availability
                            </div>
                        </div>
                    </div>
                    <div class="py-2 lh-base">
                        {{ $comic['description'] }}
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <button class="btn-edit">
                                <i class="fa-solid fa-pencil"></i>
                                <a class="link-offset-2 link-underline link-underline-opacity-0"
                                    href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit
                                    Comic</a>
                            </button>
                        </div>
                        <div>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST"
                                onsubmit="return confirm('Sicuro di voler cancellare questo fumetto?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete Comic
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-5 py-4 d-flex flex-column justify-content-center">
                    <div class="text-uppercase text-end fw-bold txt-adv">
                        Advertisement
                    </div>
                    <div class="d-flex justify-content-center">
                        <img class="adv" src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
