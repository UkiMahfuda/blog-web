<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {


        // dd(request('search'));
        return view('blog', [
            'title' => 'All Blog',
            'active' => 'post',
            // 'post' => Post::all()
            'post' => Post::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Post $blog)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $blog
        ]);
    }
}
