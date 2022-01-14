<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;
use Symfony\Component\Console\Input\Input;

class CatalogController extends Controller
{
   public function getCatalogView() {
      $books = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->get();
      $publishers = Publisher::all();
      return view('userPages/catalog',["books" => $books, "publishers" => $publishers]);
   }

   public function getCatalogSelected(Request $request) {

      if($request->ajax()) {
         $books = Book::where('publisherID','=',$request->selectedOption)->join('authors', "authors.id_author", "=", "books.authorID" )->get();
         $publishers = Publisher::all();
         
         if($request->selectedOption == null) {
            $books = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->get();
         }
         
         $view = view('userPages/catalogBooks',["books" => $books, "publishers" => $publishers])->render();
         return response()->json(['html'=>$view, 'option' => $request->selectedOption]);
      }  
   }

   public function getSingleBookView($id) {
      $book = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->find($id);
      return view('userPages/singleBook', ["book" => $book]);
   }

}