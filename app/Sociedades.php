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

    public function Autorizaciones(){
        
        return $this->hasMany('App\Autorizacion','sociedad_id');
    }

    //Relacion 1 : n (Sociedad muchos LIstado accionista capital)
    public function listadoAccionistasCapitales(){
        
        return $this->hasMany('App\ListadoAccionistaCapital','sociedad_id');
    }
    //Relacion 1 : n (Sociedad muchos LIstado accionista voto)
    public function listadoAccionistasVotos(){
        
        return $this->hasMany('App\ListadoAccionistaVoto','sociedad_id');
    }

    //Relacion 1 : n (Sociedad muchos LIstado accionista dividendo)
    public function listadoAccionistasDividendos(){
        
        return $this->hasMany('App\ListadoAccionistaDividendo','sociedad_id');
    }

    //Relacion 1 : n (Sociedad muchos LIstado Opciones)
    public function listadoOpciones(){
        
        return $this->hasMany('App\ListadoOpciones','sociedad_id');
    }

    public function registroAccionista(){
        
        return $this->hasOne('App\RegistroAccionista','sociedad_id');
    }

    public function derechoRetiro(){
        return $this->hasOne('App\DerechoRetiro','sociedad_id');
    }

    public function formaDisolucionLiquidacion(){
        
        return $this->hasOne('App\FormaDisolucionLiquidacion','sociedad_id');
    }

    public function formaResolucionConflicto(){
        
        return $this->hasOne('App\FormaResolucionConflicto','sociedad_id');
    }

    public function otrosPactosEspeciales(){
        
        return $this->hasOne('App\OtrosPactosEspeciales','sociedad_id');
    }

    public function juntaAccionista(){
        
        return $this->hasOne('App\JuntaAccionista','sociedad_id');
    }

}
