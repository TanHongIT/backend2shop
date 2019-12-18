<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id', 'category_name'];

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }


    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
