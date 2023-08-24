<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;


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
Route::get('/', function () {
    return view('home', [
        'name' => 'Uki',
        'role' => 'Admin',
        'employe' => [
            'Agus',
            'Rizky',
            'Angga',
            'Putra',
            'Putri'
        ]
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Uki',
        'desc' => post::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'phone' => '089612628924',
        'name' => 'Uki'
    ]);
});
