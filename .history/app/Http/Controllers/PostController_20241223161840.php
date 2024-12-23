<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;




class PostController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            $posts=Post::all();
            return view("posts.index",compact("posts"));
        }
        $error = "You are not logged In";
        return redirect()->route('login')->with('error', $error);
    }
    public function create()
    {
        $this->authorize("create",User::class);
        return view("posts.create");
    }
    public function store(Request $request)
    {
        $arr_images=array();
        if($images=$request->file("image"))
        {
            foreach($images as $image)
            {
                $imgName=$image->getClientOriginalName() . '-'. uniqid() . '.'.$image->getClientOriginalExtension();
                $arr_images[]=$imgName;
                 $image->move(public_path("/images"),$imgName);
            }
        }
        if( Post::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "image"=>json_encode( $arr_images)
            ]))
        return redirect()->route('posts');
        return view("posts.index");
    }
    public function show($id)
    {
        $post=Post::find($id);
        return view("posts.show",compact("post"));
    }
    public function edit($id)
    {
        $post=Post::find($id);
        return view("posts.edit",compact("post"));
    }
    public function update(Request $request, $id)
    {
        $post=POST::find($id);
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
        if(Auth::User()->is_admin==true)
        {
            $post = Post::find($id);
            $post->delete();
            return redirect()->route('posts');
        }
        else
        {
            $error = "You are not admin";
            return redirect()->route('posts')->with('error', $error);
        }


    }
}
