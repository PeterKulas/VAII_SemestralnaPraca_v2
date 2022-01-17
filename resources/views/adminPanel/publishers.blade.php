@extends('layouts.adminPanel')

@section('title', 'Vydavateľstvá')

@section('content')
<div class="adminPanel-container">
    <x-sidebar />
    <div class="col-sm-11 maincontent">
        <div class="header">
            <h2>Vydavateľstvá</h2>
            <a href="publishers/insert"><i class="bi bi-plus-square"></i></a>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Názov</th>
                    <th scope="col">Operácia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publishers as $publisher)
                <tr>
                    <td> {{ $publisher->publisherID }} </td>
                    <td> {{ $publisher->publisher }} </td>
                    <td>
                        <a class="operation edit" href="publishers/edit/{{ $publisher->publisherID  }} "><i
                                class=" bi bi-pencil-fill"></i></a>
                        <a class="operation delete" href="publishers/delete/{{ $publisher->publisherID  }}"><i
                                class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection