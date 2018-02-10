<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListadoAccionistaVoto extends Model
{
    //
    //
    protected $guarded = array();
	
    //Relación del giro con la sociedad (1 : 1 ) un listado pertenece a una sociedad
    public function sociedad(){

    	return $this->belongsTo('App\Sociedades');
    }
}
