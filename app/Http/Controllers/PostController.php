<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // with() digunakan untuk eager loading agar query yang dihasilkan saat looping tidak banyak (isinya adalah relasi yang terdapat pada model tersebut)
        // $posts = Post::with('author', 'kategori')->latest()->get(); // get() dengan all() itu hampir sama (SELECT * FROM) cuma klo kita ingin menambahkan sesuatu di depannya (setelah tanda ::) maka pakai get() 

        // request() fungsi nya untuk menangkap data yang dikirimkan melalui form (input). Isi dari kurung nya adalah name dari input
        return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'kategori', 'author']))->latest()->get()]); // filter() adalah scope. Penulisan method nya cuma tulis nama scope nya aja (setelah scope....). Setelah scope nya baru bisa menambahkan syarat lain misalnya kek order by dll
    }
}
