<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GerenteRepresentante extends Model
{
    protected $table = 'gerentes_generales';
	protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}
}
