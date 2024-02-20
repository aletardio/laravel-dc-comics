@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="text-white mt-4">
                    <h2 class="text-center">Edit a comic</h2>
                    <form action="{{ route('comics.update', $comic->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Insert the title of the comic" value="{{ old('title') ?? $comic->title }}"
                                required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="thumb">Image</label>
                            <input type="text" name="thumb" id="thumb" class="form-control"
                                placeholder="Insert the image of the comic" value="{{ old('thumb') ?? $comic->thumb }}"
                                required>
                            @error('thumb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Insert the price of the comic" value="{{ old('price') ?? $comic->price }}"
                                required>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="series">Series</label>
                            <input type="text" name="series" id="series" class="form-control"
                                placeholder="Insert the series of the comic" value="{{ old('series') ?? $comic->series }}"
                                required>
                            @error('series')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control"
                                placeholder="Insert the series of the comic" value="{{ old('type') ?? $comic->type }}"
                                required>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="sale_date">Date</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control"
                                placeholder="Insert the date of the comic"
                                value="{{ old('sale_date') ?? $comic->sale_date }}" required>
                            @error('sale_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="artists">Artist</label>
                            <input type="text" name="artists" id="artists" class="form-control"
                                placeholder="Insert the artist of the comic"
                                value="{{ old('artists') ?? $comic->artists }}" required>
                            @error('artists')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="writers">Writer</label>
                            <input type="text" name="writers" id="writers" class="form-control"
                                placeholder="Insert the writer of the comic"
                                value="{{ old('writers') ?? $comic->writers }}" required>
                            @error('writers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="10" rows="20" placeholder="Description"
                                class="form-control">{{ old('description') ?? $comic->description }}"</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn-submit" type="submit">
                                <i class="fa-solid fa-check"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
