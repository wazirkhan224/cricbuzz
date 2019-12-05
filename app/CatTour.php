<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTour extends Model
{
    //
    public function Tours(){
        return $this->hasMany('App\TourDesc','cat_tour_id');
    }
}
