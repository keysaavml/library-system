<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function () {
//     // return 'Daftar buku' ;
//     return view('books.index');
// });

Route::get('books', [BookController::class, 'index']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('members', [MemberController::class, 'index']);