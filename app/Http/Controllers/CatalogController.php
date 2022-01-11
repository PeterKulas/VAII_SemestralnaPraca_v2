<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class CatalogController extends Controller
{
   public function getCatalogView() {
    $books = Book::all();
       return view('userPages/catalog',["books" => $books]);
   }
}