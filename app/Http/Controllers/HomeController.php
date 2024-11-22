<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {  // __invoke() artinya tidak memanggil lagi method nya ketika membuat route nya (HomeController::class) bisa dilihat di web.php yang route home
        return view('home', ['title' => 'Home Page']);
    }
}
