<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTour extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

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
        return $this->hasMany(PostTourContent::class, 'post_tour_id', 'id');
//            ->where('post_tour_contents.lang_id', '=', session()->get('locale_id')); // bu ishlamayapti shuni ishlatish kerak
    }


    public function getPostTourContentAttribute()
    {
        return $this->hasMany(PostTourContent::class, 'post_tour_id')->where('post_tour_contents.lang_id', session()->get('locale_id'))->first();
    }


}
