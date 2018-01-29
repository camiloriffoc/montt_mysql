<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociedades extends Model
{
    //
    protected $guarded = array();

    //Relacion 1 : n (Sociedad muchos accionistas)
    public function accionistas(){
    	
    	return $this->hasMany('App\Accionista','sociedad_id');
    }

    //Relacion 1 : n (Sociedad muchas acciones)
    public function acciones(){
    	
    	return $this->hasMany('App\Acciones','sociedad_id');
    }
}
