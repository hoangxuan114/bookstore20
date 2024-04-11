<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    

     public function bill(){
    	return $this->belongsTo('app\Bill','id_bill','id');
    }

}
