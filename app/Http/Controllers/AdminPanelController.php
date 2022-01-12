<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\User;
use App\Models\Book;

class AdminPanelController extends Controller
{
    /*USERS*/
    public function getUsers() {
        $users = User::all();
        return view("adminPanel/users",["users" => $users]);
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect("adminPanel/users");
    }

    public function getUser($id) {
        $user = User::find($id);
        return view("adminPanel/user/editUser",["user" => $user]);
    }

    public function editUser(Request $request) {
        $user = User::find($request->ID);
        $user->firstname = $request->Firstname;
        $user->lastname = $request->Lastname;
        $user->email = $request->Email;
        $user->save();
        return redirect("adminPanel/users");
    }
    
    /*BOOKS*/
    public function getBooks() {
       $books = DB::table('books')->join('authors', "authors.id_author", "=", "books.authorID" )->get();
        return view("adminPanel/books",["books" => $books]);
    }

    public function deleteBook($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect("adminPanel/books");
    }

    public function getBook($id) {
        $book = Book::find($id);
        return view("adminPanel/book/editBook",["book" => $book]);
    }

    public function editBook(Request $request) {
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->authorID = $request->autor;
        $book->rating = $request->Rating;
        $book->ISBN = $request->ISBN;
        $book->publication_year = $request->rok_vydania;
        $book->description = $request->popis;
        $book->save();
        return redirect("adminPanel/books");
    }

    public function getInsertBookView() {
        return view("adminPanel/book/insertBook");
    }

    public function storeBook(Request $request) {     

        //TODO Validation
        
        /*
        $request->validate([
        'Firstname' => ['required', 'min:2', "max:255"],
        'Lastname' => ['required', 'min:2', "max:255"]
        ]);
        */
       $data = $request->input();
        
       $book = new Book;
       $book->authorID = $data['authorID'];
       $book->rating = $data['rating'];
       $book->isbn = $data['ISBN'];
       $book->publication_year = $data['publication_year'];
       $book->title = $data['title'];
       $book->description = $data['description'];
       $book->img = $data['img'];
       $book->save();
       
        return redirect("adminPanel/books");
    }

    /*AUTHORS*/
    public function getAuthors() {
        $authors = Author::all();
        return view("adminPanel/authors",["authors" => $authors]);
    }

    public function deleteAuthor($id) {
        $author = Author::find($id);
        $author->delete();
        return redirect("adminPanel/authors");
    }

    public function getAuthor($id) {
        $author = Author::find($id);
        return view("adminPanel/author/editAuthor",["author" => $author]);
    }

    public function editAuthor(Request $request) {
        $author = Author::find($request->id);
        $author->firstname = $request->Firstname;
        $author->lastname = $request->Lastname;
        $author->save();
        return redirect("adminPanel/authors");
    }

    public function getInsertAuthorView() {
        return view("adminPanel/author/insertAuthor");
    }

    public function storeAuthor(Request $request) {     
        
        $request->validate([
        'Firstname' => ['required', 'min:2', "max:255"],
        'Lastname' => ['required', 'min:2', "max:255"]
        ]);
        
       $data = $request->input();
    
       $author = new Author;
       $author->firstname = $data['Firstname'];
       $author->lastname = $data['Lastname'];

       
       $author->save();
       
        return redirect("adminPanel/authors");
    }
}