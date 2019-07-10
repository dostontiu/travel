<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTourContent extends Model
{

    protected $guarded = [];

    public function postTour()
    {
        return $this->belongsTo(PostTour::class);
    }

    public function tourLang()
    {
        return $this->belongsTo(TourLang::class);
    }
}
