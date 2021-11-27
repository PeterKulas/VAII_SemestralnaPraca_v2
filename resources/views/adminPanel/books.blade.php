@extends('layouts.adminPanel')

@section('title', 'Knihy')


@section('content')

<div class="col-sm-10 maincontent">
    <h2>Zoznam kníh</h2>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Meno</th>
                <th scope="col">Priezvisko</th>
                <th scope="col">Email</th>
                <th scope="col">Heslo</th>
                <th scope="col">Dátum registrácie</th>
                <th scope="col">Operacia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="operation edit"><i class="bi bi-pencil-fill"></i></a>
                    <a class="operation delete"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection