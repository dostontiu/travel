<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    public function postTour()
    {
        return $this->hasMany(PostTour::class, 'region_id');
    }
}
