<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;

class CatalogController extends Controller
{
   public function getCatalogView() {
      $books = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->get();
    return view('userPages/catalog',["books" => $books]);
   }

   public function getSingleBookView($id) {
      $book = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->find($id);
      return view('userPages/singleBook', ["book" => $book]);
   }
}