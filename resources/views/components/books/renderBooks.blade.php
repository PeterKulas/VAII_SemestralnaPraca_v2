<div class="card">
    <img class="card-img-top img-catalog" src="{{ $book->img }}" alt="{{ $book->title }}">
    <div class="card-body">
        <a href="catalog/singleBook/{{ $book->id }}">
            <h5 class="card-title">{{ $book->title }}</h5>
        </a>
        <hr>
        <div class="cfooter">
            <p class="author">{{ $book->firstname }} {{ $book->lastname }}</p>
            <a href="#"><i class="bi bi-heart"></i></a>
        </div>
    </div>
</div>