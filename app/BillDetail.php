<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{

    protected $table = "billdetail";
    public function product()
    {
        return $this->belongsTo('App\Product','id_product','bill_detail_id');
    }

    public function bill()
    {
        return $this->belongsTo('App\Bill','id_bill','bill_detail_id');
    }
}
