<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            'active' => 'about',
            "name" => "Agus Krisna Udayana",
            "email" => "aguskrisnau317@gmail.com",
            "image" => "img1.jpeg"
        ]);
    }
}
