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
            $posts=User::all();
            return view("posts.index",compact("posts"));
        }
        $error = "You are not logged In";
        return redirect()->route('login')->with('error', $error);
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(Request $request)
    {
        if( User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "password_confirmation"=>$request->password_confirmation,
            "is_admin"=>$request->is_admin
            ]))
        return redirect()->route('posts');
        return view("posts.index");
    }
    public function show($id)
    {
        $post=User::find($id);
        return view("posts.show",compact("post"));
    }
    public function edit($id)
    {
        $post=User::find($id);
        return view("posts.edit",compact("post"));
    }
    public function update(Request $request, $id)
    {
        $post=User::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $arr_images=array();
        if($images=$request->file("image"))
        {
            foreach($images as $image)
            {
                $imgName=$image->getClientOriginalName() . '-'. uniqid() . '.'.$image->getClientOriginalExtension();
                $arr_images[]=$imgName;
                $image->move(public_path("/images"),$imgName);
            }
            $post->image=json_encode($arr_images);
        }
        $post->save();
        return redirect()->route('posts');
    }
    public function destroy($id)
    {
        $post = User::find($id);
        $post->delete();
        return redirect()->route('posts');
    }
}
