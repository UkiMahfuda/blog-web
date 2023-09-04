<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route view with parameter
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('dasboard.home', [
//         'name' => 'Uki Mahfuda',
//         'loc' => 'Bandar Lampung'
//     ]);
// });

// Route::view(
//     '/home',
//     'dasboard.home',
//     [
//         'name' => 'Uki Mahfuda',
//         'loc' => 'Indonesia'
//     ]
// );

// Route::get('/contact/{id}', function ($id) {
//     return view('dasboard.contact', ['id' => $id]);
// });

//Route Parameter
// Route::get('/about/{id}', function ($id) {
//     return 'Hello World' . $id;
// });

//Route Redirect
// Route::redirect('/home', '/dashboard');

//Route Prefix
// Route::prefix('dashboard')->group(function () {
//     Route::get('/home', function () {
//         return 'Hello World';
//     });
//     Route::get('/about', function () {
//         return 'Hello Me';
//     });
//     Route::get('/contact/{id}', function ($id) {
//         return 'Hello User ' . $id;
//     });
// });

//Route Blade template
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{blog:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'post' => $category->blog,
        'category' => $category->name
    ]);
});
