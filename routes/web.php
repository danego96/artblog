<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
Route::get('/article/create', [ArticleController::class, 'create']);
Route::get('/article/{article}', [ArticleController::class, 'show']);
Route::get('/articles', [ArticleController::class, 'show_all']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::middleware('auth')->group(function () {
    Route::post('like', 'LikeController@like')->name('like');
    Route::delete('like', 'LikeController@unlike')->name('unlike');
});


