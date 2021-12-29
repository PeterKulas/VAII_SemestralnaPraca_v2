<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function getView() {
      return view("register/registration");
  }

  public function storeUser() {
    
    $formInput = request()->validate([
        'firstname' => ['required', 'min:2', "max:255"],
        'lastname' => ['required', 'min:2', "max:255"],
        'password' => ['required', 'min:8', "max:255"],
        'repassword' => ['required', 'min:8',"max:255"],
        'email' => ['required', 'email', 'unique:users,email'] 
    ]);

    $formInput['password'] = bcrypt($formInput['password']);

    User::create($formInput);
    session()->flash('success', 'Úspešne si sa zaregistroval!');

    return redirect('/');
}

}