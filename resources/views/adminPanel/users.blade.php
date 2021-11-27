@extends('layouts.adminPanel')

@section('title', 'Pouzivatelia')


@section('content')

<div class="col-sm-11 maincontent">
    <h2>Používatelia</h2>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Meno</th>
                <th scope="col">Priezvisko</th>
                <th scope="col">Heslo</th>
                <th scope="col">Email</th>
                <th scope="col">Dátum registrácie</th>
                <th scope="col">Operacia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td scope="row">{{ $user->id }} </td>
                <td> {{ $user->firstname }} </td>
                <td> {{ $user->lastname }} </td>
                <td> {{ $user->password }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->registrationDate }}</td>
                <td>
                    <a class="operation edit"><i class="bi bi-pencil-fill"></i></a>
                    <a class="operation delete"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection