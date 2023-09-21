<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cek Data
        // return Post::all();
        return view('dashboard.posts.index', [
            'post' => Post::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * create for showing data
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * store for process data
     */
    public function store(Request $request)
    {
        //cek data
        // return $request;
        //input data
        // ddd($request);
        // return $request->file('image')->store('post-image');

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);

        //cek uploud image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        //ambil data yg sudat ter authentikasi\login
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::create($validatedData);
        $request = session();
        $request->flash('success', 'New Post successfull!');
        return redirect('/dashboard/posts');
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            // 'slug' => 'required|unique:posts',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ];

        //update slug
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData = $request->validate($rules);

        //cek uploud image
        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::where('id', $post->id)
            ->update($validatedData);


        $request = session();
        $request->flash('success', 'Updated Post successfull!');
        return redirect('/dashboard/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);
        $request = session();
        $request->flash('success', 'Delete Post Successfull!');
        return redirect('/dashboard/posts');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
