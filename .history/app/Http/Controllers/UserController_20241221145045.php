<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class UserController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            $users=User::all();
            return view("users.index",compact("users"));
        }
        $error = "You are not logged In";
        return redirect()->route('login')->with('error', $error);
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {

        $request->validate( [
            'name' => 'min:3|max:50',
            'email' => 'required|email',
            'is_admin' => 'boolean',
            'password' => 'required|confirmed|min:6',
        ]);


        if( User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "password_confirmation"=>$request->password_confirmation,
            "is_admin"=>$request->is_admin
            ]))
        return redirect()->route('users');
        return view("users.index");
    }
    public function show($id)
    {
        $user=User::find($id);
        return view("users.show",compact("user"));
    }
    public function edit($id)
    {
        $user=User::find($id);
        return view("users.edit",compact("user"));
    }
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->title=$request->title;
        $user->description=$request->description;
        $user->save();
        return redirect()->route('users');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
}
