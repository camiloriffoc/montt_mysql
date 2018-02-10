<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\PoderesApoderados;
use App\Sociedades;

use Illuminate\Http\Request;

class PoderesApoderadosController extends Controller
{
    public function index(Request $request, $sociedad_id) {;

        if($request->ajax()){

        	$sociedad=Sociedades::find($sociedad_id);
        	$poderes=$sociedad->poderesApoderados;

        	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$sociedad_id,'poderes'=>$poderes]);
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function create(Request $request, $sociedad_id) {;

        $view = \View::make('poderesApoderados.create')->with('sociedad_id',$sociedad_id);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function store(Request $request) {

		if($request->ajax()){

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');
            $file_consta_poder = $request->file('instrumento_consta_poder_file');
            $file_poder_inscrito   = $request->file('poder_inscrito_cbr_file');
            $file_revocacion_poder= $request->file('instrumento_revocacion_de_poder_file');
            $file_renovacion_cbr   = $request->file('inscripcion_renovacion_cbr_file');


			$request_poder = $request->all();
			
            $poder = new PoderesApoderados($request_poder);
          	$poder->save();

            if($file_fecha) {
                $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
             $file_fecha->move('uploads/poderes', str_replace(" ","_",$file_fecha->getClientOriginalName()));
            }
            if($file_rut) {
                $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['rut_file'=>$nombre_rut]);              
               $file_rut->move('uploads/poderes', str_replace(" ","_",$file_rut->getClientOriginalName()));
            }
            if($file_consta_poder) {
                $nombre_consta_poder= str_replace(" ", "_", $file_consta_poder->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['instrumento_consta_poder_file'=>$nombre_consta_poder]);              
               $file_consta_poder->move('uploads/poderes', str_replace(" ","_",$file_consta_poder->getClientOriginalName()));
            }
            if($file_poder_inscrito) {
              $nombre_poder_inscrito= str_replace(" ", "_", $file_poder_inscrito->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['poder_inscrito_cbr_file'=>$nombre_poder_inscrito]);              
               $file_poder_inscrito->move('uploads/poderes', str_replace(" ","_",$file_poder_inscrito->getClientOriginalName()));
            }
            if($file_revocacion_poder) {
              $nombre_revocacion_poder= str_replace(" ", "_", $file_revocacion_poder->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['instrumento_revocacion_de_poder_file'=>$nombre_revocacion_poder]);              
               $file_revocacion_poder->move('uploads/poderes', str_replace(" ","_",$file_revocacion_poder->getClientOriginalName()));
            }
            if($file_renovacion_cbr) {
              $nombre_renovacion_cbr= str_replace(" ", "_", $file_renovacion_cbr->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['inscripcion_renovacion_cbr_file'=>$nombre_renovacion_cbr]);              
               $file_renovacion_cbr->move('uploads/poderes', str_replace(" ","_",$file_renovacion_cbr->getClientOriginalName()));
            }


          	$sociedad=Sociedades::find($request_poder['sociedad_id']);
        	$poderes=$sociedad->poderesApoderados;

          	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$request_poder['sociedad_id'],'poderes'=>$poderes]);

