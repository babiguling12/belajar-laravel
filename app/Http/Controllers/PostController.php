<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // with() digunakan untuk eager loading agar query yang dihasilkan saat looping tidak banyak (isinya adalah relasi yang terdapat pada model tersebut)
        // $posts = Post::with('author', 'kategori')->latest()->get(); // get() dengan all() itu hampir sama (SELECT * FROM) cuma klo kita ingin menambahkan sesuatu di depannya (setelah tanda ::) maka pakai get() 

        $posts = Post::latest()->get();
        return view('posts', ['title' => 'Blog', 'posts' => $posts]);
    }

    public function singlePost(Post $post) {
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }

    public function byAuthor(User $user) {
        // $posts = $user->posts->load('author', 'kategori'); // load() digunakan untuk lazy eager loading (biasanya dipake klo sudah berbentuk tanda panah). Isi parameter nya adalah relasi di model tersebut

        return view('posts', ['title' => count($user->posts) .' Articles by '. $user->name, 'posts' => $user->posts]);
    }

    public function byKategori(Kategori $kategori) {
        // $posts = $kategori->posts->load('author', 'kategori');

        return view('posts', ['title' => 'Category : '. $kategori->name, 'posts' => $kategori->posts]);
    }
}
