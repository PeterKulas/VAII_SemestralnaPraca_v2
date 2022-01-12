@extends('layouts.main')

@section('title', 'Detail')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="singleBook-container">
                <div class="col-sm-2">
                    <img class="singleBook-img" src="{{ $book->img }}" alt=" {{ $book->title }}">
                </div>
                <div class="col-sm-3">
                    <ul class="singleBook-list">
                        <li>
                            <div class="title"> Nazov:</div>
                            <p>{{ $book->title }}</p>
                        </li>
                        <li>
                            <div class="title"> Autor: </div>
                            <p>{{ $book->firstname }} {{ $book->lastname }}</p>
                        </li>
                        <li>
                            <div class="title"> Rating:</div>
                            <p>{{ $book->rating }}</p>
                        </li>
                        <li>
                            <div class="title"> ISBN: </div>
                            <p>{{ $book->ISBN }}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-7">
                    <p>{{ $book->description }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Napíš recenziu.." required></textarea>
                </div>
            </form>
        </div>

        <div class="row">
            <h2>Recenzie:</h2>
        </div>
    </div>
</div>
@endsection