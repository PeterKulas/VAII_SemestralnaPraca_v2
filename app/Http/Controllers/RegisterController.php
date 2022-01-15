<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
  public function getView() {
      return view("register/registration");
  }

  public function storeUser() {
    
    $formInput = request()->validate([
        'firstname' => ['required', 'min:2', "max:255"],
        'lastname' => ['required', 'min:2', "max:255"],
        'password' => ['required', 'min:8'],
        'repassword' => ['required', 'min:8','same:password'],
        'email' => ['required', 'email', 'unique:users,email'] 
    ],
    [   
        'firstname.required'    => 'Nemôžes nechať prázdne pole.',
        'firstname.min'    => 'Meno musí obsahovať minimálne 2 znaky.',
        'firstname.max'    => 'Meno nesmie obsahovať viac ako 255 znakov',
        'lastname.required'    => 'Nemôžeš nechať prázdne pole.',
        'lastname.min'    => 'Priezvisko musí obsahovať minimálne 2 znaky.',
        'lastname.max'    => 'Priezvisko nesmie obsahovať viac ako 255 znakov',
        'password.required'    => 'Nemôžeš nechať prázdne pole.',
        'password.min'    => 'Heslo musí obsahovať minimálne 8 znakov.',
        'repassword.required'    => 'Nemôžeš nechať prázdne pole.',
        'repassword.min'    => 'Heslo musí obsahovať minimálne 8 znakov.',
        'repassword.same'    => 'Heslá sa nezhodujú.',
        'email.required'    => 'Nemôžes nechať prázdne pole.',
        'email.email'    => 'Nesprávny formát emailovej adresy.',
        'email.unique'    => 'Účet s touto emailovou adresou už existuje.',
    ]);

    $formInput['password'] = bcrypt($formInput['password']);

    $user = User::create($formInput);
    session()->flash('success', 'Úspešne si sa zaregistroval!');

   return view("register/registration");
  }

}