<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giro extends Model
{
    //
    protected $guarded = array();
	
    //Relación del giro con la sociedad (1 : 1 ) un giro pertenece a una sociedad
    public function sociedad(){

    	return $this->belongsTo('App\Sociedades');
    }
}
