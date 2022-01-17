@extends('layouts.adminPanel')

@section('title', 'Autori')

@section('content')
<div class="adminPanel-container">
    <x-sidebar />
    <div class="col-sm-11 maincontent">
        <div class="header">
            <h2>Autori</h2>
            <a href="authors/insert"><i class="bi bi-plus-square"></i></a>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Meno</th>
                    <th scope="col">Priezvisko</th>
                    <th scope="col">Operacia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                <tr>
                    <td> {{ $author->id_author }} </td>
                    <td> {{ $author->firstname }} </td>
                    <td> {{ $author->lastname }} </td>
                    <td>
                        <a class="operation edit" href="authors/edit/{{ $author->id_author }} "><i
                                class=" bi bi-pencil-fill"></i></a>
                        <a class="operation delete" href="authors/delete/{{ $author->id_author }}"><i
                                class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection