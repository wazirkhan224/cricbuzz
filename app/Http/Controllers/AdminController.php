<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

use validate;
use App\Admin;
use Redirect;
use App\Post;
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
        return view('admin.dashboard.index');
    }

// live link
    public function liveStreaming()
    {
        $record= Admin::all();
        return view('admin.dashboard.live-streaming')->with(compact('record'));
    }

    public function liveLink(Request $request)
    {
        $user = Admin::where('name','admin')->first();
        $user->update(['live_link'=>$request->live_link]);
        return Redirect::back();
    }

// videos
    public function vidoes()
    {
        $video= Video::all();
        return view('admin.dashboard.videos',compact('video'));
    }

    public function vidoeLink(Request $request)
    {
        $vidoe = new Video;
        $vidoe->title = Input::get('title');
        $vidoe->video_link = Input::get('video_link');
        $vidoe->save();
        return redirect()->back();
    }

    public function editVideo(Request $request, $id)
    {
        $editvideo= Video::find($id);
        return view('admin.dashboard.edit-video',compact('editvideo'));
    }

    public function updateVideo(Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'video_link'=>'required'
        ]);
        $updatevideo = Video::find($id);
        $updatevideo->title =  $request->get('title');
        $updatevideo->video_link = $request->get('video_link');
        $updatevideo->save();
        return redirect('/admin/video');
    }

    public function deleteVideo($id)
    {
        $deletevideo = Video::find($id);
        $deletevideo->delete();
        return redirect()->back();
    }
//posts
    public function post()
    {
        $posts=Post::all();
        return view('admin.dashboard.posts.post',compact('posts'));
    }

    public function postCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        //image
        $photoName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('images'), $photoName);

        //create post
        $posts = new Post;
        $posts->title = Input::get('title');
        $posts->description = Input::get('description');
        $posts->file= $photoName;
        $posts->save();
        return redirect()->back();
    }
    public function editPost(Request $request,$id)
    {
        $posts= Post::find($id);
        return view('admin.dashboard.posts.edit-post',compact('posts'));
    }

    public function updatePost(Request $request, $id)
    {
        $request->validate([
           'title' => 'required',
           'description' => 'required'
        ]);
        $posts =Post::find($id);
//
        if (file_exists( public_path() . '/images/' .$request->file)) {
            $photoName =$posts->file;
        } else {

            //image
            $photoName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('images'), $photoName);
        }
        $posts->title =$request->get('title');
        $posts->description =$request->get('description');
        $posts->file= $photoName;
        $posts->save();
        return redirect('/admin/post');
    }

    public function deletePost($id)
    {
        $deletepost =Post::find($id);
        $deletepost->delete();
        return redirect()->back();
    }
}
