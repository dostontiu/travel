<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgPostTour extends Model
{

    public function PostTour(){
        $this->belongsTo(PostTour::class);
    }

    protected $fillable = [
        'name',
        'post_tour_id'
    ];
}
