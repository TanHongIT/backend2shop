<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = "customer";

    public function bill(){
        return $this->hasMany('App\Bill', 'id_custumer','id');
    }
}
