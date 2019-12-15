<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //không lưu updated_at vào database
    public $timestamps = false;
    
    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'product_image'
    ];
    //Quan hệ 1-n
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    //tao them 1 quan he moi
    public function billdetail(){
        return $this->hasMany('App\BillDetail', 'id_product','id');
    }
    
}
