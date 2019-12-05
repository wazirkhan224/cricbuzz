<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDesc extends Model
{
    //
    public function tourDesc(){
        return $this->hasMany('App\TourDescDetail','tour_desc_id');
    }
}
