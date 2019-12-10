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

    public function index()
    {
        $stream =Admin::all();
        $video=Video::all();
        return view('\themes\home\index')->with(compact('stream','video'));
    }

    public function stream()
    {
        return view('\themes\home\stream');
    }
}
