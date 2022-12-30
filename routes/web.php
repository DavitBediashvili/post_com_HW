<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [PostController::class, 'posts']);
Route::post('/', [PostController::class, 'posts']);

Route::get('/post/{id}', [PostController::class, 'comment'])->name('post');;
Route::post('/post/{id}', [PostController::class, 'comment'])->name('post');;




Route::domain('admin.localhost')->group(function () {


    Route::get('/posts', [PostController::class, 'admin']);
    Route::post('/posts', [PostController::class, 'admin']);

    Route::get('/posts/{id}', [PostController::class, 'admin_comment'])->name('comment');;
    Route::post('/posts/{id}', [PostController::class, 'admin_comment'])->name('comment');;

});


