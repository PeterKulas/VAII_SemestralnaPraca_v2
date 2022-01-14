@extends('layouts.main')

@section('title', 'Katalog')

@section('content')
<div class="row g-0  justify-content-center">
    <div class="col-sm-3">
        <div class="form-group">
            <label for="">Vydavateľstvo:</label>
            <select name="" id="select-vydavatelstva" class="form-control">
                <option value="">Vyberte vydavateľsvo</option>
                @foreach($publishers as $publisher)
                <option value="{{ $publisher->publisherID}}"> {{ $publisher->publisher}} </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="card-deck row g-0" id="ajax-container">
</div>
@endsection