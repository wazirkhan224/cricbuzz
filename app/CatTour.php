<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTour extends Model
{
    protected $fillable = ['title'];

    public function tourDesc(){
        return $this->hasMany(TourDesc::class,'cat_tours_id');
    }

    public function tourDescDetail(){
        return $this->hasMany(TourDescDetail::class,'cat_tours_id');
    }

    public function nextview(){
        return $this->hasMany(TourDesc::class,'cat_tours_id')->with('tourDescDetail');
    }
}
