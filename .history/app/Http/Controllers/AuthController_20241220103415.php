<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show()
    {
         return view('auth.login');
    }
    public function login(Request $request)
    {
        if(auth::attempt(["email"=>$request->email,"password"=>$request->password]))
        {
            $request->session()->regenerate();
            return redirect()->route('posts.index');
        }
        return back()->withErrors(["message"=>"Check your email or password"])
    }
}