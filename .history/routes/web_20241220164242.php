<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
Route::get('/posts', [PostController::class, "index"])->name("posts");
Route::get('/posts/create', [PostController::class, "create"] )->name("posts.create");
Route::POST('/posts/store', [PostController::class, "store"] )->name("posts.store");
Route::get('/posts/show/id={id?}', [PostController::class, "show"] )->name("posts.show");
Route::get('/posts/edit/id={id?}', [PostController::class, "edit"] )->name("posts.edit");
Route::POST('/posts/update/id={id?}', [PostController::class, "update"] )->name("posts.update");
Route::get('/posts/delete/id={id?}', [PostController::class, "destroy"] )->name("posts.delete");
Route::get('/', [AuthController::class ,"formlogin"] )->name("login");
Route::post('/', [AuthController::class,"login"]);
Route::post('/logout', [AuthController::class, , "logout"] )->name("logout");
