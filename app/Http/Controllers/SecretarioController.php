<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;
use App\Secretario;

class SecretarioController extends Controller
{
    public function index(request $request, $id) {

        if($request->ajax()){

        	$secretario = Secretario::where('directorio_id','=',$id)->where('status','=','1')->first();
        	
        	//return view('secretarios.index')->with(['id'=>$id, 'secretario'=>$secretario]);

            $view = \View::make('secretarios.show')->with(['id'=>$id, 'secretario'=>$secretario]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";   

    }

    public function store(request $request){

        if($request->ajax()){

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');

            //un directorio solo puede tener un secretario    
        	$new_secretario = $request->all();
            //se consulta si el directrio tiene secretario, si tiene se edita si no se crea uno
            $secretario = Secretario::where('directorio_id','=',$new_secretario['directorio_id'])->where('status','=','1')->first();
        	
        	if($secretario){
                
                $nombre_rut_old = $secretario->rut_file;
                $nombre_fecha_old = $secretario->fecha_nombramiento_file;
            	
                $secretario->update($new_secretario);

                if($file_fecha) {
                    $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $secretario->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                    $file_fecha->move('uploads/secretarios', str_replace(" ","_",$file_fecha->getClientOriginalName()));
                
                    if(\File::exists(public_path('uploads/secretarios'.$nombre_fecha_old))){
                        \File::delete(public_path('uploads/secretarios/'.$nombre_fecha_old));
                    }
                }
                if($file_rut) {
                    $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $secretario->update(['rut_file'=>$nombre_rut]);              
                    $file_rut->move('uploads/secretarios', str_replace(" ","_",$file_rut->getClientOriginalName()));

                    if(\File::exists(public_path('uploads/secretarios'.$nombre_rut_old))){
                            \File::delete(public_path('uploads/secretarios/'.$nombre_rut_old));
                    }
                }
        	}
        	else{

        		$secretario = new Secretario($new_secretario);
            	$secretario->save();

                if($file_fecha)
                {   
                    $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $secretario->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                    $file_fecha->move('uploads/secretarios', str_replace(" ","_",$file_fecha->getClientOriginalName()));
                }
                if($file_rut) 
                {
                    $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                    //obtenemos el campo file definido en el formulario
                    $secretario->update(['rut_file'=>$nombre_rut]);              
                    $file_rut->move('uploads/secretarios', str_replace(" ","_",$file_rut->getClientOriginalName()));
                }


        	}

             $secretario = Secretario::where('directorio_id','=',$new_secretario['directorio_id'])->where('status','=','1')->first();
        
            //return view('secretarios.show')->with(['id'=>$secretario['directorio_id'],'secretario'=>$secretario]);

        	// return redirect()->action('SecretarioController@index', ['id' => $new_secretario['directorio_id']]); old

            $view = \View::make('secretarios.show')->with(['id'=>$secretario['directorio_id'],'secretario'=>$secretario]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";   
   
    }

    public function delete(request $request, $directorio_id){

        if($request->ajax()){

            $secretario= Secretario::where('directorio_id','=',$directorio_id)->where('status','=','1')->first();
        
            //para eliminar un secretario su status es 
            $secretario->update(['status' => '0']);
            
            //return view('secretarios.index')->with(['id'=>$directorio_id]);

             $view = \View::make('secretarios.index')->with(['id'=>$directorio_id]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";   

    }
}
