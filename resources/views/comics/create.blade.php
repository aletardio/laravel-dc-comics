@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger my-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="text-white mt-4">
                    <h2 class="text-center">Aggiungi un nuovo fumetto</h2>
                    <form action="{{ route('comics.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="title">Titolo</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo"
                                required value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="thumb">Immagine</label>
                            <input type="text" name="thumb" id="thumb"
                                class="form-control @error('thumb') is-invalid @enderror"
                                placeholder="Inserisci il link dell'immagine" required {{ old('thumb') }}>
                            @error('thumb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="price">Prezzo</label>
                            <input type="text" name="price" id="price"
                                class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo"
                                required value={{ old('price') }}>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="series">Serie</label>
                            <input type="text" name="series" id="series"
                                class="form-control @error('text') is-invalid @enderror" placeholder="Inserisci la serie"
                                required {{ old('series') }}>
                            @error('series')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="type">Tipo</label>
                            <input type="text" name="type" id="type"
                                class="form-control @error('type') is-invalid @enderror" placeholder="Inserisci il tipo"
                                required {{ old('type') }}>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="sale_date">Data di uscita</label>
                            <input type="text" name="sale_date" id="sale_date"
                                class="form-control @error('sale_date') is-invalid @enderror"
                                placeholder="Inserisci la data di uscita" required value="{{ old('sale_date') }}">
                            @error('sale_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="artists">Artista</label>
                            <input type="text" name="artists" id="artists"
                                class="form-control @error('artists') is-invalid @enderror"
                                placeholder="Inserisci l'artista" required {{ old('artists') }}>
                            @error('artists')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="writers">Autore</label>
                            <input type="text" name="writers" id="writers"
                                class="form-control @error('writers') is-invalid @enderror" placeholder="Inserisci l'autore"
                                required {{ old('writers') }}>
                            @error('writers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" cols="10" rows="20" placeholder="Descrizione"
                                class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn-submit" type="submit">
                                Salva
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
