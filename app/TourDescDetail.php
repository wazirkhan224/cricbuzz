<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDescDetail extends Model
{
    protected $fillable = ['tour_desc_id','cat_tours_id','description'];

    public function tourdesc()
    {
        return $this->belongsTo(TourDesc::class,'tour_desc_id');
    }

    public function tourCat()
    {
        return $this->belongsTo(CatTour::class,'cat_tours_id');
    }
}
