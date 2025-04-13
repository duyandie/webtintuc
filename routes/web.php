<?php

use App\Http\Controllers\UserController;
use Core\Route;

Route::get("/", fn() => view("welcome"));

// Route::prefix('/users', function () {
//     Route::get('/', [UserController::class, 'index']);
//     Route::get('/{id}', [UserController::class, 'show']);
//     Route::get('/create', [UserController::class, 'create']);
//     Route::post('/store', [UserController::class, 'store']);
// });
require_once __DIR__ ."/acess/post.php";
require_once __DIR__ ."/acess/category.php";
require_once __DIR__ ."/acess/user.php";
require_once __DIR__ ."/acess/whislist.php";
require_once __DIR__ ."/acess/comment.php";
require_once __DIR__ ."auth.php";