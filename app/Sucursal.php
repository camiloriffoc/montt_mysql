<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

	protected $guarded = array();
	
    //Relación de la sucursal con la sociedad (1 : 1 ) una sucursal pertenece a una sociedad
    public function sociedad(){

    	return $this->belongsTo('App\Sociedades');
    }
}
