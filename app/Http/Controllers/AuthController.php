<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level === 'admin') {
                return redirect()->route('tentang.index');
            }
        }

        return redirect()->route('login')->with('error', 'Login failed.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
