<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return view("posts.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile("image"))
        {
            dd($request->file("image")->getClientOriginalName());
            $imgName=$request->file("image")->getClientOriginalName() . '_'. uniqid() . $request->file("image")->getClientOriginalExtension();
           $request->file("image")->move(public_path("/images"),$imgName);
        }
       $p=Post::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "image"=>$imgName
        ]);
        if($p)
        return redirect()->route('posts');
        // return view("posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
