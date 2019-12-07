<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDesc extends Model
{
    protected $fillable = ['title'];

    public function tourDescDetail(){
        return $this->hasMany(TourDescDetail::class,'tour_desc_id');
    }
}
