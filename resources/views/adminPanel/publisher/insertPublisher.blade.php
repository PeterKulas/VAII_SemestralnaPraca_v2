@extends('layouts.editPage')

@section('title', 'Vloženie vydavateľstva')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form">
            <h3>Vloženie nové vydavateľstvo</h3>
            <hr>
            <form method="POST" action="/adminPanel/publishers/insert">
                @csrf

                <div class=" form-group">
                    <input id="inputEditPublisherName" type="text" id="publisherName" name="publisherName"
                        class="form-control" placeholder="Názov vydavateľstva:" required>
                </div><br>

                @error('publisherName')
                <p class="error"> {{ $message }}</p>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btnSubmit">Vložiť vydavateľstvo</button>
                </div>
            </form>
        </div>
    </div>
</div>