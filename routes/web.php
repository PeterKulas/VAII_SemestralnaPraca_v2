<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\RegisterController;
use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    return view('index'); 
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


/*Registration */
Route::get('register', [RegisterController::class, 'getView'])->middleware('guest'); //Len host sa moze registrovat
Route::post('register', [RegisterController::class, 'storeUser'])->middleware('guest');

/*Admin panel */
Route::get('/adminPanel/users', function () {
    return view('adminPanel/users', [
        'users' => User::all()
    ]);
});

Route::get('/adminPanel/books', function () {
    return view('adminPanel/books');
});

Route::get('/adminPanel/authors', function () {
    return view('adminPanel/authors', [
        'authors' => Author::all()
    ]);
});

//Route::get('adminPanel/authors', [AdminPanelController::class, 'getViewAuthors']);