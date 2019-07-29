<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegionContent extends Model
{
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
