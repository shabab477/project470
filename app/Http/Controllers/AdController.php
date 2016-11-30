<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use Session;
use Auth;

class AdController extends Controller
{
    //



    public function detail($id)
    {
        $info = Ads::find($id);
        
        return view('ads.details') -> with('info', $info);
    }

    public function index()
    {
    	return view('ads.show');
    }

    public function create(Request $request)
    {

    	$this -> validate($request, array(
                'price' => 'required',
                'description' => 'required|max:255',
                'address' => 'required|max:255',
                'location' => 'required',
                'address' => 'required',
                
        ));

        $ad = new Ads();
        $ad -> price = $request-> price;
        $ad -> description = $request-> description;
        $ad -> address = $request-> address;
        $ad -> location = $request -> location;
        $ad -> longitude = $request-> longitude;
        $ad -> latitude = $request-> latitude;
        $ad -> by = Auth::user() -> id;

        $ad -> save();
        
        
		Session::flash('success', 'Successfully Posted an Ad');
        
        return redirect() -> route('home.go');	
    	
    }
}
