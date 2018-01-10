<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\auth;
use Illuminate\Http\Request;
use App\address;
use App\order;
use App\product;

class CheckController extends Controller
{
    public function index(){
    	return view('front.address');
    }








public function formvalidate(Request $request){

	$this->validate($request,[

'fullname' => 'required|min:4|max:15',
'pincode' => 'required|min:4|max:8',
'city' => 'required|min:4|max:8',
'state' => 'required|min:4|max:15',
'country' => 'required|min:3|max:15'],[

'fullname.required'=>'enter a full name',

'pincode.required'=>'enter a pincode',
'city.required'=>'enter a city',
'state.required'=>'enter a state',
'country.required'=>'country',]);



       $user_id=Auth::user()->id;
	$address=new address;
	$address->fullname=$request->fullname;
	$address->pincode=$request->pincode;

	$address->city=$request->city;
	

	$address->state=$request->state; 
	$address->country=$request->country;


order::createOrder();


	$address->save();


}



}
