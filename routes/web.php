<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MissingBookController;
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
Route::get('adminPanel/users', [AdminPanelController::class, 'getUsers'])->middleware('admin');
Route::get('adminPanel/books', [AdminPanelController::class, 'getBooks'])->middleware('admin');
Route::get('adminPanel/authors', [AdminPanelController::class, 'getAuthors'])->middleware('admin');
Route::get('adminPanel/publishers', [AdminPanelController::class, 'getPublishers'])->middleware('admin');
Route::get('adminPanel/missingBooks', [MissingBookController::class, 'getMissingBooks'])->middleware('admin');


Route::get('adminPanel/users/delete/{id}', [AdminPanelController::class, 'deleteUser'])->middleware('admin');
Route::get('adminPanel/users/edit/{id}', [AdminPanelController::class, 'getUser'])->middleware('admin');
Route::post('adminPanel/user/edit', [AdminPanelController::class, 'editUser'])->middleware('admin');

Route::get('adminPanel/authors/delete/{id}', [AdminPanelController::class, 'deleteAuthor'])->middleware('admin');
Route::get('adminPanel/authors/edit/{id}', [AdminPanelController::class, 'getAuthor'])->middleware('admin');
Route::post('adminPanel/author/edit', [AdminPanelController::class, 'editAuthor'])->middleware('admin');

Route::get('adminPanel/books/delete/{id}', [AdminPanelController::class, 'deleteBook'])->middleware('admin');
Route::get('adminPanel/books/edit/{id}', [AdminPanelController::class, 'getBook'])->middleware('admin');
Route::post('adminPanel/book/edit', [AdminPanelController::class, 'editBook'])->middleware('admin');

Route::get('adminPanel/publishers/delete/{id}', [AdminPanelController::class, 'deletePublisher'])->middleware('admin');
Route::get('adminPanel/publishers/edit/{id}', [AdminPanelController::class, 'getPublisher'])->middleware('admin');
Route::post('adminPanel/publisher/edit', [AdminPanelController::class, 'editPublisher'])->middleware('admin');

Route::get('adminPanel/missingBooks/delete/{id}', [MissingBookController::class, 'deleteMissingBook'])->middleware('admin');

/*Inserts */

Route::get('adminPanel/authors/insert', [AdminPanelController::class, 'getInsertAuthorView'])->middleware('admin');
Route::post('adminPanel/authors/insert', [AdminPanelController::class, 'storeAuthor'])->middleware('admin');

Route::get('adminPanel/books/insert', [AdminPanelController::class, 'getInsertBookView'])->middleware('admin');
Route::post('adminPanel/books/insert', [AdminPanelController::class, 'storeBook'])->middleware('admin');

Route::get('adminPanel/publishers/insert', [AdminPanelController::class, 'getInsertPublisherView'])->middleware('admin');
Route::post('adminPanel/publishers/insert', [AdminPanelController::class, 'storePublisher'])->middleware('admin');

/*Login, Logout sessions */
Route::get('login', [SessionsController::class, 'getLoginView'])->middleware('guest');
Route::post('login', [SessionsController::class, 'loginUser'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

/*Catalog */
Route::get('catalog', [CatalogController::class, 'getCatalogView'])->middleware('auth');
Route::post('catalog', [CatalogController::class, 'getCatalogSelected'])->middleware('auth');

Route::get('catalog/singleBook/{id}', [CatalogController::class, 'getSingleBookView'])->middleware('auth');
Route::post('catalog/singleBook/{id}', [CatalogController::class, 'storeReview'])->middleware('auth');

/*Missing page */
Route::get('missingbook', [MissingBookController::class, 'getView'])->middleware('auth');
Route::post('missingbook', [MissingBookController::class, 'storeBook'])->middleware('auth');