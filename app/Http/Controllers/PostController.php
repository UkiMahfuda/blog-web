<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $search = Post::latest();
        // if (request('search')) {
        //     $search->where('title', '%' . request('search') . '%')
        //         ->orWhere('body', '%' . request('search') . '%');
        // }


        // dd(request('search'));

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
        return view('blog', [
            'title' => 'All Blog' . $title,
            'active' => 'post',
            // 'post' => $search->get()
            'post' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString()
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
