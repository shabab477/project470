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
    	
    }

}
