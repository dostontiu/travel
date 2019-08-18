<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAccountContentAttribute()
    {
        return $this->hasMany(AccountContent::class, 'account_id')->where('account_contents.lang_id', session()->get('locale_id'))->first();
    }
}
