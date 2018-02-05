<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\GerenteRepresentante;
use App\Sociedades;
use App\Accionista;

class GerenteRepresentanteController extends Controller
{
    
    public function index(Request $request, $sociedad_id){

        if($request->ajax()){

            //primero se cheque si hay un mmgvo gerente

            $sociedad=Sociedades::find($sociedad_id);
            $gerente=$sociedad->gerentesRepresentantes;
        	$view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$sociedad_id,'gerente'=>$gerente]);
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function create (Request $request, $sociedad_id ){

        if($request->ajax()){

            $view = \View::make('gerentesRepresentantes.create')->with(['sociedad_id'=>$sociedad_id]);
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function update(Request $request) {

    	if($request->ajax()){

        	$gerente_request = $request->all();
        	$gerente = GerenteRepresentante::find($gerente_request['id']);
            $gerente->update($gerente_request);
            $sociedad_id=$gerente['sociedad_id'];

        	$sociedad=Sociedades::find($sociedad_id);
        	$gerente=$sociedad->gerentesRepresentantes;

        	$view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$sociedad_id,'gerente'=>$gerente]);

        	$sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

      
    }

    public function edit(Request $request, $id){

        if($request->ajax()){

            $gerente=GerenteRepresentante::find($id);

            $view = \View::make('gerentesRepresentantes.edit')->with(['id'=>$gerente['id'],'gerente'=>$gerente]);
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function store(Request $request) {

        if($request->ajax()){

            $gerente_request = $request->all();
            $gerente = new GerenteRepresentante($gerente_request);
            $gerente->save();

            $sociedad=Sociedades::find($gerente_request['sociedad_id']);
            $gerente=$sociedad->gerentesRepresentantes;

            $view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$gerente_request['sociedad_id'],'gerente'=>$gerente]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

      
    }

    public function delete(Request $request, $id) {

        if($request->ajax()){

            $gerente = GerenteRepresentante::find($id);
            
            $sociedad_id=$gerente['sociedad_id'];

            $gerente->delete();

            $sociedad=Sociedades::find($sociedad_id);
            $gerente=$sociedad->gerentesRepresentantes;

            $view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$sociedad_id,'gerente'=>$gerente]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }
}
