@extends('layouts.main')

@section('title', 'Katalog')

@section('content')
<div class="card-deck row g-0">
    @foreach($books as $book)
    <div class="card">
        <img class="card-img-top img-catalog" src="{{ $book->img }}" alt="{{ $book->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <hr>
            <div class="cfooter">
                <p class="author">{{ $book->firstname }} {{ $book->lastname }}</p>
                <a href="#"><i class="bi bi-heart"></i></a>
            </div>

        </div>
    </div>
    @endforeach
</div>
@endsection