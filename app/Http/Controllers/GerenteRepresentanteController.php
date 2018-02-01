<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\GerenteRepresentante;
use App\Sociedades;

class GerenteRepresentanteController extends Controller
{
    
    public function index(Request $request, $sociedad_id) {;

        if($request->ajax()){

        	$sociedad=Sociedades::find($sociedad_id);
        	$gerente=$sociedad->gerenteRepresentante;

        	$view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$sociedad_id,'gerente'=>$gerente]);
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function update(Request $request) {

    	if($request->ajax()){
        	$gerente_request = $request->all();
        	$gerente = GerenteRepresentante::find($gerente_request['sociedad_id']);
        	
        	if($gerente){

        		$gerente->update($gerente_request);
        	}else{

        		$gerente = new GerenteRepresentante($gerente_request);
            	$gerente->save();
        	}

        	$sociedad=Sociedades::find($gerente_request['sociedad_id']);
        	$gerente=$sociedad->gerenteRepresentante;

        	$view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$gerente['sociedad_id'],'gerente'=>$gerente]);

        	$sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

      
    }
}
