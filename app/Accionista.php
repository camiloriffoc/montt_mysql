<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accionista extends Model
{
    //
    protected $guarded = array();

    //Relación del accionista con la sociedad (1 : 1 ) un accionista pertenece a una sociedad
    public function sociedad(){

    	return $this->belongsTo('App\Sociedades');
    }

    //Relacion 1 : n (accionistas muchos porcentaje acciones accionista)
    public function porcentajeAccionesAccionistas(){
    	
    	return $this->hasMany('App\PorcentajeAccionesAccionista','accionista_id');
    }

    //Relacion 1 : n (accionista muchos titulos de acciones)
    public function tituloAcciones(){
        
        return $this->hasMany('App\TituloAcciones','accionista_id');
    }

    //Relacion 1 : n (accionista muchos pactos)
    public function pactosAccionistas(){
        
        return $this->hasMany('App\PactosAccionistas','accionista_id');
    }

    //Relacion 1 : n (accionista muchos subpactos)
    public function subpactosAccionistas(){
        
        return $this->hasMany('App\SubPactosAccionistas','accionista_id');
    }
}
