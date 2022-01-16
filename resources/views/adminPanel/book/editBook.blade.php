@extends('layouts.editPage')

@section('title', 'Uprava')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form">

            <h3>Upraviť knihu: {{ $book->title }}</h3>
            <hr>
            <form method="POST" action="/adminPanel/book/edit">
                @csrf

                <div class="form-group">
                    <label>ID:</label>
                    <input type="number" name='id' class="form-control" value="{{ $book->id}}" readonly required />
                </div>
                <div class="form-group">
                    <label>Názov:</label>
                    <input type="text" name='title' class="form-control" value="{{ $book->title}}" required />
                </div>

                @error('title')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Autor:</label>
                    <input type="text" name='autor' class="form-control" value="{{ $book->authorID}}" required />
                </div>

                @error('autor')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Vydavateľstvo:</label>
                    <input type="number" name='publisherID' class="form-control" value="{{ $book->publisherID}}"
                        required />
                </div>

                @error('publisherID')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Rating:</label>
                    <input type="number" step="0.01" min="0" max="5" name='rating' class="form-control"
                        value="{{ $book->rating }}" required />
                </div>

                @error('rating')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>ISBN:</label>
                    <input type="number" name='ISBN' class="form-control" value="{{ $book->ISBN}}" readonly required />
                </div>

                @error('ISBN')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Rok vydania:</label>
                    <input type="number" name='publication_year' class="form-control"
                        value="{{ $book->publication_year}}" required />
                </div>

                @error('rok_vydania')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Popis:</label>
                    <textarea name='description' rows="5" cols="60" required>
                        {{ $book->description}}
                        </textarea>
                </div>

                @error('description')
                <p class="error"> {{ $message }}</p>
                @enderror


                <div class="form-group">
                    <button type="submit" class="btnSubmit">Uložiť zmeny</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection