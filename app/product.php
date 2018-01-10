<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['pro_name','pro_code','pro_price','pro_info','pro_img','spl_price'];


     protected $table='products';
}
