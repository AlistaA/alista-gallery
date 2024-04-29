<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;


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


// Path: routes\web.php
Route::middleware(['auth'])->group(function () {
Route::get('/albums', [AlbumsController::class, 'index']);
Route::get('/albums/create', [AlbumsController::class, 'create'])->name('albums.create');
Route::get('/albums/{album}', [AlbumsController::class, 'show'])->name('albums.show');
Route::post('/albums', [AlbumsController::class, 'store'])->name('albums.store');
Route::delete('/albums/{id}', [AlbumsController::class, 'destroy'])->name('albums.destroy');


Route::get('/photo/upload/{album_id}', [PhotosController::class, 'create'])->name('photos.create');
Route::post('/photo/upload', [PhotosController::class, 'store'])->name('photos.store');
Route::get('/photo/{photo}', [PhotosController::class, 'show'])->name('photos.show');
Route::delete('/photo/{id}', [PhotosController::class, 'destroy'])->name('photos.destroy');

});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');

Route::post('/photos/{photo}/toggle-like', [LikeController::class, 'toggle'])->name('likes.toggle');
Route::get('/photos/{photo}/check-like', [LikeController::class, 'checkLike'])->name('likes.check');
Route::post('/photos/{photo}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/all', [AlbumsController::class, 'allAlbum'])->name('photos.all');


