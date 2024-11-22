<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;



Route::get('/', HomeController::class);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'singlePost']);

Route::get('/authors/{user:username}', [PostController::class, 'byAuthor']);

Route::get('/kategories/{kategori:slug}', [PostController::class, 'byKategori']);

Route::get('/contact', [ContactController::class, 'index']);





