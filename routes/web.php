<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('books.index');
});

Auth::routes();

//List all Books
Route::get('/', [BookController::class, 'index'])->name('INDEX');

//Show Create Book Form
Route::get('/books/create', [BookController::class, 'create'])->name('CREATE_BOOK_FORM');

//Store Book Entry
Route::post('/books', [BookController::class, 'store'])->name('STORE_NEW_BOOK');

//Show Book Edit
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('EDIT_BOOK');

//Cofirm Edit
Route::put('/books', [BookController::class, 'edit_confirm'])->name('EDIT_CONFIRM');

//Delete Book
Route::get('/books/{book}/delete', [BookController::class, 'delete'])->name('DELETE_BOOK');

//Show Single Book
Route::get('/books/{book}', [BookController::class, 'show'])->name('SHOW_BOOK');
