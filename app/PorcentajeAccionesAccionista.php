<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PorcentajeAccionesAccionista extends Model
{
    //
     protected $guarded = array();

     //Relación de Porcentaje con un accionista
    public function accionista(){

    	return $this->belongsTo('App\Accionista');
    }
}
