@extends('layouts.editPage')

@section('title', 'Uprava')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form">
            <h3>Upraviť používateľa {{ $user->firstname }} {{ $user->lastname }}</h3>
            <hr>
            <form method="POST" action="/adminPanel/user/edit">
                @csrf

                <div class="form-group">
                    <label for="ID">ID:</label>
                    <input class="form-control" type="text" id="ID" name="ID" value="{{ $user->id}}" readonly>
                </div>
                <div class="form-group">
                    <label for="Firstname">Meno:</label>
                    <input class="form-control" id="inputEditFirstName" type="text" id="Firstname" name="Firstname"
                        value="{{ $user->firstname}}">
                </div>
                <div class="form-group">
                    <label for="Lastname">Priezvisko:</label>
                    <input class="form-control" id="inputEditLastName" type="text" id="Lastname" name="Lastname"
                        value="{{ $user->lastname}}">
                </div>
                <div class="form-group">
                    <label for=" Email">Email:</label>
                    <input class="form-control" id="inputEditEmail" type="email" id="Email" name="Email"
                        value="{{ $user->email}}">
                </div><br>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Uložiť zmeny</button>
                </div>
            </form>
        </div>
    </div>
</div>