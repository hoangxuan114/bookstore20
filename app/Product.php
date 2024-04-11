<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_type(){
    	return $this->belongsTo('app\ProductType','id_type','tid');
    	// id o day la id cua bang Product
    }
     
}
