<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatutoRegimenEspecial extends Model
{
    protected $table = 'estatutos_regimen_especiales';
	protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}
}
