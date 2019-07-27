<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuContent extends Model
{
    public function menuContent()
    {
        return $this->belongsTo(Menu::class);
    }
}
