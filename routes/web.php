<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::inertia('/','Home');

Route::get('/',[PostController::class,'index']);
Route::resource('posts',PostController::class)->except('index');

Route::get('/about', function () {
    return Inertia::render('About/About');
});

