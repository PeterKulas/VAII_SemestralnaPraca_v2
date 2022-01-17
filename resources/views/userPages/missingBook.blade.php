@extends('layouts.main')

@section('title', 'Chyba vám kniha?')

@section('content')

<x-messages.missing-book />

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-4 login-form">
            <h3>Pridajte knihu</h3>
            <form method="POST" action="/missingbook">
                @csrf

                <div class="form-group">
                    <input type="text" name='title' class="form-control" placeholder="Názov knihy:" required />
                </div>

                @error('title')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <input type="text" name='autor' class="form-control" placeholder="Autor knihy:" required />
                </div>

                @error('autor')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btnSubmit">Odoslať</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection