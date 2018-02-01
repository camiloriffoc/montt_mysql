<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectorCuenta extends Model
{
    protected $table = 'inspectores_cuentas';
	protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}
    
}
