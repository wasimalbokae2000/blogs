<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, "index"])->name("posts");
Route::get('/posts/create', [PostController::class, "create"] )->name("posts.create");
Route::POST('/posts/store', [PostController::class, "store"] )->name("posts.store");
Route::get('/posts/show', [PostController::class, "show"] )->name("posts.show");
Route::get('/posts/edit/{id}', [PostController::class, "show"] )->name("posts.show");


