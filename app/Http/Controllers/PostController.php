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

        $existingPost = Post::where('number', $request->number)->first();
        $existingPost1 = Post::where('email', $request->email)->first();


        if ($existingPost) {
            return redirect('register')->withErrors(['number' => 'This phone number is already registered.']);
        }

        if ($existingPost1) {
            return redirect('register')->withErrors(['email' => 'This email is already registered.']);
        }

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
        // $posts = Post::where('name', 'LIKE', 'Akash%')->get();

        return view('show', compact('posts'));
    }
}
