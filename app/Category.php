<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
