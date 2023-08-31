<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
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
    }
}
