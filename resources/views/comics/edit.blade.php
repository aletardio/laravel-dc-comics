@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-white mt-4">
                    <h2 class="text-center">Edit a comic</h2>
                    <form action="{{ route('comics.update', $comic->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Insert the title of the comic" value="{{ $comic->title }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="thumb">Image</label>
                            <input type="text" name="thumb" id="thumb" class="form-control"
                                placeholder="Insert the image of the comic" value="{{ $comic->thumb }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Insert the price of the comic" value="{{ $comic->price }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="series">Series</label>
                            <input type="text" name="series" id="series" class="form-control"
                                placeholder="Insert the series of the comic" value="{{ $comic->series }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control"
                                placeholder="Insert the series of the comic" value="{{ $comic->type }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="sale_date">Date</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control"
                                placeholder="Insert the date of the comic" value="{{ $comic->sale_date }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="artists">Artist</label>
                            <input type="text" name="artists" id="artists" class="form-control"
                                placeholder="Insert the artist of the comic" value="{{ $comic->artists }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="writers">Writer</label>
                            <input type="text" name="writers" id="writers" class="form-control"
                                placeholder="Insert the writer of the comic" value="{{ $comic->writers }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="10" rows="20" placeholder="Description"
                                class="form-control">{{ $comic->description }}"</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-submit" type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
