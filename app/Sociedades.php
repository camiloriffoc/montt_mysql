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

    //Relacion 1 : n (Sociedad muchas sucursales)
    public function sucursales(){
        
        return $this->hasMany('App\Sucursal','sociedad_id');
    }

    //Relacion 1 : n (Sociedad muchos Giros)
    public function giros(){
        
        return $this->hasMany('App\Giro','sociedad_id');
    }


    public function poderesApoderados(){
        
        return $this->hasMany('App\PoderesApoderados','sociedad_id');
    }

    public function gerentesRepresentantes(){
        
        return $this->hasMany('App\GerenteRepresentante','sociedad_id');
    }

    public function inspectorCuenta(){
        
        return $this->hasOne('App\InspectorCuenta','sociedad_id');
    }

    public function estatutoRegimenGenerales(){
        
        return $this->hasMany('App\EstatutoRegimenGeneral','sociedad_id');
    }

    public function estatutoRegimenEspeciales(){
        
        return $this->hasMany('App\EstatutoRegimenEspecial','sociedad_id');
    }

    public function fiscalizador(){
        return $this->hasOne('App\Fiscalizadores','sociedad_id');
    }

}
