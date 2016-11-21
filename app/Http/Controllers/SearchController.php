<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ad;

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
    	$location = Input::get('location');

    	$ads = Ad::where('price', '>=', $min)
    		->where('price', '<=', $max)
    		->where('location', '=', $location)->get();

    	$response = array();
		foreach($ads as $adInfo)
		{
			$data = array(
				'price' => $adInfo->price,
				'desc' => $adInfo->description,
				'location'=>$adInfo->location,
				'address' => $adInfo->address,
				'contact' => $adInfo->contact
				);

			array_push($response, $data);

		}

    	echo json_encode($response);
    }

}
