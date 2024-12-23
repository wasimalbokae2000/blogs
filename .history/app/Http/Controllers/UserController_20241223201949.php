<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class UserController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize("p_Is_admin",User::class);
        $users=User::all();
        return view("users.index",compact("users"));
    }
    public function create()
    {
        $this->authorize("p_Is_admin",User::class);
        return view("users.create");
    }
    public function store(Request $request)
    {
        $this->authorize("p_Is_admin",User::class);
        $is_admin=false;
        if(!empty($request->is_admin))
            $is_admin=$request->is_admin;
        if($request->validate( [
            'name' => 'min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
            "password_confirmation"=>"required|min:3"
        ]))
        {
            if(User::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password,
                "password_confirmation"=>$request->password_confirmation,
                "is_admin"=>$is_admin
                ]))
            return redirect()->route('users');
        }
        return view("users.index");
    }
    public function show($id)
    {
        $this->authorize("p_Is_admin",User::class);
        $user=User::find($id);
        return view("users.show",compact("user"));
    }
    public function edit($id)
    {
        $this->authorize("p_Is_admin",User::class);
        $user=User::find($id);
        return view("users.edit",compact("user"));
    }
    public function update(Request $request, $id)
    {
        $this->authorize("p_Is_admin",User::class);
        $request->validate(['name' => 'min:3|max:50']);
            $user=User::find($id);
            $user->name=$request->name;
            if(!empty($request->password) && !empty($request->password_confirmation))
            {
                $request->validate( [
                   'password' => 'required|confirmed|min:3',
                   "password_confirmation"=>"required|min:3"
                ]);
                $user->password=hash::make( $request->password);
            }
            if(!empty($request->is_admin) && isset($request->is_admin))
            $user->is_admin=true;
            if($user->is_admin==true && $request->is_admin==null)
            $user->is_admin=false;
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