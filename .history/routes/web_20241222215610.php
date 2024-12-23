<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

// Route::middleware("auth")->get('/posts', [PostController::class, "index"])->name("posts");


Route::middleware("auth")->group(function()
{
    Route::resource("posts",PostController::class);


    Route::get('/posts', [PostController::class, "index"])->name("posts");
    Route::get('/posts/create', [PostController::class, "create"] )->name("posts.create");
    Route::POST('/posts/store', [PostController::class, "store"] )->name("posts.store");
    Route::get('/posts/show/id={id?}', [PostController::class, "show"] )->name("posts.show");
    Route::get('/posts/edit/id={id?}', [PostController::class, "edit"] )->name("posts.edit");
    Route::POST('/posts/update/id={id?}', [PostController::class, "update"] )->name("posts.update");
    Route::get('/posts/delete/id={id?}', [PostController::class, "destroy"] )->name("posts.delete");
    Route::post('/logout', [AuthController::class,"logout"] )->name("logout");

    Route::get('/users', [UserController::class, "index"])->name("users");
    Route::get('/users/create', [UserController::class, "create"] )->name("users.create");
    Route::POST('/users/store', [UserController::class, "store"] )->name("users.store");
    Route::get('/users/show/id={id?}', [UserController::class, "show"] )->name("users.show");
    Route::get('/users/edit/id={id?}', [UserController::class, "edit"] )->name("users.edit");
    Route::POST('/users/update/id={id?}', [UserController::class, "update"] )->name("users.update");
    Route::get('/users/delete/id={id?}', [UserController::class, "destroy"] )->name("users.delete");
});


Route::get('/', [AuthController::class ,"formlogin"] )->name("login");
Route::post('/', [AuthController::class,"login"]);


