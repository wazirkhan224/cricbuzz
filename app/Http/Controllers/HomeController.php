<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Video;

class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stream =Admin::all();
        $video=Video::all();
        return view('\themes\home\index')->with(compact('stream','video'));
    }

    // public function live_stream()
    // {
    //     $stream =Admin::all();
    //     dd($stream);
    // }

    public function stream()
    {
        return view('\themes\home\stream');
    }
}
