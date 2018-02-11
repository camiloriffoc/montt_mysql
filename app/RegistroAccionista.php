<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroAccionista extends Model
{
    //
    protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}
}
