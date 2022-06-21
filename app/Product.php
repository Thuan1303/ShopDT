<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    
    public $timestamps = false;

    protected $hidden = ['id_category', 'id_subcategory'];
    protected $guarded = ["_token"];  

    public function attr()
    {
        return $this->hasMany('App\Attribute', 'id_product', 'id');
    }

    public function image()
    {
        return $this->hasMany('App\Image', 'id_product', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'id_subcategory');
    }

    public function comment(){
        return $this->hasMany('App\Reply','reply','id');
    }
}
