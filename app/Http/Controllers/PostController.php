<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'All Blog',
            // 'post' => Post::all()
            'post' => Post::with(['author', 'category'])->latest()->get()
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
