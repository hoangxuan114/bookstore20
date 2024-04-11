<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";

    public function product(){
    	return $this->hasMany('app/Product','id_type','tid');
    	//id o day cua bang product_type
    }
}
