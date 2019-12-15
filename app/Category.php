<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }


    
    public function subcategory(){
        return $this->hasMany('App\Category', 'parent_id');
    }
    


    public function parent(){
        return $this->belongsto('App\Category', 'parent_id');
    }
}
