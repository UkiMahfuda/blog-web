<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => [
                'required',
                //  'email:dns',
                'email'
            ],
            'password' => ['required'],
        ]);
        // dd('Berhasil');
        //direct
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        // dd('Gagal');
        return back()->with('loginError', 'Login Failed');

        // return back()->withErrors([
        //     'loginError' => 'The provided credentials do not match our records.',
        // ])->onlyInput('loginerror');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
