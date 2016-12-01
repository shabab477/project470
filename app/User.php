<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;
    //
	//these are mass assignable data in the controller
    protected $fillable = [
        'name', 'email', 'about', 'phone', 'address'
    ];

    public function bids()
    {
        return $this->hasManyThrough(
            'App\Ads', 'App\Bid',
            'bid_by', 'id', 'id'
        );
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

