<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('books/create', [BookController::class, 'create'])->name('book.create');
Route::get('books', [BookController::class, 'store'])->name('books.store');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('books', BookController::class);
    Route::resource('genres', GenreController::class);
});
