<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Khong luu updated_at vao DB
    public $timestamps = false;
    
    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'product_promotion_pricre',
        'product_image'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
