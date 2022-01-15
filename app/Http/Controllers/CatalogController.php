<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Review;
use finfo;
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
         
         if($request->selectedOption == null) {
            $books = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->get();
         }
         
         $view = view('userPages/catalogBooks',["books" => $books])->render();
         return response()->json(['html'=>$view, 'option' => $request->selectedOption]);
      }  
   }

   public function getSingleBookView($id) {
      $book = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->find($id);
      $reviews = DB::table('reviews')->join('users', "users.id", "=", "reviews.userID")->join('books', "books.id", "=", "reviews.bookID")
      ->where('reviews.bookID', '=', $id)->orderBy('reviewID', 'desc')->get();
      return view('userPages/singleBook', ["book" => $book, "reviews" => $reviews]);
   }

   public function storeReview(Request $request) {
      
      if($request->ajax()) {  
      $review = new Review;
      $review->bookID = $request->bookID;
      $review->userID = $request->userID;
      $review->reviewText = $request->reviewText;
      $review->save();
         
      return response()->json($request);   
     }   
   }
}