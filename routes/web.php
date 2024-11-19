<?php

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    $data = [
        'nama' => 'King Gustos',
        'alamat' => 'rumah',
        'title' => 'About'
    ];
    return view('about', $data);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view ('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view ('posts', ['title' => count($user->posts) .' Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/kategories/{kategori:slug}', function (Kategori $kategori) {
    return view ('posts', ['title' => 'Category : '. $kategori->name, 'posts' => $kategori->posts]);
});

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact',
        'nama' => 'King Gustos'
    ];
    return view('contact', $data);
});





