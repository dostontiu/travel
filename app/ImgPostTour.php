<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgPostTour extends Model
{

    public function PostTour(){
        return $this->belongsTo(PostTour::class);
    }

    protected $guarded = [];
//    protected $fillable = [
//        'name',
//        'post_tour_id'
//    ];
}
