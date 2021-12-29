@extends('layouts.adminPanel')

@section('title', 'Knihy')


@section('content')

<div class="col-sm-11 maincontent">
    <h2>Zoznam kníh</h2>
    <hr>
    <div class="card-deck">

        @foreach($books as $book)

        <div class="card">
            <img class="card-img-top" src="../../images/homer.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">book</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        @endforeach

        <!-- <div class="card">
            <img class="card-img-top" src="../../images/homer.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../../images/homer.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://images.gr-assets.com/books/1358273780m/6148028.jpg"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div> -->
    </div>
</div>
@endsection