<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    // return view('welcome');
    return "gokul learns laravel";
});

Route::get('/', [PostController::class, 'index']);

Route::get('/post/detail', [PostController::class, 'detail']);
