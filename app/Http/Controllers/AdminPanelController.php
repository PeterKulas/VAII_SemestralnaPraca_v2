<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\User;

class AdminPanelController extends Controller
{

    public function getUsers() {
        $users = User::all();
        return view("adminPanel/users",["users" => $users]);
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect("adminPanel/users");
    }


    public function getBooks() {
        $books = Author::all();
        return view("adminPanel/books",["books" => $books]);
    }

    public function getAuthors() {
        $authors = Author::all();
        return view("adminPanel/authors",["authors" => $authors]);
    }
}