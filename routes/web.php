<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleProductController;
use App\Http\Controllers\RepositoryProductController;

Route::get('/', function () {
    return view('home');
});

// Approach 1: Simple/Regular CRUD
Route::prefix('simple')->name('simple.')->group(function () {
    Route::resource('products', SimpleProductController::class);
});

// Approach 2: Repository Pattern
Route::prefix('repository')->name('repository.')->group(function () {
    Route::resource('products', RepositoryProductController::class);
});
