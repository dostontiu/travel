<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTour extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tourCategory()
    {
        return $this->belongsTo(TourCategory::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function imgPostTour(){
        return $this->hasMany(ImgPostTour::class, 'post_tour_id');
    }

    protected $guarded = [];
}
