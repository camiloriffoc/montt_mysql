<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatutoRegimenGeneral extends Model
{
    protected $table = 'estatutos_regimen_generales';
	protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}
}
