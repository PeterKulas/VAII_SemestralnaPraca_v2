@extends('layouts.adminPanel')

@section('title', 'Používatelia')

@section('content')


<h2>Používatelia</h2>
<hr>

<div class="col-sm-11 maincontent">
    <form action="/adminPanel/user/edit" method="POST">

        @csrf
        <label for="ID">ID:</label>
        <input type="text" id="ID" name="ID" value="{{ $user->id}}" readonly><br>
        <label for="Firstname">Meno:</label>
        <input id="inputEditFirstName" type="text" id="Firstname" name="Firstname" value="{{ $user->firstname}}"><br>
        <label for="Lastname">Priezvisko:</label>
        <input id="inputEditLastName" type="text" id="Lastname" name="Lastname" value="{{ $user->lastname}}"><br>
        <label for=" Email">Email:</label>
        <input id="inputEditEmail" type="email" id="Email" name="Email" value="{{ $user->email}}"><br>
        <button class="btn btn-primary" type="submit"> Editovat</button>
    </form>
</div>

@endsection