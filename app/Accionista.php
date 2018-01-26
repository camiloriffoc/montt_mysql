<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accionista extends Model
{
    //
    protected $guarded = array();

    //Relación del accionista con la sociedad (1 : 1 ) un accionista pertenece a una sociedad
    public function sociedad(){

    	return $this->belongsTo('Sociedades');
    }
}
