<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTour extends Model
{
//    public function user(){
//        return $this->belongsTo(User::class);
//    }

    public function category()
    {
        return $this->belongsTo(TourCategory::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function priceType()
    {
        return $this->belongsTo(PriceType::class);
    }



    public function imgPostTour()
    {
        return $this->hasMany(ImgPostTour::class, 'post_tour_id');
    }

    public function postTourContent()
    {
        return $this->hasMany(PostTourContent::class, 'post_tour_id');
    }

    protected $guarded = [];
}
