<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTour extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }

    public function imgPostTour(){
        $this->hasMany(ImgPostTour::class, 'post_tour_id');
    }

    protected $guarded = [];
}
