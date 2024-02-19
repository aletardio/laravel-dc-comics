@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-white mt-4">
                    <h2 class="text-center">Add a new comic</h2>
                    <form action="{{ route('comics.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Insert the title of the comic" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="thumb">Image</label>
                            <input type="text" name="thumb" id="thumb" class="form-control"
                                placeholder="Insert the image of the comic" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Insert the price of the comic" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="series">Series</label>
                            <input type="text" name="series" id="series" class="form-control"
                                placeholder="Insert the series of the comic" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="10" rows="20" placeholder="Description"
                                class="form-control"></textarea>
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
