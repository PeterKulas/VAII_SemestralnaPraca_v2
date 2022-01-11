<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingBook;

class MissingBookController extends Controller
{
    public function getView() {
        return view("userPages/missingBook");
    }

    public function getMissingBooks() {
        $missingBooks = MissingBook::all();
        return view("adminPanel/missingBooks",["missingBooks" => $missingBooks]);
    }

    public function deleteMissingBook($id) {
        $missingBook = MissingBook::find($id);
        $missingBook->delete();
        return redirect("adminPanel/missingBooks");
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
        
       $book = new MissingBook;
       $book->title = $data['title'];
       $book->author = $data['author'];

       $book->save();
       session()->flash('success', 'Žiadosť evidujeme, pokúsime sa pridať knihu čo najskôr!');

       return view("userPages/missingBook");
    }
}