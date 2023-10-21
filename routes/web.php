<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ArticleController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/article/create', [ArticleController::class, 'create']);
Route::get('/article/{article}', [ArticleController::class, 'show']);
Route::get('/articles', [ArticleController::class, 'show_all']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::middleware('auth')->group(function () {
    Route::post('like', [LikeController::class, 'like'])->name('like');
    Route::delete('like', [LikeController::class, 'unlike'])->name('unlike');
});


