<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociedades extends Model
{
    //
    protected $guarded = array();

    //Relacion 1 : n (Sociedad muchos accionistas)
    public function accionistas(){
    	
    	return $this->hasMany('Accionistas');
    }
}
