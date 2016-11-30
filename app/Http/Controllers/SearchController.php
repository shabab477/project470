<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ads;

class SearchController extends Controller
{
    public function index()
    {
    	
    	return view('pages.show_ads');
    }

    public function query()
    {
    	$max = Input::get('max');
        $min = Input::get('min');
        $loc = Input::get('location');

        $ads = Ads::where('price', '>=', $min)
                ->where('price', '<=', $max)
                ->where('location', $loc)
                ->paginate(5);

        return view('pages.show_ads') -> with('ads', $ads);
    }

}
