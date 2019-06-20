<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'address', 'company_name', 'description', 'telephone', 'emails', 'logo', 'banner', 'user_id'
    ];
}
