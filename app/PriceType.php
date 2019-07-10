<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceType extends Model
{

    protected $guarded = [];

    public function postTour()
    {
        return $this->hasMany(PostTour::class, 'price_type_id');
    }
}
