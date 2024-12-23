<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class PostController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {

            $posts=Post::all();
            return view("posts.index",compact("posts"));
    }
    public function create()
    {
        if(!$this->authorize("p_Is_admin",User::class))
        return view("posts.create");
        abort(404);
    }
    public function store(Request $request)
    {
        if(!$this->authorize("p_Is_admin",User::class))
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
        abort(404);
    }
    public function show($id)
    {
        if(!$this->authorize("p_Is_admin",User::class))
        {
            $post=Post::find($id);
            if($post)
            return view("posts.show",compact("post"));
            return redirect()->route('posts')->with('error', 'Not Found ID='.$id);
        }
        abort(404);
    }
    public function edit($id)
    {
        if(!$this->authorize("p_Is_admin",User::class))
        {
            $post=Post::find($id);
            if($post)
            return view("posts.edit",compact("post"));
            return redirect()->route('posts')->with('error', 'Not Found ID='.$id);
        }
        abort(404);
    }
    public function update(Request $request, $id)
    {
        if(!$this->authorize("p_Is_admin",User::class))
        {
            $post=POST::find($id);
            if($post)
            {
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
            return redirect()->route('posts')->with('error', 'Not Found ID='.$id);
        }
        abort(404);
    }
    public function destroy($id)
    {
        $this->authorize("p_Is_admin",User::class);
            $post = Post::find($id);
            if($post)
            {
                $post->delete();
                return redirect()->route('posts');
            }
            return redirect()->route('posts')->with('error', 'Not Found ID='.$id);
    }
}
