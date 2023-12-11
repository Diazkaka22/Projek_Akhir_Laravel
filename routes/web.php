<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Controller;
use App\http\Controllers\PostController;
use App\http\Controllers\AuthController;
use App\http\Controllers\HomeController;

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
//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/blog',function () {
    return view('blog');
});
 Route::get('/',function () {
     return view('welcome');
 });
Route::get('/home',function () {
    return view('home');
});
Route::get('/',[\App\Http\Controllers\PostController::class, 'tampil']);
Route::get('/blog',[PostController::class, 'blog']);
Route::get('/about',function () {
    return view('about');
});
Route::get('/kontak',function () {
    return view('kontak');
});
Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home1', [HomeController::class, 'index']);
    Route::DELETE('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/search',[\App\Http\Controllers\PostController::class, 'search']);
