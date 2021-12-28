<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function getView() {
      return view("register.create");
  }

  public function storeUser() {
    
    $formInput = request()->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'password' => ['required', 'min:8'],
        'repassword' => ['required', 'min:8'],
        'email' => ['required', 'email'] 
    ]);

    User::create($formInput);

    return redirect('/');
}

}