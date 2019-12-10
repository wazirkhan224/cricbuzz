<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts=Post::all();
        return view('\themes\home\blog',compact('posts'));
    }

    public function showPost($slug,$id)
    {
        $slug =Post::find($slug);
        $latestp = Post::latest()->orderBy('id', 'desc')->first();
        return view('themes.home.readmore',compact('slug','latestp'));
    }
    public function showPostDetail($slug,$id)
    {
        $post= Post::find($slug);
        return view('themes.home.readmore2',compact('post'));
    }
}
