<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'name' => ['required', 'min:6', 'max:20'],
            'number' => ['required', 'numeric', 'min:10'],
            'email' => ['required', 'min:10'],
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->qualification = $request->qualification;
        $post->experiance = $request->experiance;
        $post->age = $request->age;
        $post->number = $request->number;
        $post->email = $request->email;
        $post->save();
        return redirect('register')->with('status', 'Your Application data has been sent.');
    }

    public function show(Request $request)
    {
        // return DB::table('posts')->get();
        $posts = Post::all();

        // Use the compact function to pass the $posts variable to the view
        return view('show', compact('posts'));
    }
}
