<?php

use App\Http\Controllers\BookController;

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


Route::get('/welcome', [BookController::class, 'welcome']);


Route::get('/books',[BookController::class,'index'])->name(name:'books.index');

Route::get('/books/{bookId}/show-my-book',[BookController::class,'show'])->name(name:'books.show ');
