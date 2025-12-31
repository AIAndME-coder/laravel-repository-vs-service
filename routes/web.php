<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleProductController;

Route::get('/', function () {
    return view('home');
});

// Approach 1: Simple/Regular CRUD
Route::prefix('simple')->name('simple.')->group(function () {
    Route::resource('products', SimpleProductController::class);
});
