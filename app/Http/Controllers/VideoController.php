<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $video=Video::all();
        return view('themes.home.videos',compact('video'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Video $video)
    {
        //
    }

    public function edit(Video $video)
    {
        //
    }

    public function update(Request $request, Video $video)
    {
        //
    }

    public function destroy(Video $video)
    {
        //
    }
}
