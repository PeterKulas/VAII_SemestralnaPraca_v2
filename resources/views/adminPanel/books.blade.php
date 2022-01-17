@extends('layouts.adminPanel')

@section('title', 'Knihy')

@section('content')
<div class="adminPanel-container">
    <x-sidebar />
    <div class="col-sm-11 maincontent">
        <div class="header">
            <h2>Zoznam kníh</h2>
            <a href="books/insert"><i class="bi bi-plus-square"></i></a>
        </div>
        <hr>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazov</th>
                    <th scope="col">Autor</th>
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
                    <td> {{ $book->id }} </td>
                    <td> {{ $book->title }} </td>
                    <td> {{ $book->firstname }} {{ $book->lastname }} </td>
                    <td> {{ $book->rating }} </td>
                    <td> {{ $book->ISBN }} </td>
                    <td> {{ $book->publication_year }} </td>
                    <td> {{ substr( $book->description, 0, 300) }}... </td>
                    <td> <img src="{{ $book->img }}" alt="{{ $book->title }}"> </td>
                    <td>
                        <a class="operation edit" href="books/edit/{{ $book->id }} "><i
                                class=" bi bi-pencil-fill"></i></a>
                        <a class="operation delete" href="books/delete/{{ $book->id }}"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection