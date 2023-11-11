<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password])) {
            // $request->session()->regenerate();

            return response()->json([
                'success' => true
            ], 200);
            // return redirect()->intended('/dashboard')->with('success', 'Login Successful!');
        }
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'message' => 'Username Atau Password Salah'
            ], 401);
        }
    }
}
