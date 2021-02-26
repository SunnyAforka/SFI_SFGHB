<?php

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

Route::get('/', function () {
    return view('posts/index');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('index');
Route::get('/devotional/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('show');
Route::get('/search', [App\Http\Controllers\PostsController::class, 'search'])->name('search');
Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
