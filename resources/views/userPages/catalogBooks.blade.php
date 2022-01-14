@foreach($books as $book)
<x-books.renderBooks :book="$book" />
@endforeach