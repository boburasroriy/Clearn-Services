<?php

namespace App\Http\Controllers;

use App\Models\contents;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = contents::all();

        return view('components.post.showBlog')->with('posts' , $posts);
    }
    public function show(contents $post)
    {
        return view('components.post.show')->with([
            'post'=>$post ,
            'recent_post'=> contents::latest()->get()->except($post->id)->take(5)
        ]);


    }
    public function create()
    {
    return view('components.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $name = $request->file('photo')->getClientOriginalName();
            $path= $request->file('photo')->storeAs('post-photos', $name);
        }

        $post = $request->validate([
            'title' => 'required',
            'short_content' => 'required',
            'contents' => 'required',
        ]);

        $member = new contents;
        $member->title = $request->title;
        $member->short_content = $request->short_content;
        $member->content = $request->contents;
        $member->photo = $path;
        $member->save();

        return redirect()->route("posts.index");



    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contents $post)
    {
        return view('components.post.edit')->with( ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contents $post)
    {
        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->contents,

        ]);
        return redirect()->route("posts.index");



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contents $post)
    {
        $post->delete();
        return redirect()->route("posts.index");
    }
}
