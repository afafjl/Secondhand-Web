<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
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
    return view('homepage.show');
});
Route::get('/login', function(){
    return view('login.show');
})->name('login');

Route::get('/change_password', function () {
    return view('login.change_password');
});
Route::get('/chat', function () {
    return view('chat.show');
});

Route::get('/follow', function () {
    return view('follow.show');
});

Route::get('/post/create', function () {
    return view('posts.create');
});

Route::get('/post/edit', function () {
    return view('posts.edit');
});
Route::get('/post/search', function () {
    return view('posts.search');
});
Route::get('/post/show', function () {
    return view('posts.show');
});
Route::get('/profile', function () {
    return view('profiles.show');
});
Route::get('/profile/edit', function () {
    return view('profiles.edit');
});

Route::get('/upload', function () {
    return view('uploadAvatar');
});

Route::get('/register', function () {
    return view('register.show');
});
