<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
	protected $table = "image";
	public $timestamps = false;

	protected $hidden = ['id_product'];
}
