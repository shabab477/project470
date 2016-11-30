<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Ads extends Model
{
    

    public function user()
    {
    	return $this->hasOne('App\User', 'id', 'by');
    }
}
