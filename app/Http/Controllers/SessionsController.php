<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function getLoginView() {

        return view('login.loginPage');
    } 
    
    public function loginUser() {

       $formInput = request()->validate([
            // 'email' => ['required', 'email','exists:users,email'],
            'email' => ['required', 'exists:users,email', 'email'],
            'password' => ['required', "min:8"]
        ]);

        if (auth()->attempt($formInput)) {
            return redirect('/');
        }

       // return back()->withErrors(['email' => 'Zadaný email neexistuje!']);
        throw ValidationException::withMessages([
            'email' => "Zadaný email sa nezhoduje s heslom!",
            'password' => "Neplatné heslo!"
        ]);
    }

    public function destroy() {
       
        auth()->logout();
        return redirect("/");
    } 
}