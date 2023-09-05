<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(User $author)
    {
        return view('blog', [
            'title' => 'User Post',
            'post' => $author->post
        ]);
    }
}
