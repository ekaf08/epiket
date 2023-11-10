<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
            // return redirect()->intended('/dashboard')->with('success', 'Login Successful!');
        }
        dd('salah om');
    }
}
