<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('welcome', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();

        return view('posts.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'book_name' => $request->book_name,
            'mail' => $request->email,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        return Redirect::route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        $datas = Post::all();
        $data = $datas->find($post);
        return view('posts.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $user = User::all();
        return view('posts.edit', compact('post', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post) 
    {
        
        $post->update([
            'book_name' => $request->book_name,
            'mail' => $request->email,
            'description'=>$request->description,

        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
