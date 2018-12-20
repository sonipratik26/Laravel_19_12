<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addcomment(Request $request)
    {
    	print_r($request->all());
    	// $hotel_name = $request->hotel_name;
    	// $hotel_address = $request->hotel_address;
    	// $hotel_contact_number = $request->hotel_contact_number;
    	// DB::table('hotels')->insert(
     //        ['hotel_name' => $hotel_name,'hotel_address'=>$hotel_address,'hotel_phone_number' => $hotel_contact_number]);
    	// return redirect('/home');

    }
}
