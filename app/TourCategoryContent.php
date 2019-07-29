<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCategoryContent extends Model
{
    public function tourCategory()
    {
        return $this->belongsTo(TourCategory::class);
    }
}
