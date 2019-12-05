<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

use validate;
use App\Admin;
use Redirect;
use App\Post;
use App\Video;
use App\TourDesc;
use App\CatTour;

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
            'description' => 'required'
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
        return redirect()->back()->with('success', 'Created Post  Successfully!');
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
        return redirect('/admin/post')->with('success', 'Updated  Post Success Fully!');
    }

    public function deletePost($id)
    {
        $deletepost =Post::find($id);
        $deletepost->delete();
        return redirect()->back()->with('success', 'Delete Post !');
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

//Upcoming Tour
    public function upcomentTour()
    {
        $tourcat= CatTour::all();
        $tourdetail=TourDesc::all();
        return view('admin.dashboard.tours.upcoming-tour',compact('tourcat','tourdetail'));
    }

    public function tourDetail(Request $request)
    {
        $tourcat= CatTour::all();

        $phone1 = CatTour::find(1)->title;
        $phone2 = CatTour::find(2)->title;
        $phone3 = CatTour::find(3)->title;

        $request->validate([
            'title' => 'required',
            'tour_category' => 'required',
            'description' => 'required'
        ]);

        //create post
        $tour = new TourDesc;
        if($a1= $tour->title = Input::get('title')==$phone1)
        {
            $tour->cat_tours_id = 1;
        }
        if($a1= $tour->title = Input::get('title')==$phone2)
        {
            $tour->cat_tours_id = 2;
        }
        if($a1= $tour->title = Input::get('title')==$phone3)
        {
            $tour->cat_tours_id = 3;
        }
        $tour->title = Input::get('title');
        $tour->tour_category = Input::get('tour_category');
        $tour->description = Input::get('description');
        $tour->save();
        return redirect()->back()->with('success', 'Created New Tour Record Successfully!');
    }

    public function editTour(Request $request,$id)
    {
        $tourupdate=TourDesc::find($id);
        return view('admin.dashboard.tours.edit-upcoming-tour',compact('tourupdate'));
    }

    public function updateTour(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'tour_category' =>'required',
            'description' => 'required'
        ]);

        $tourupdate=TourDesc::find($id);

        $tourupdate->title =$request->get('title');
        $tourupdate->tour_category =$request->get('tour_category');
        $tourupdate->description =$request->get('description');
        $tourupdate->save();
        return redirect('/admin/tour')->with('success', 'Tour  updated Successfully!');
    }

    public function deleteTour($id)
    {
        $tourdelete =TourDesc::find($id);
        $tourdelete->delete();
        return redirect()->back()->with('success', 'Tour Record   deleted!');
    }
}
