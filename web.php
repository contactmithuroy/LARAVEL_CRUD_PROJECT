<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\PostController;
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
    return view('welcome');
});
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');

Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}',[PostController::class,'getById'])->name('post.getbyid');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');
