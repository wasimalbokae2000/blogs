<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, "index"] );
Route::get('/posts/create', [PostController::class, "create"] )->name("posts.create");
Route::POST('/posts/store', [PostController::class, "store"] )->name("posts.store");


