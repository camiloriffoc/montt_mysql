<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use App\Autorizacion;

class AutorizacionController extends Controller
{
    
    public function index(request $request, $sociedad_id) {

    	if($request->ajax()){

        $sociedades=Sociedades::find($sociedad_id);
        $resoluciones = $sociedades->Autorizaciones;
      	$view = \View::make('autorizacionSectores.index')->with(['sociedad_id'=>$sociedad_id, 'resoluciones'=>$resoluciones]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function store(request $request) {

    	if($request->ajax()){

    		$file_resoluciones = $request->file('resoluciones');

   			$autorizacion_new= $request->all();
    		$resoluciones=$autorizacion_new['resoluciones'];
    		$sociedad_id = $autorizacion_new['sociedad_id'];

			$autorizacion = new Autorizacion($autorizacion_new);
            $autorizacion->save();

            if($file_resoluciones) {
                $nombre_resoluciones= str_replace(" ", "_", $file_resoluciones->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $autorizacion->update(['resoluciones'=>$nombre_resoluciones]);              
                $file_resoluciones->move('uploads/autorizaciones', str_replace(" ","_",$file_resoluciones->getClientOriginalName()));
            }

        $sociedades=Sociedades::find($sociedad_id);
        $resoluciones = $sociedades->Autorizaciones;
      	$view = \View::make('autorizacionSectores.index')->with(['sociedad_id'=>$sociedad_id, 'resoluciones'=>$resoluciones]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }
}
