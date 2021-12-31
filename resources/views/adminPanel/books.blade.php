@extends('layouts.adminPanel')

@section('title', 'Knihy')

@section('content')

<div class="col-sm-11 maincontent">
    <div class="header">
        <h2>Zoznam kníh</h2>
        <i class="bi bi-plus-square"></i>
    </div>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazov</th>
                <th scope="col">Rating</th>
                <th scope="col">ISBN</th>
                <th scope="col">Rok vydania</th>
                <th scope="col">Popis</th>
                <th scope="col">Obrázok</th>
                <th scope="col">Operácia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td scope="row">{{ $book->id }} </td>
                <td> {{ $book->title }} </td>
                <td> {{ $book->rating }} </td>
                <td> {{ $book->ISBN }} </td>
                <td> {{ $book->publication_year }} </td>
                <td> {{ $book->description }} </td>
                <td> <img src="{{ $book->img }}" alt="{{ $book->title }}"> </td>
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