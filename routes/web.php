<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('recipe', [HomeController::class, 'index'])->name('recipe');

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'registerPost'])->name('register');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login');



Route::get('/profile/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');



Route::get('/profile', [PostController::class, 'index'])->name('index');

Route::get('/recipe', [PostController::class, 'resep'])->name('recipe');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


