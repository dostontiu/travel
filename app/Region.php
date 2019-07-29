<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];
    protected $table = 'regions';

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


    public function regionContent()
    {
        return $this->hasMany(RegionContent::class, 'region_id')->where('region_contents.lang_id', session()->get('locale_id'));
    }

    public function getTitleNameAttribute()
    {
        return $this->hasMany(RegionContent::class, 'region_id')->where('region_contents.lang_id', session()->get('locale_id'))->first()['name'];
    }
}
