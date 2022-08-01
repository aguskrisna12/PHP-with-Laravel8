<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;   
        }

        if(request('author')){
            $category = User::firstWhere('username', request('author'));
            $title = ' in ' . $category->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search' , 'category', 'author']))
                        ->paginate(7)->withQueryString()
        ]);
    }

    public function post(Post $post)
    { // Post adalah Models
        return view('post', [
            "title" => "Judul Post",
            'active' => 'posts',
            "post" => $post // semua collection dari Models Post
        ]);
    }
}
