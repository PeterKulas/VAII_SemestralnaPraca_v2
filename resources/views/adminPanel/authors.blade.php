@extends('layouts.adminPanel')

@section('title', 'Autori')

@section('content')

<div class="col-sm-11 maincontent">
    <div class="header">
        <h2>Autori</h2>
        <i class="bi bi-plus-square"></i>
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
                <td scope="row">{{ $author->id }} </td>
                <td> {{ $author->firstname }} </td>
                <td> {{ $author->lastname }} </td>
                <td>
                    <a class="operation edit"><i class="bi bi-pencil-fill"></i></a>
                    <a class="operation delete" href="authors/delete/{{ $author->id }}"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection