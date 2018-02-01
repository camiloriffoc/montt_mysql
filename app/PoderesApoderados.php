<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoderesApoderados extends Model
{
    protected $table = 'poderes_apoderados';
	protected $guarded = array();

	public function sociedad(){

    	return $this->belongsTo('App\Sociedades');
    }
}
