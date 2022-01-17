@extends('layouts.adminPanel')

@section('title', 'Používatelia')


@section('content')
<div class="adminPanel-container">
    <x-sidebar />
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
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->firstname }} </td>
                    <td> {{ $user->lastname }} </td>
                    <td> {{ substr($user->password, 0, 10) }}... </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->registrationDate }}</td>
                    <td>
                        <a class="operation edit" href="users/edit/{{ $user->id }} "><i
                                class=" bi bi-pencil-fill"></i></a>
                        <a class="operation delete" href="users/delete/{{ $user->id }}"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection