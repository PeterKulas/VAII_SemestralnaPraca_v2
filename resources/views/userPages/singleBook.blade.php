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
            <form id="review-form" method="Post">
                @csrf
                <div class=" form-group">
                    <input type="hidden" value="{{ $book->id }}" id="bookID" name="bookID" readonly />
                    <input type="hidden" value="{{ auth()->user()->id }}" id="userID" name="userID" readonly>
                    <input type="hidden" value="{{ auth()->user()->firstname }}" id="reviewFirstname" name="reviewFirstname" readonly>
                    <input type="hidden" value="{{ auth()->user()->lastname }}" id="reviewLastname" name="reviewLastname" readonly>
                    <textarea class="form-control" name="reviewArea" id="reviewArea" rows="3"
                        placeholder="Napíš recenziu.." required></textarea>
                </div>
                <button id="submit-button" type="button" class="btn btn-light">Odoslať</button>
            </form>
        </div>

        <div class="row">
            <h2 class="review-header">Recenzie:</h2>
            <div id="review-container">
                @foreach($reviews as $review)
                <div class="review">
                    <p> {{ $review->reviewText }} </p>
                    <label> {{ $review->firstname }} {{ $review->lastname }}</label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
</div>
@endsection