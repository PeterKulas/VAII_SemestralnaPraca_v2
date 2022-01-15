<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\User;
use App\Models\Book;
use App\Models\Publisher;

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
        
        $request->validate([
            'firstname' => ['required', 'min:2', "max:255"],
            'lastname' => ['required', 'min:2', "max:255"],
            'email' => ['required', 'email'] 
        ],
        [   
            'firstname.required'    => 'Nemôžes nechať prázdne pole.',
            'firstname.min'    => 'Meno musí obsahovať minimálne 2 znaky.',
            'firstname.max'    => 'Meno nesmie obsahovať viac ako 255 znakov',
            'lastname.required'    => 'Nemôžeš nechať prázdne pole.',
            'lastname.min'    => 'Priezvisko musí obsahovať minimálne 2 znaky.',
            'lastname.max'    => 'Priezvisko nesmie obsahovať viac ako 255 znakov',
            'email.required'    => 'Nemôžes nechať prázdne pole.',
            'email.email'    => 'Nesprávny formát emailovej adresy.',
        ]);

        $user = User::find($request->ID);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
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
        
        $request->validate([
            'title' => ['required', 'min:3', "max:255"],
            'autor' => ['required', "min:1"],
            'publisherID' => ['required', "min:1"],
            'rating' => ['required'],
            'publication_year' => ['required'],
            'description' => ['min:5', "max:5000"],
            ],
            [   
                'title.required' => 'Nemôžes nechať prázdne pole.',
                'title.min' => 'Názov knihy musí obsahovať minimálne 3 písmena.',
                'title.max' => 'Názov knihy nesmie byť dlhší ako 255 znakov.',
                'autor.required' => 'Nemôžes nechať prázdne pole.',
                'autor.min' => 'Id autora nesmie byt 0 a menej.',
                'publisherID.required' => 'Nemôžes nechať prázdne pole.',
                'publisherID.min' => 'Id autora nesmie byt 0 a menej.',
                'rating.required' => 'Nemôžes nechať prázdne pole.',
                'rating.min' => 'Rating knihy nesmie byt menší ako 0.',
                'rating.max' => 'Rating knihy nesmie byt viac ako 5.',
                'publication_year.required' => 'Nemôžes nechať prázdne pole.',
                'description.min' => 'Popis musí obshaovat aspoň 5 znakov.',
                'description.max' => 'Popis nemože presiahnuť dlžku 5000 znakov.',
            ]);

        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->authorID = $request->autor;
        $book->publisherID = $request->publisherID;
        $book->rating = $request->rating;
        $book->ISBN = $request->ISBN;
        $book->publication_year = $request->publication_year;
        $book->description = $request->description;
        $book->save();
        return redirect("adminPanel/books");
    }

    public function getInsertBookView() {
        return view("adminPanel/book/insertBook");
    }

    public function storeBook(Request $request) {     

        $request->validate([
        'title' => ['required', 'min:3', "max:255", "exists:books,title"],
        'authorID' => ['required', "min:1"],
        'publisherID' => ['required', "min:1"],
        'rating' => ['required', "min:0", "max:5"],
        'ISBN' => ['required', "min:10","exists:books, ISBN"],
        'publication_year' => ['required'],
        'description' => ['required', 'min:50', "max:5000"],
        'img' => ['required', 'min:3', "max:500"],
        ],
        [   
            'title.required' => 'Nemôžes nechať prázdne pole.',
            'title.min' => 'Názov knihy musí obsahovať minimálne 3 písmena.',
            'title.max' => 'Názov knihy nesmie byť dlhší ako 255 znakov.',
            'title.exists' => 'Kniha s týmto názvom existuje v databáze.',
            'authorID.required' => 'Nemôžes nechať prázdne pole.',
            'authorID.min' => 'Id autora nesmie byt 0 a menej.',
            'publisherID.required' => 'Nemôžes nechať prázdne pole.',
            'publisherID.min' => 'Id autora nesmie byt 0 a menej.',
            'rating.required' => 'Nemôžes nechať prázdne pole.',
            'rating.min' => 'Rating knihy nesmie byt menší ako 0.',
            'rating.max' => 'Rating knihy nesmie byt viac ako 5.',
            'ISBN.required' => 'Nemôžes nechať prázdne pole.',
            'ISBN.min' => 'ISBN musí obsahovať 8 číslic.',
            'ISBN.exists' => 'Dané ISBN už existuje v databáze.',
            'publication_year.required' => 'Nemôžes nechať prázdne pole.',
            'description.required' => 'Nemôžes nechať prázdne pole.',
            'description.min' => 'Popis musí obshaovat aspoň 50 znakov.',
            'description.max' => 'Popis nemože presiahnuť dlžku 5000 znakov.',
            'img.required' => 'Nemôžes nechať prázdne pole.',
            'img.min' => 'Cesta ku obrázku musí obshavať aspoň 3 znaky.',
            'img.max' => 'Cesta ku obrázku musí byť kratšia ako 500 znakov.',
        ]);
        
       $data = $request->input();
        
       $book = new Book;
       $book->authorID = $data['authorID'];
       $book->publisherID = $data['publisherID'];
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
    public function validateAuthor(Request $request)
    {
        $request->validate([
            'Firstname' => ['required', 'min:2', "max:255"],
            'Lastname' => ['required', 'min:2', "max:255"]
            ],
            [   
            'Firstname.required'    => 'Nemôžes nechať prázdne pole.',
            'Firstname.min'    => 'Meno nesmie obsahovať menej ako 2 znaky.',
            'Firstname.max'    => 'Meno nesmie obsahovať viac ako 8 znakov.',
            'Lastname.required'    => 'Nemôžes nechať prázdne pole.',
            'Lastname.min'    => 'Priezvisko nesmie obsahovať menej ako 2 znaky.',
            'Lastname.max'    => 'Priezvisko nesmie obsahovať viac ako 8 znakov.',
            ]);
    }

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

        $request->validate([
            'Firstname' => ['required', 'min:2', "max:255"],
            'Lastname' => ['required', 'min:2', "max:255"]
            ],
            [   
            'Firstname.required'    => 'Nemôžes nechať prázdne pole.',
            'Firstname.min'    => 'Meno nesmie obsahovať menej ako 2 znaky.',
            'Firstname.max'    => 'Meno nesmie obsahovať viac ako 8 znakov.',
            'Lastname.required'    => 'Nemôžes nechať prázdne pole.',
            'Lastname.min'    => 'Priezvisko nesmie obsahovať menej ako 2 znaky.',
            'Lastname.max'    => 'Priezvisko nesmie obsahovať viac ako 8 znakov.',
            ]);
            
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
        ],
        [   
        'Firstname.required'    => 'Nemôžes nechať prázdne pole.',
        'Firstname.min'    => 'Meno nesmie obsahovať menej ako 2 znaky.',
        'Firstname.max'    => 'Meno nesmie obsahovať viac ako 8 znakov.',
        'Lastname.required'    => 'Nemôžes nechať prázdne pole.',
        'Lastname.min'    => 'Priezvisko nesmie obsahovať menej ako 2 znaky.',
        'Lastname.max'    => 'Priezvisko nesmie obsahovať viac ako 8 znakov.',
        ]);

        $data = $request->input();

        $author = new Author;
        $author->firstname = $data['Firstname'];
        $author->lastname = $data['Lastname'];

        $author->save();
        return redirect("adminPanel/authors");
    }

    /*Publishers */

    public function getPublishers() {

    $publishers = Publisher::all();
        return view("adminPanel/publishers",["publishers" => $publishers]);
    }

    public function deletePublisher($id) {
        $publisher = Publisher::find($id);
        $publisher->delete();
        return redirect("adminPanel/publishers");
    }

    public function getPublisher($id) {
        $publisher = Publisher::find($id);
        return view("adminPanel/publisher/editPublisher",["publisher" => $publisher]);
    }

    public function editPublisher(Request $request) {
        $request->validate([
            'publisherName' => ['required', 'min:2', "max:255"],
            ],
            [   
                'publisherName.required'    => 'Nemôžes nechať prázdne pole.',
                'publisherName.min'    => 'Názov nesmie obsahovať menej ako 2 znaky.',
                'publisherName.max'    => 'Názov nesmie obsahovať viac ako 255 znakov.'
            ]);
            
        $publisher = Publisher::find($request->id);
        $publisher->publisher = $request->publisherName;
        $publisher->save();
        return redirect("adminPanel/publishers");
    }

    public function getInsertPublisherView() {
        return view("adminPanel/publisher/insertPublisher");
    }
    
    public function storePublisher(Request $request) {

        $request->validate([
            'publisherName' => ['required', 'min:2', "max:255",'unique:publishers,publisher'],
            ],
            [   
                'publisherName.required'    => 'Nemôžes nechať prázdne pole.',
                'publisherName.min'    => 'Názov nesmie obsahovať menej ako 2 znaky.',
                'publisherName.max'    => 'Názov nesmie obsahovať viac ako 8 znakov.',
                'publisherName.unique'    => 'Zadané vydavateľstvo už existuje v databáze.',
            ]);

        $data = $request->input();

        $publisher = new Publisher;
        $publisher->publisher = $data['publisherName'];
        $publisher->save();
        return redirect("adminPanel/publishers");
    }

}