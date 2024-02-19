@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-white mt-4">
                    <h2 class="text-center">Aggiungi un nuovo fumetto</h2>
                    <form action="{{ route('comics.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="title">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Inserisci il titolo del fumetto" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="thumb">Immagine</label>
                            <input type="text" name="thumb" id="thumb" class="form-control"
                                placeholder="Inserisci l'immagine del fumetto" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="price">Prezzo</label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Inserisci il prezzo del fumetto" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="series">Serie</label>
                            <input type="text" name="series" id="series" class="form-control"
                                placeholder="Inserisci la serie del fumetto" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" cols="10" rows="20" placeholder="Descrizione"
                                class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
