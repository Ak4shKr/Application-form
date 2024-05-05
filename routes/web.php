<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register', function () {
    return view('form');
});

Route::post('store', [PostController::class, 'store']);

// Route::get('showdata', [PostController::class, 'show']);

Route::get('showData', [PostController::class, 'show']);

Route::fallback(function () {
    return redirect()->route('home');
});
