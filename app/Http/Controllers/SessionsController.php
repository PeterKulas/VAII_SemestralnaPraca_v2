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
            'email' => ['required','email' ,'exists:users,email'],
            'password' => ['required', "min:8"],
        ],
        [   
            'email.required'    => 'Nemôžes nechať prázdne pole.',
            'email.email'    => 'Nesprávny formát emailovej adresy.',
            'email.exists'    => 'Email sa nezhoduje so žiadnym účtom.',
            'password.required'    => 'Nemôžeš nechať prázdne pole.',
            'password.min'    => 'Heslo musí obsahovať minimálne 8 znakov.',
        ]);

        if (auth()->attempt($formInput)) {  
            return redirect("/");
        } else {
            session()->flash('error', 'Chybné heslo!');   
            return view('login.loginPage');
        }   
    }

    public function destroy() {
       
        auth()->logout();
        return redirect("/");
    } 
}