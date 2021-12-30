<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\User;

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
        return view("adminPanel/users/editUser",["user" => $user]);
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
        $books = Author::all();
        return view("adminPanel/books",["books" => $books]);
    }

    /*AUTHORS*/
    public function getAuthors() {
        $authors = Author::all();
        return view("adminPanel/authors",["authors" => $authors]);
    }
}