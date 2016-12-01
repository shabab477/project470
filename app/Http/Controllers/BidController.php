<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use Session;
use Auth;

class BidController extends Controller
{
    //

    public function post(Request $request)
    {
    	$bid = new Bid();

    	$bid -> bid_to = $request -> bid_to;
    	$bid -> bid_by = Auth::user() -> id;

    	$bid -> save();

    	Session::flash('success', 'Successfully bidded');
    	
        return view('pages.home');
    }

    public function show()
    {
        return view('ads.bids') -> with('user', Auth::user());
    }
}
