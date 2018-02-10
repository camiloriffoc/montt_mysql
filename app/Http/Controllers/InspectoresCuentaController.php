<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Sociedades;
use App\InspectorCuenta;

class InspectoresCuentaController extends Controller
{
    public function index(request $request, $sociedad_id){

    	if($request->ajax()){

    		$sociedad=Sociedades::find($sociedad_id);
        	$inspector=$sociedad->inspectorCuenta;

    	$view = \View::make('inspectoresCuentas.index')->with(['sociedad_id'=>$sociedad_id,'inspector'=>$inspector]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function update(request $request) {
    	
    	if($request->ajax()){

            $file_sociedad  = $request->file('sociedad_eximida_file');
            $file_mecanismo = $request->file('señala_mecanismo_file');
            $file_Fecha  = $request->file('titular_fecha_designacion_file');
            $file_reportes = $request->file('titular_reportes_file');

    		$inspector_request = $request->all();
    		$inspector=InspectorCuenta::find($inspector_request['sociedad_id']);
    		
    		if($inspector){
                
                $file_sociedad_old  = $inspector->sociedad_eximida_file;
                $file_mecanismo_old = $inspector->señala_mecanismo_file;
                $file_Fecha_old         = $inspector->titular_fecha_designacion_file;
                $file_reportes_old      = $inspector->titular_reportes_file;
        		
                $inspector->update($inspector_request);

                if($file_sociedad) {
                    $nombre_sociedad= str_replace(" ", "_", $file_sociedad->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $inspector->update(['sociedad_eximida_file'=>$nombre_sociedad]);              
                    $file_sociedad->move('uploads/inspectores', str_replace(" ","_",$file_sociedad->getClientOriginalName()));
                    
                    if(\File::exists(public_path('uploads/inspectores/'.$file_sociedad_old))){
                            \File::delete(public_path('uploads/inspectores/'.$file_sociedad_old));
                    }
                }
                if($file_mecanismo) {
                    $nombre_mecanisco= str_replace(" ", "_", $file_mecanismo->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                  $inspector->update(['señala_mecanismo_file'=>$nombre_mecanisco]);              
                  $file_mecanismo->move('uploads/inspectores', str_replace(" ","_",$file_mecanismo->getClientOriginalName()));
                    
                    if(\File::exists(public_path('uploads/inspectores/'.$file_mecanismo_old))){
                            \File::delete(public_path('uploads/inspectores/'.$file_mecanismo_old));
                    }
                }
                if($file_Fecha) {
                    $nombre_fecha= str_replace(" ", "_", $file_Fecha->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $inspector->update(['titular_fecha_designacion_file'=>$nombre_fecha]);              
                    $file_Fecha->move('uploads/inspectores', str_replace(" ","_",$file_Fecha->getClientOriginalName()));
                    
                    if(\File::exists(public_path('uploads/inspectores/'.$file_Fecha_old))){
                            \File::delete(public_path('uploads/inspectores/'.$file_Fecha_old));
                    }
                }
                if($file_reportes) {
                    $nombre_reportes= str_replace(" ", "_", $file_reportes->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                  $inspector->update(['titular_reportes_file'=>$nombre_reportes]);              
                  $file_reportes->move('uploads/inspectores', str_replace(" ","_",$file_reportes->getClientOriginalName()));
                    
                    if(\File::exists(public_path('uploads/inspectores/'.$file_reportes_old))){
                            \File::delete(public_path('uploads/inspectores/'.$file_reportes_old));
                    }
                }

        	}else{
        		$inspector = new InspectorCuenta($inspector_request);
            	$inspector->save();

                if($file_sociedad) {
                    $nombre_sociedad= str_replace(" ", "_", $file_sociedad->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                   $inspector->update(['sociedad_eximida_file'=>$nombre_sociedad]);              
                   $file_sociedad->move('uploads/inspectores', str_replace(" ","_",$file_sociedad->getClientOriginalName()));
                }
                if($file_mecanismo) {
                    $nombre_mecanisco= str_replace(" ", "_", $file_mecanismo->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                  $inspector->update(['señala_mecanismo_file'=>$nombre_mecanisco]);              
                 $file_mecanismo->move('uploads/inspectores', str_replace(" ","_",$file_mecanismo->getClientOriginalName()));
                }
                if($file_Fecha) {
                    $nombre_fecha= str_replace(" ", "_", $file_Fecha->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $inspector->update(['titular_fecha_designacion_file'=>$nombre_fecha]);              
                    $file_Fecha->move('uploads/inspectores', str_replace(" ","_",$file_Fecha->getClientOriginalName()));
                }
                if($file_reportes) {
                    $nombre_reportes= str_replace(" ", "_", $file_reportes->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                  $inspector->update(['titular_reportes_file'=>$nombre_reportes]);              
                  $file_reportes->move('uploads/inspectores', str_replace(" ","_",$file_reportes->getClientOriginalName()));

                }
        	}

        	$sociedad=Sociedades::find($inspector_request['sociedad_id']);
        	$inspector=$sociedad->inspectorCuenta;

    		$view = \View::make('inspectoresCuentas.index')->with(['sociedad_id'=>$inspector_request['sociedad_id'],'inspector'=>$inspector]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function inspectorUpdate(request $request) {

    	if($request->ajax()){

    		$view = \View::make('inspectoresCuentas.index')->with(['sociedad_id'=>$sociedad_id,'inspector'=>$inspector]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    	
    }
}
