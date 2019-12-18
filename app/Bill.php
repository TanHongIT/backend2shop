<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public function bill_detail()
    {
        return $this->hasMany('App\BillDetail','id_bill','bill_id');
    }
    public function bill()
    {
        return $this->belongTo('App\Customer','id_customer','bill_id');
    }
}
