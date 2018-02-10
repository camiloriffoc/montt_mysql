<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\EstatutoRegimenEspecial;
use App\EstatutoRegimenGeneral;
use App\Sociedades;

class EstatutoSocialController extends Controller
{
    public function index(request $request, $sociedad_id){

    	if($request->ajax()){

    		$sociedad=Sociedades::find($sociedad_id);

    		$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$sociedad_id)->get();
        	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$sociedad_id)->get();
                	
    	$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$sociedad_id,'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function especialesStore(request $request) {

    	if($request->ajax()){

    	$new_especial = $request->all();
    	$estatuto = new EstatutoRegimenEspecial($new_especial);
    	$estatuto->save();

    	$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$new_especial['sociedad_id'])->get();
    	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$new_especial['sociedad_id'])->get();
                	
    	$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$new_especial['sociedad_id'],'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function generalesStore(request $request) {

    	if($request->ajax()){

        $file_escritura = $request->file('escritura_file');
        $file_texto   = $request->file('texto_refundido_file');

    	$new_general = $request->all();
    	$estatuto = new EstatutoRegimenGeneral($new_general);
    	$estatuto->save();


        if($file_escritura) {
            $nombre_file= str_replace(" ", "_", $file_escritura->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
            $estatuto->update(['escritura_file'=>$nombre_file]);              
            $file_escritura->move('uploads/estatutos', str_replace(" ","_",$file_escritura->getClientOriginalName()));
        }

        if($file_texto) {
            $nombre_texto= str_replace(" ", "_", $file_texto->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
            $estatuto->update(['texto_refundido_file'=>$nombre_texto]);              
           $file_texto->move('uploads/estatutos', str_replace(" ","_",$file_texto->getClientOriginalName()));
        }


    	$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$new_general['sociedad_id'])->get();
    	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$new_general['sociedad_id'])->get();
                	
    	$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$new_general['sociedad_id'],'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function generalesEdit(request $request, $id) {

    	if($request->ajax()){

    		$general = EstatutoRegimenGeneral::find($id);

    		$view = \View::make('estatutosSociales.generales_edit')->with(['id'=>$id,'general'=>$general]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function generalesUpdate(request $request) {

    	if($request->ajax()){

            $file_escritura = $request->file('escritura_file');
            $file_texto   = $request->file('texto_refundido_file');

    		$general_request = $request->all();
    		$general = EstatutoRegimenGeneral::find($general_request['id']);

            $nombre_escritura_old = $general->escritura_file;
            $nombre_texto_old = $general->texto_refundido_file;

    		$general->update($general_request);
    		$sociedad_id=$general['sociedad_id'];


            if($file_escritura) {
                $nombre_file= str_replace(" ", "_", $file_escritura->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                $estatuto->update(['escritura_file'=>$nombre_file]);              
                $file_escritura->move('uploads/estatutos', str_replace(" ","_",$file_escritura->getClientOriginalName()));

                if(\File::exists(public_path('uploads/estatutos/'.$nombre_escritura_old))){
                        \File::delete(public_path('uploads/estatutos/'.$nombre_escritura_old));
                }
            }

            if($file_texto) {
                $nombre_texto= str_replace(" ", "_", $file_texto->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                $estatuto->update(['texto_refundido_file'=>$nombre_texto]);              
               $file_texto->move('uploads/estatutos', str_replace(" ","_",$file_texto->getClientOriginalName()));

               if(\File::exists(public_path('uploads/estatutos/'.$nombre_texto_old))){
                        \File::delete(public_path('uploads/estatutos/'.$nombre_texto_old));
                }
            }


		$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$general['sociedad_id'])->get();
    	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$general['sociedad_id'])->get();

    		$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$sociedad_id,'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view; 
    }

    public function especialesEdit(request $request, $id) {

    	if($request->ajax()){

    		$especial = EstatutoRegimenEspecial::find($id);

    		$view = \View::make('estatutosSociales.especiales_edit')->with(['id'=>$id,'especial'=>$especial]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function especialesUpdate(request $request) {

    	if($request->ajax()){

    		$especial_request = $request->all();
    		$especial = EstatutoRegimenEspecial::find($especial_request['id']);
    		$especial->update($especial_request);
    		$sociedad_id=$especial['sociedad_id'];

		$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$especial['sociedad_id'])->get();
    	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$especial['sociedad_id'])->get();

    		$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$sociedad_id,'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function especialesDelete(request $request, $id) {

    	if($request->ajax()){

    		$especial = EstatutoRegimenEspecial::find($id);
    		$sociedad_id= $especial['sociedad_id'];
    		$especial->delete();

		$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$sociedad_id)->get();
    	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$sociedad_id)->get();

    		$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$sociedad_id,'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function generalesDelete(request $request, $id) {

    	if($request->ajax()){

    		$general = EstatutoRegimenGeneral::find($id);
    		$sociedad_id= $general['sociedad_id'];
    		$general->delete();

		$generales = EstatutoRegimenGeneral::where("sociedad_id","=",$sociedad_id)->get();
    	$especiales =EstatutoRegimenEspecial::where("sociedad_id","=",$sociedad_id)->get();

    		$view = \View::make('estatutosSociales.index')->with(['sociedad_id'=>$sociedad_id,'generales'=>$generales, 'especiales'=>$especiales]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

}
