<?php

namespace App\Http\Controllers;

use App\CatTour;
use App\Tour;
use App\TourDesc;
use App\TourDescDetail;
use Illuminate\Http\Request;

class TourController extends Controller
{

    public function index()
    {
        $tour_category= CatTour::with('nextview')->get();
        return view('\themes\home\upcoming',compact('tour_category'));
    }

}
