<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    // return view('welcome');
    return "gokul learns laravel";
});

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'detail'])->where('id', '[0-9]+');

Route::get('/old-url', [PostController::class, 'oldUrl']);

Route::get('/new-url', [PostController::class, 'newUrl']);
