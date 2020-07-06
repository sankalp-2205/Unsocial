<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

class postsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');

    }

    public function store()
    {
        $data = request()->validate([
            "caption" => "required",
            "image" => ["required" , "image"]
        ]);

        $imagePath = (request('image')->store('uploads','public'));

        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(800,800);
        // $image->save();

        auth()->user()->posts()->create([
            "caption" => $data['caption'],
            "image" => $imagePath,
        ]);

        return redirect('/profile/' .auth()->user()->id);
    }

    public function show(\App\posts $post)
    {
        return view('posts.show',[
            "post" => $post,
        ]);

    }
}

