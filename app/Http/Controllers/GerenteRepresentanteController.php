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

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');

        	$gerente_request = $request->all();

        	$gerente = GerenteRepresentante::find($gerente_request['id']);

            $nombre_rut_old = $gerente->rut_file;
            $nombre_fecha_old = $gerente->fecha_nombramiento_file;

            $gerente->update($gerente_request);
            $sociedad_id=$gerente['sociedad_id'];


            if($file_fecha) {
                $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $gerente->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                $file_fecha->move('uploads/gerentes', str_replace(" ","_",$file_fecha->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/gerentes/'.$nombre_fecha_old))){
                        \File::delete(public_path('uploads/gerentes/'.$nombre_fecha_old));
                }
            }
            if($file_rut) {
                $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $gerente->update(['rut_file'=>$nombre_rut]);              
                $file_rut->move('uploads/gerentes', str_replace(" ","_",$file_rut->getClientOriginalName()));

                if(\File::exists(public_path('uploads/gerentes/'.$nombre_rut_old))){
                        \File::delete(public_path('uploads/gerentes/'.$nombre_rut_old));
                }
            }


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

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');

            $gerente_request = $request->all();
            $gerente = new GerenteRepresentante($gerente_request);
            $gerente->save();

            if($file_fecha) {
                $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $gerente->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                $file_fecha->move('uploads/gerentes', str_replace(" ","_",$file_fecha->getClientOriginalName()));
            }

            if($file_rut) {
                $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $gerente->update(['rut_file'=>$nombre_rut]);              
                $file_rut->move('uploads/gerentes', str_replace(" ","_",$file_rut->getClientOriginalName()));
            }

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
            
            $nombre_rut_old = $gerente->rut_file;
            $nombre_fecha_old = $gerente->fecha_nombramiento_file;

            $sociedad_id=$gerente['sociedad_id'];

            $gerente->delete();

            if(\File::exists(public_path('uploads/gerentes/'.$nombre_rut_old))){
                \File::delete(public_path('uploads/gerentes/'.$nombre_rut_old));
            }

            if(\File::exists(public_path('uploads/gerentes/'.$nombre_fecha_old))){
                \File::delete(public_path('uploads/gerentes/'.$nombre_fecha_old));
            }

            $sociedad=Sociedades::find($sociedad_id);
            $gerente=$sociedad->gerentesRepresentantes;

            $view = \View::make('gerentesRepresentantes.index')->with(['sociedad_id'=>$sociedad_id,'gerente'=>$gerente]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }
}
