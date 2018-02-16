<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolioRegistroAccionista extends Model
{
    //
    //
    protected $guarded = array();

     //Relación de pacto con un accionista
    public function accionista(){

    	return $this->belongsTo('App\Accionista');
    }
}
