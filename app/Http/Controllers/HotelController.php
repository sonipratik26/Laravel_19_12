<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function addhotel(Request $request)
    {
    	
    	$hotel_name = $request->hotel_name;
    	$hotel_address = $request->hotel_address;
    	$hotel_contact_number = $request->hotel_contact_number;
    	DB::table('hotels')->insert(
            ['hotel_name' => $hotel_name,'hotel_address'=>$hotel_address,'hotel_phone_number' => $hotel_contact_number]);
    	return redirect('/home');

    }

     public function hotellist(Request $request)
    {
    	
    	$data = DB::table('hotels')
    	        ->select('*')
    	        ->get();

    	        //echo "<pre>";print_r($data);die;

    	        return view('welcome',['hotellist'=>$data]);


    	

    }
     public function gethotellist(Request $request)
    {
    	
    	$data = DB::table('hotels')
    	        ->select('*')
    	        ->get();

    	        //echo "<pre>";print_r($data);die;

    	        return view('hotellist',['hotellist'=>$data]);


    	

    }
}
