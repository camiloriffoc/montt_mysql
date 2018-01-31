<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubPactosAccionistas extends Model
{
    //
    protected $guarded = array();

     //Relación de pacto con un accionista
    public function accionista(){

    	return $this->belongsTo('App\Accionista');
    }
}
