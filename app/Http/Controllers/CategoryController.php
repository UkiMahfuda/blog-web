<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Category',
            'active' => 'category',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('blog', [
            'title' => "List by Category : $category->name",
            'post' => $category->blog->load('category', 'author'),
        ]);
    }
}
