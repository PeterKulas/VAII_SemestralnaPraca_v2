@extends('layouts.editPage')

@section('title', 'Uprava')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form">

            <h3>Upraviť autora {{ $author->firstname }} {{ $author->lastname }}</h3>
            <hr>
            <form method="POST" action="/adminPanel/author/edit">
                @csrf

                <div class="form-group">
                    <label>ID:</label>
                    <input type="text" name='id' class="form-control" value="{{ $author->id_author}}" readonly
                        required />
                </div>
                <div class="form-group">
                    <label>Meno:</label>
                    <input id="inputEditFirstName" type="text" name="Firstname" class="form-control"
                        value="{{ $author->firstname}}">
                </div>

                @error('Firstname')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Priezvisko:</label>
                    <input id="inputEditLastName" type="text" name="Lastname" class="form-control"
                        value="{{ $author->lastname}}">
                </div>

                @error('Lastname')
                <p class="error"> {{ $message }}</p>
                @enderror

                <br>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Uložiť zmeny</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection