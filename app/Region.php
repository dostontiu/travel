<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    public function postTour()
    {
        return $this->hasMany(PostTour::class, 'region_id');
    }





    public function parent()
    {
        return $this->belongsTo(Region::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Region::class, 'parent_id');
    }
}
