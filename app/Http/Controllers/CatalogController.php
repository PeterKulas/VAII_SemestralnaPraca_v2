<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;

class CatalogController extends Controller
{
   public function getCatalogView() {
    $books = DB::table('books')->join('authors', "books.authorID", "=", "authors.id" )->get();
    return view('userPages/catalog',["books" => $books]);
   }
}