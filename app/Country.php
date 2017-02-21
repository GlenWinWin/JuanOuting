<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function phones()
    {
        return $this->hasManyThrough('App\Phone','App\User','country_id','user_id');
    }
}
