<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
     protected $table = "bills";

      public function bill_detail(){
    	return $this->hasMany('app\BillDetail','id_bill','id');
    }

     public function customer(){
    	return $this->hasMany('app\Customer','id_customer','id');
    }

}
