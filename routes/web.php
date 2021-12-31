<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
Route::get('register', [RegisterController::class, 'getView'])->middleware('guest'); 
Route::post('register', [RegisterController::class, 'storeUser'])->middleware('guest');

/*Admin panel */
Route::get('adminPanel/users', [AdminPanelController::class, 'getUsers']);
Route::get('adminPanel/books', [AdminPanelController::class, 'getBooks']);
Route::get('adminPanel/authors', [AdminPanelController::class, 'getAuthors']);

Route::get('adminPanel/users/delete/{id}', [AdminPanelController::class, 'deleteUser']);
Route::get('adminPanel/users/edit/{id}', [AdminPanelController::class, 'getUser']);
Route::post('adminPanel/user/edit', [AdminPanelController::class, 'editUser']);

Route::get('adminPanel/authors/delete/{id}', [AdminPanelController::class, 'deleteAuthor']);
Route::get('adminPanel/authors/edit/{id}', [AdminPanelController::class, 'getAuthor']);
Route::post('adminPanel/author/edit', [AdminPanelController::class, 'editAuthor']);

Route::get('adminPanel/books/delete/{id}', [AdminPanelController::class, 'deleteBook']);
Route::get('adminPanel/books/edit/{id}', [AdminPanelController::class, 'getBook']);
Route::post('adminPanel/book/edit', [AdminPanelController::class, 'editBook']);

/*Inserts */

Route::get('adminPanel/authors/insert', [AdminPanelController::class, 'getInsertAuthorView']);
Route::post('adminPanel/authors/insert', [AdminPanelController::class, 'storeAuthor']);

/*Login, Logout sessions */
Route::get('login', [SessionsController::class, 'getLoginView'])->middleware('guest');
Route::post('login', [SessionsController::class, 'loginUser'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');