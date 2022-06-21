<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
	protected $table = "attribute";
	public $timestamps = false;

	protected $hidden = ['id','id_product'];
}
