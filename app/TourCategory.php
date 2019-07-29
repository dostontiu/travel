<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{

    protected $guarded = [];
    protected $table = 'tour_categories';

    public function parent()
    {
        return $this->hasOne('App\TourCategory', 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(TourCategory::class, 'parent_id', 'id');
    }

    public function tourCategoryContent()
    {
        return $this->hasMany(TourCategoryContent::class, 'category_id')->where('tour_category_contents.lang_id', session()->get('locale_id'));
    }

    public function getTitleNameAttribute()
    {
        return $this->hasMany(TourCategoryContent::class, 'category_id')->where('tour_category_contents.lang_id', session()->get('locale_id'))->first()['name'];
    }


    public function postTour()
    {
        return $this->hasMany(PostTour::class, 'category_id');
    }

}
