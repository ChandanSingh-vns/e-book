<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use DB;

class HomeController extends Controller
{
    public function getBanners(){
		
		$banners = Banner::all();
		//$banners = DB::table('banner')->get();
		
    	return view('banner',compact('banners'));
		
	}
}
