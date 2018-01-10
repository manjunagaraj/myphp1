<?php

namespace App;
use Illuminate\Support\Facades\auth;
use Illuminate\Database\Eloquent\Model;
use App\product;

class order extends Model
{
   
 protected $fillable=['total','status'];




public function product(){
	return $this->belongsToMany(Product::class);
}





    public static function createOrder(){
   	$user=Auth::user();
   	$order=$user->orders()->create(['total'=>'500','status'=>'pending']);




   	$order->product()->attach(['amount'=>'143']);


}
}
