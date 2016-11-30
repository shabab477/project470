<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;
use Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
    	$this -> validate($request, array(
                'password' => 'required',
                'email' => 'required|email'
        ));
        
        $credentials = array(
            'email'     => $request -> email,
            'password'  => $request -> password
        );

    	if(Auth::attempt($credentials))
    	{
			Session::flash('success', 'Successfully done');
        	$request->session()->put('id', Auth::user() -> id);
            $request->session()->put('name', Auth::user() -> name);
            	
    	}
    	else
    	{

    	}
		return redirect() -> route('home.go');

    }

    public function logout()
    {
        
        Auth::logout();
        Session::flush();
        return redirect() -> route('home.go');
    }
}
