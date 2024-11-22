<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
    }

    public function singlePost(Post $post) {
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }

    public function byAuthor(User $user) {
        return view('posts', ['title' => count($user->posts) .' Articles by '. $user->name, 'posts' => $user->posts]);
    }

    public function byKategori(Kategori $kategori) {
        return view('posts', ['title' => 'Category : '. $kategori->name, 'posts' => $kategori->posts]);
    }
}
