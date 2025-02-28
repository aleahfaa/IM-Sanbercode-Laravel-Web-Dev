<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'daftar']);

Route::get('/welcome', [FormController::class, 'halo']);

Route::post('/welcome', [FormController::class, 'data']);

// crud
// create
Route::get('/post/create', [PostController::class, 'create']);
Route::Post('/post', [PostController::class, 'store']);
// read
Route::get('/post', [PostController::class,'index']);
Route::get('/post/{id}', [PostController::class, 'show']);
// update
Route::get('/post/{id}/edit', [PostController::class, 'edit']);
Route::put('/post/{id}', [PostController::class,'update']);
// delete
Route::delete('/post{id}', [PostController::class,'destroy']);