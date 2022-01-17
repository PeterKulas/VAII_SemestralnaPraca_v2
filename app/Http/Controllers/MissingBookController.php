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

        $request->validate([
        'title' => ['required', 'min:3', "max:255"],
        'autor' => ['required', 'min:3', "max:255"]
        ],
        [   
            'title.required'    => 'Nemôžes nechať prázdne pole.',
            'title.min'    => 'Názov knihy musí obsahovať minimálne 3 písmena.',
            'title.max'    => 'Názov knihy nesmie byť dlhší ako 255 znakov.',
            'autor.required'    => 'Nemôžes nechať prázdne pole.',
            'autor.min'    => 'Meno autora obsahovať minimálne 3 písmena.',
            'autor.max'    => 'Meno autora nesmie byť dlhší ako 255 znakov.',
        ]);
        
       $data = $request->input();
        
       $book = new MissingBook;
       $book->title = $data['title'];
       $book->author = $data['autor'];

       $book->save();
       session()->flash('success', 'Žiadosť evidujeme, pokúsime sa pridať knihu čo najskôr!');
       return view("userPages/missingBook");
    }
}