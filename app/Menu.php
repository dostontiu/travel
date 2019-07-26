<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];
    protected $table = 'menus';

    public function parent() {

        return $this->hasOne('App\Menu', 'id', 'parent_id')->orderBy('display_order');

    }

    public function children() {

        return $this->hasMany('App\Menu', 'parent_id', 'id')->orderBy('display_order');

    }

    public static function tree() {

        return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', '0')->orderBy('display_order')->get();

    }
}
