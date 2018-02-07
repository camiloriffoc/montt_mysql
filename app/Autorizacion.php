<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorizacion extends Model
{
  
    protected $table = 'autorizaciones_sectores';
	protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}

}


