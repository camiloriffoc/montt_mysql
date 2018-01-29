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

            //un directorio solo puede tener un secretario    
        	$new_secretario = $request->all();
            //se consulta si el directrio tiene secretario, si tiene se edita si no se crea uno
            $secretario = Secretario::where('directorio_id','=',$new_secretario['directorio_id'])->where('status','=','1')->first();
        	
        	if($secretario){

            	$secretario->update($new_secretario);
        	}
        	else{

        		$secretario = new Secretario($new_secretario);
            	$secretario->save();

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
