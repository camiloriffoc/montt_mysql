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

    		$inspector_request = $request->all();
    		$inspector=InspectorCuenta::find($inspector_request['sociedad_id']);
    		
    		if($inspector){
        		$inspector->update($inspector_request);
        	}else{
        		$inspector = new InspectorCuenta($inspector_request);
            	$inspector->save();
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
