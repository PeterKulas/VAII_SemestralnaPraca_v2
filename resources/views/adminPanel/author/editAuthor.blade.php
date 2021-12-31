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
                    <label for="id">ID:</label>
                    <input type="text" name='id' class="form-control" value="{{ $author->id}}" readonly required />
                </div>
                <div class="form-group">
                    <label for="Firstname">Meno:</label>
                    <input id="inputEditFirstName" type="text" id="Firstname" name="Firstname" class="form-control"
                        value="{{ $author->firstname}}">
                </div>
                <div class="form-group">
                    <label for="Lastname">Priezvisko:</label>
                    <input id="inputEditLastName" type="text" id="Lastname" name="Lastname" class="form-control"
                        value="{{ $author->lastname}}">
                </div><br>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Uložiť zmeny</button>
                </div>
            </form>
        </div>
    </div>
</div>