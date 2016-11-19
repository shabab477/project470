<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
	//these are mass assignable data in the controller
    protected $fillable = [
        'name', 'email', 'about', 'phone', 'address'
    ];
}

