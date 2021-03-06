<?php

namespace App\Http\Controllers;

use App\TourDescDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use DB;
use App\Comment;
use validate;
use App\Admin;
use Redirect;
use App\Post;
use App\Video;
use App\TourDesc;
use App\CatTour;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.index');
    }

// live link
///////////////
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
///////////////
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
        $vidoe->description = Input::get('description');
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
        $updatevideo->description = $request->get('description');
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

    public function postComment($id)
    {
        $postcomments=Post::find($id);
        $comment =Comment::All();

        $comments = Comment::where('commentable_id', '=', $id)->get();
        return view('admin.dashboard.posts.post_comments',compact('comments'));
    }

    public function editComment($id)
    {
        $editcomment=Comment::find($id);
        return view('admin.dashboard.posts.edit_comments',compact('editcomment'));
    }
    public function updateComment(Request $request,$id)
    {
        $request->validate([
            'comment' => 'required'
        ]);
        $updatecomment =Comment::find($id);
        $updatecomment->comment=$request->get('comment');
        $updatecomment->save();
        return redirect('/admin/post')->with('success', 'Updated  Comment Success Fully!');
    }

    public function deleteComment($id)
    {
        $deletecomment=Comment::find($id);
        $deletecomment->delete();
        return redirect()->back()->with('success', 'Delete Post Comment!');
    }

//Upcoming Tour
///////////////
    public function upcomentTour()
    {
        $tourcat= CatTour::all();
        $tourdetail=TourDesc::all();
        return view('admin.dashboard.tours.catDescription.index',compact('tourcat','tourdetail'));
    }

    public function tourDetail(Request $request)
    {
        $request->validate([
            'cat_tours_id' => 'required',
            'title' => 'required'
        ]);

        $tourdesccreat = new TourDesc();
        $tourdesccreat->cat_tours_id =$request->get('cat_tours_id');
        $tourdesccreat->title =$request->get('title');
        $tourdesccreat->save();
        return redirect()->back()->with('success', 'Created New Tour Record Successfully!');
    }

    public function editTour(Request $request,$id)
    {
        $tourcat= CatTour::all();
        $tourupdate=TourDesc::find($id);
        return view('admin.dashboard.tours.catDescription.edit',compact('tourupdate','tourcat'));
    }

    public function updateTour(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'cat_tours_id'=>'required'
        ]);

        $tourupdate=TourDesc::find($id);
        $tourupdate->title =$request->get('title');
        $tourupdate->save();
        return redirect('/admin/tour')->with('success', 'Tour  updated Successfully!');
    }

    public function deleteTour($id)
    {
        $tourdelete =TourDesc::find($id);
        $tourdelete->delete();
        return redirect()->back()->with('success', 'Tour Record   deleted!');
    }

//tourcategory
///////////////
    public function tourCategory(Request $request)
    {
        $tours=CatTour::all();
        return view('admin.dashboard.tours.tourCategory.index',compact('tours'));
    }

    public function createTourCategory(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $tourCategory= new CatTour();
        $tourCategory->title =$request->get('title');
        $tourCategory->save();
        return redirect()->back()->with('success','successfully created new record');
    }

    public function editTourCategory($id)
    {
        $edittours=CatTour::find($id);
        return view('admin.dashboard.tours.tourCategory.edit',compact('edittours'));
    }

    public function updateTourCategory(Request $request,$id)
    {
        $updatetours=CatTour::find($id);
        $updatetours->title = $request->get('title');
        $updatetours->save();
        return redirect('/admin/tour-category')->with('success', 'Updated Record  Successfully!');
    }

    public function deleteTourCategory($id)
    {
        $delettours=CatTour::find($id);
        $delettours->delete();
        return redirect()->back()->with('success','successfully Delete Record');
    }

    //Tour Detail
    public function viewTourDetail()
    {
        $tourcat=CatTour::all();
        $tourdesc=TourDesc::all();
        $tourrecod=TourDescDetail::with('tourdesc','tourCat')->get();
        return view('admin.dashboard.tours.tourDetail.index',compact('tourcat','tourdesc','tourrecod'));
    }

    public function createTourDetail(Request $request)
    {
        $request->validate([
            'description' => 'required'
        ]);

        $tourdeatil = new TourDescDetail;
        $tourdeatil->cat_tours_id =$request->get('cat_tours_id');
        $tourdeatil->tour_desc_id =$request->get('tour_desc_id');
        $tourdeatil->description =$request->get('description');
        $tourdeatil->save();
        return redirect()->back()->with('success','successfully created new record');
    }

    public function editTourDetail($id)
    {
        $tourcat=CatTour::ALL();
        $tourdesc=TourDesc::all();
        $toured=TourDescDetail::find($id);
        return view('/admin.dashboard.tours.tourDetail.edit',compact('toured','tourcat','tourdesc'));
    }

    public function updateTourDetail(Request $request,$id)
    {
        $request->validate([
            'description' => 'required'
        ]);

        $tourddetail=TourDescDetail::Find($id);
        $tourddetail->description =$request->get('description');
        $tourddetail->cat_tours_id =$request->get('cat_tours_id');
        $tourddetail->tour_desc_id =$request->get('tour_desc_id');
        $tourddetail->save();
        return redirect('/admin/tour-detail')->with('success', 'Updated Record  Successfully!');
    }

    public function deleteTourDetail($id)
    {
        $tourddelete=TourDescDetail::find($id);
        $tourddelete->delete();
        return redirect()->back()->with('success','successfully Delete Record');
    }
}
