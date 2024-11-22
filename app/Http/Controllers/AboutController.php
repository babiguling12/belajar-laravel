<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $data = [
            'nama' => 'King Gustos',
            'alamat' => 'rumah',
            'title' => 'About'
        ];
        return view('home', $data);
    }
}
