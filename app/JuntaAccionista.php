<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuntaAccionista extends Model
{
    //
     //
    protected $guarded = array();

    public function sociedad(){

    	return $this->belongsTo('App\Sociedades');
    }
}
