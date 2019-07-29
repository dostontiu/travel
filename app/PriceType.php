<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceType extends Model
{

    protected $guarded = [];
    protected $table = 'price_types';

    public function postTour()
    {
        return $this->hasMany(PostTour::class, 'price_type_id');
    }

    public function priceTypeContent()
    {
        return $this->hasMany(PriceTypeContent::class, 'price_type_id')->where('price_type_contents.lang_id', session()->get('locale_id'));
    }

    public function getTitleNameAttribute()
    {
        return $this->hasMany(PriceTypeContent::class, 'price_type_id')->where('price_type_contents.lang_id', session()->get('locale_id'))->first()['name'];
    }


}
