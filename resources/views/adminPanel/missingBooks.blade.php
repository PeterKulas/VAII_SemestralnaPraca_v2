@extends('layouts.adminPanel')

@section('title', 'Chýbajuce knihy')

@section('content')

<div class="col-sm-11 maincontent">
    <div class="header">
        <h2>Požiadavky používateľov</h2>
    </div>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Názov knihy</th>
                <th scope="col">Autor</th>
                <th scope="col">Odstrániť</th>
            </tr>
        </thead>
        <tbody>
            @foreach($missingBooks as $missingBook)
            <tr>
                <td> {{ $missingBook->id }} </td>
                <td> {{ $missingBook->title }} </td>
                <td> {{ $missingBook->author }} </td>
                <td>
                    <a class="operation delete" href="missingBooks/delete/{{ $missingBook->id }}"><i
                            class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection