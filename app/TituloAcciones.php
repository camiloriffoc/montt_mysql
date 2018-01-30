<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TituloAcciones extends Model
{
    //
	protected $guarded = array();

    //Relación de titulo de acciones con un accionista
    public function accionista(){

    	return $this->belongsTo('App\Accionista');
    }

}
