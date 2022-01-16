@extends('layouts.editPage')

@section('title', 'Uprava')

@section('content')

<div class="container login-container ">
    <div class="row justify-content-center">
        <div class="col-md-6 login-form">
            <h3>Upraviť vydavateľstvo {{ $publisher->publisher }}</h3>
            <hr>
            <form method="POST" action="/adminPanel/publisher/edit">
                @csrf

                <div class="form-group">
                    <label>ID:</label>
                    <input type="text" name='id' class="form-control" value="{{ $publisher->publisherID}}" readonly
                        required />
                </div>
                <div class="form-group">
                    <label>Názov:</label>
                    <input id="inputEditPublisherName" type="text" name="publisherName" class="form-control"
                        value="{{ $publisher->publisher}}">
                </div>

                @error('publisherName')
                <p class="error"> {{ $message }}</p>
                @enderror

                <br>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Uložiť zmeny</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection