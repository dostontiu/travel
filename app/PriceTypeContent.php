<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceTypeContent extends Model
{
    public function tourPriceType()
    {
        return $this->belongsTo(PriceType::class);
    }
}
