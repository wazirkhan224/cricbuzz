<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Admin;
use Redirect;
use App\Video;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashboard.index');
    }

// live link 
    public function liveStreaming()
    {
        $record= Admin::all();
        
        return view('admin.dashboard.live-streaming')->with(compact('record'));
    }

    public function liveLink(Request $request){

        $user = Admin::where('name','admin')->first();
        $user->update(['live_link'=>$request->live_link]);
        return Redirect::back();
    }

// videos    
    public function vidoes(){
        return view('admin.dashboard.videos');
    }
    public function vidoeLink(Request $request){

        $vidoe = new Video;
        $vidoe->title = Input::get('title');
        $vidoe->video_link = Input::get('video_link');
        $vidoe->save();

        return redirect()->back();
    } 


}
