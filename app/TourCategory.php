<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{

    public function postTour()
    {
        return $this->hasMany(PostTour::class, 'category_id');
    }
}
