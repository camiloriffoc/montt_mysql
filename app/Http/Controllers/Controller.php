<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Sociedades;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //Método para asignar a variable de sesión dependiendo la sociedad en la que se encuentra
    public function getSociedad($id){
    	$sociedad = Sociedades::find($id);
    	Session::put('sociedad',$sociedad);
    }


}
