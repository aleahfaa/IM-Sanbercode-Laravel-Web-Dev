<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'daftar']);

Route::get('/welcome', [FormController::class, 'halo']);

Route::post('/welcome', [FormController::class, 'data']);

// Route::get('/master', function(){
//     return view('layouts.master');
// });