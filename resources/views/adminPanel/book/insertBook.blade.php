@extends('layouts.editPage')

@section('title', 'Uprava')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form">
            <h3>Vloženie novej knihy</h3>
            <hr>
            <form method="POST" action="/adminPanel/books/insert">
                @csrf

                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Názov:" required>
                </div><br>

                @error('title')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class=" form-group">
                    <input type="text" id="authorID" name="authorID" class="form-control" placeholder="ID autora:"
                        required>
                </div><br>

                @error('authorID')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <input type="text" id="rating" name="rating" class="form-control" placeholder="Hodnotenie:"
                        required>
                </div><br>

                @error('rating')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <input type="text" id="ISBN" name="ISBN" class="form-control" placeholder="ISBN:" required>
                </div><br>

                @error('ISBN')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <input type="text" id="publication_year" name="publication_year" class="form-control"
                        placeholder="Rok vydania:" required>
                </div><br>

                @error('publication_year')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <textarea name='description' placeholder="Popis: " rows=" 5" cols="60"> </textarea>
                </div><br>

                @error('description')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <input type="text" id="img" name="img" class="form-control" placeholder="Adresa obrázka:" required>
                </div><br>

                @error('description')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btnSubmit">Vložiť knihu</button>
                </div>
            </form>
        </div>
    </div>
</div>