  	     	$sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;


    }

    public function edit(Request $request, $poder_id) {;

        if($request->ajax()){
        	
        	$poder = PoderesApoderados::find($poder_id);
        	
        	$view = \View::make('poderesApoderados.edit')->with(['poder_id'=>$poder_id, 'poder'=>$poder]);
        
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function update(Request $request) {

    	if($request->ajax()){

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');
            $file_consta_poder = $request->file('instrumento_consta_poder_file');
            $file_poder_inscrito   = $request->file('poder_inscrito_cbr_file');
            $file_revocacion_poder = $request->file('instrumento_revocacion_de_poder_file');
            $file_renovacion_cbr   = $request->file('inscripcion_renovacion_cbr_file');

    		$request_poder= $request->all();
    		$poder = PoderesApoderados::find($request_poder['id']);
    		
            //los nombres de los archivos adjuntos antiguos
            $fecha_nombramiento_file_old = $poder->fecha_nombramiento_file;
            $rut_file_old = $poder->rut_file;
            $instrumento_consta_poder_file_old = $poder->instrumento_consta_poder_file;
            $poder_inscrito_cbr_file_old = $poder->poder_inscrito_cbr_file;
            $instrumento_revocacion_de_poder_file_old = $poder->instrumento_revocacion_de_poder_file;
            $inscripcion_renovacion_cbr_file_old = $poder->inscripcion_renovacion_cbr_file;

            $poder->update($request_poder);

            if($file_fecha) {
                $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                $file_fecha->move('uploads/poderes', str_replace(" ","_",$file_fecha->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/poderes/'.$fecha_nombramiento_file_old))){
                        \File::delete(public_path('uploads/poderes/'.$fecha_nombramiento_file_old));
                }
            }

            if($file_rut) {
                $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['rut_file'=>$nombre_fecha]);              
                $file_rut->move('uploads/poderes', str_replace(" ","_",$file_rut->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/poderes/'.$rut_file_old))){
                        \File::delete(public_path('uploads/poderes/'.$rut_file_old));
                }
            }

            if($file_consta_poder) {
                $nombre_consta_poder = str_replace(" ", "_", $file_consta_poder->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['instrumento_consta_poder_file'=>$nombre_consta_poder]);              
                $file_consta_poder->move('uploads/poderes', str_replace(" ","_",$file_consta_poder->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/poderes/'.$instrumento_consta_poder_file_old))){
                        \File::delete(public_path('uploads/poderes/'.$instrumento_consta_poder_file_old));
                }
            }

            if($file_poder_inscrito) {
                $nombre_poder_inscrito = str_replace(" ", "_", $file_poder_inscrito->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['poder_inscrito_cbr_file'=>$nombre_poder_inscrito]);              
                $file_poder_inscrito->move('uploads/poderes', str_replace(" ","_",$file_poder_inscrito->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/poderes/'.$poder_inscrito_cbr_file_old))){
                        \File::delete(public_path('uploads/poderes/'.$poder_inscrito_cbr_file_old));
                }
            }

            if($file_revocacion_poder) {
                $nombre_revocacion_poder = str_replace(" ", "_", $file_revocacion_poder->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['instrumento_revocacion_de_poder_file'=>$nombre_revocacion_poder]);              
                $file_revocacion_poder->move('uploads/poderes', str_replace(" ","_",$file_revocacion_poder->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/poderes/'.$instrumento_revocacion_de_poder_file_old))){
                        \File::delete(public_path('uploads/poderes/'.$instrumento_revocacion_de_poder_file_old));
                }
            }

            if($file_renovacion_cbr) {
                $nombre_revocacion_cbr = str_replace(" ", "_", $file_renovacion_cbr->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $poder->update(['inscripcion_renovacion_cbr_file'=>$nombre_revocacion_cbr]);              
                $file_renovacion_cbr->move('uploads/poderes', str_replace(" ","_",$file_renovacion_cbr->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/poderes/'.$inscripcion_renovacion_cbr_file_old))){
                        \File::delete(public_path('uploads/poderes/'.$inscripcion_renovacion_cbr_file_old));
                }
            }


    		$sociedad=Sociedades::find($poder['sociedad_id']);
        	$poderes=$sociedad->poderesApoderados;

        	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$poder['sociedad_id'],'poderes'=>$poderes]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function delete(Request $request, $id) {

    	if($request->ajax()){

    		$request_poder= $request->all();
    		$poder = PoderesApoderados::find($id);

            //los nombres de los archivos adjuntos antiguos
            $fecha_nombramiento_file_old = $poder->fecha_nombramiento_file;
            $rut_file_old = $poder->rut_file;
            $instrumento_consta_poder_file_old = $poder->instrumento_consta_poder_file;
            $poder_inscrito_cbr_file_old = $poder->poder_inscrito_cbr_file;
            $instrumento_revocacion_de_poder_file_old = $poder->instrumento_revocacion_de_poder_file;
            $inscripcion_renovacion_cbr_file_old = $poder->inscripcion_renovacion_cbr_file;

    		$sociedad_id = $poder['sociedad_id'];
    		$poder->delete();

            if(\File::exists(public_path('uploads/poderes/'.$fecha_nombramiento_file_old))){
                \File::delete(public_path('uploads/poderes/'.$fecha_nombramiento_file_old));
            }
            if(\File::exists(public_path('uploads/poderes/'.$rut_file_old))){
                \File::delete(public_path('uploads/poderes/'.$rut_file_old));
            }
            if(\File::exists(public_path('uploads/poderes/'.$instrumento_consta_poder_file_old))){
                \File::delete(public_path('uploads/poderes/'.$instrumento_consta_poder_file_old));
            }
            if(\File::exists(public_path('uploads/poderes/'.$poder_inscrito_cbr_file_old))){
                \File::delete(public_path('uploads/poderes/'.$poder_inscrito_cbr_file_old));
            }
            if(\File::exists(public_path('uploads/poderes/'.$instrumento_revocacion_de_poder_file_old))){
                \File::delete(public_path('uploads/poderes/'.$instrumento_revocacion_de_poder_file_old));
            }
            if(\File::exists(public_path('uploads/poderes/'.$inscripcion_renovacion_cbr_file_old))){
                \File::delete(public_path('uploads/poderes/'.$inscripcion_renovacion_cbr_file_old));
            }

    		$sociedad=Sociedades::find($poder['sociedad_id']);
        	$poderes=$sociedad->poderesApoderados;

        	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$sociedad_id,'poderes'=>$poderes]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }



}
