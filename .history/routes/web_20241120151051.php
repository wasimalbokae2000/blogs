<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PostController::class, "index"] );
