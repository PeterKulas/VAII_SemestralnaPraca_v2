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
                    <label>ID:</label>
                    <input class="form-control" type="text" id="ID" name="ID" value="{{ $user->id}}" readonly>
                </div>
                <div class="form-group">
                    <label>Meno:</label>
                    <input class="form-control" id="inputEditFirstName" type="text" name="firstname"
                        value="{{ $user->firstname}}">
                </div>

                @error('firstname')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Priezvisko:</label>
                    <input class="form-control" id="inputEditLastName" type="text" name="lastname"
                        value="{{ $user->lastname}}">
                </div>

                @error('lastname')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" id="inputEditEmail" type="email" name="email" value="{{ $user->email}}">
                </div>

                @error('email')
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