<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable,Commentable;

    protected $fillable = [
        'title', 'file', 'description',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
