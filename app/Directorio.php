<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorio extends Model

{
	protected $table = 'directorios';
	protected $guarded = array();

	public function sociedad() {

		return $this->belongsTo('App\Sociedades');
	}
    
}
