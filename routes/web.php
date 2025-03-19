<?php

use App\Http\Controllers\deletePostController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\retrievePostController;
use App\Http\Controllers\SubmitPostController;
use App\Http\Controllers\updatePostController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\viewPostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

//Route::get('/home', function () {
//    return "hello, good morning, how are you doing";
//});

Route::get('/home', [homeController::class, 'homePage']) ->name('home');

Route::get('/add-post',  [UserController::class, 'addPost'])->name('add-post');

Route::post('/submit-post', [SubmitPostController::class, 'submitPost'])->name('submit-post');

Route::get('/posts', [retrievePostController::class, 'retrievePost'])->name('posts');

Route::get('/posts/{id}', [viewPostController::class, 'viewSinglePost'])->name('viewPost');

Route::delete('/posts/{id}', [deletePostController::class, 'deletePost'])->name('delete');

Route::put('/posts/{id}', [updatePostController::class, 'updatePost'])->name('update');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
