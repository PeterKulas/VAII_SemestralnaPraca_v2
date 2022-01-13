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
                    <label for="id">ID:</label>
                    <input type="text" name='id' class="form-control" value="{{ $book->id}}" readonly required />
                </div>
                <div class="form-group">
                    <label for="title">Názov:</label>
                    <input type="text" name='title' class="form-control" value="{{ $book->title}}" required />
                </div>
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" name='autor' class="form-control" value="{{ $book->authorID}}" required />
                </div>
                <div class="form-group">
                    <label for="Rating">Vydavateľstvo:</label>
                    <input type="text" name='Rating' class="form-control" value="{{ $book->publisherID}}" required />
                </div>
                <div class="form-group">
                    <label for="Rating">Rating:</label>
                    <input type="text" name='Rating' class="form-control" value="{{ $book->rating}}" required />
                </div>
                <div class="form-group">
                    <label for="ISBN">ISBN:</label>
                    <input type="text" name='ISBN' class="form-control" value="{{ $book->ISBN}}" readonly required />
                </div>
                <div class="form-group">
                    <label for="rok_vydania">Rok vydania:</label>
                    <input type="text" name='rok_vydania' class="form-control" value="{{ $book->publication_year}}"
                        required />
                </div>
                <div class="form-group">
                    <label for="popis">Popis:</label>
                    <textarea name='popis' rows="5" cols="60">
                        {{ $book->description}}
                        </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Uložiť zmeny</button>
                </div>
            </form>
        </div>
    </div>
</div>