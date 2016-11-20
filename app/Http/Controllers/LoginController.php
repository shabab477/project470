<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
    	$email = $request -> email;
    	$password = Hash::make($request->password);

    	$user = User::where('email', $email)
    			->where('password', $password)->get();

    	if($user -> count() == 1)
    	{
			Session::flash('success', 'Successfully done');
        	$request->session()->put('email', $request -> email);
        	
    	}
    	else
    	{
    		Session::flash('failure', 'Wrong Email');

    	}
		return redirect() -> route('home.go');

    }
}
