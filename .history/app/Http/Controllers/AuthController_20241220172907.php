<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formlogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        if(auth::attempt(["email"=>$request->email,"password"=>hash::check($request->password)]))
        {
            $request->session()->regenerate();
            return redirect()->route('posts');
        }
       dd("Check your email or password");
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
