<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
	//
	protected $table = "bills";
	protected $hidden = ["updated_at"];
	
	public function user()
	{
		return $this->belongsTo('App\User', 'idUser', 'id');
	}

	public function payment(){
		return $this->hasMany('App\Payment','code_bill','id');
	}

	public function status(){
		return $this->hasOne("App\StatusShip");
	}
}
