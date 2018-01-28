<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secretario;

class SecretarioController extends Controller
{
    public function index($id) {

    	$secretario = Secretario::where('directorio_id','=',$id)->where('status','=','1')->first();
    	
    	return view('secretarios.index')->with(['id'=>$id, 'secretario'=>$secretario]);

    }

    public function store(request $request){

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
    
        return view('secretarios.show')->with(['id'=>$secretario['directorio_id'],'secretario'=>$secretario]);

    	// return redirect()->action('SecretarioController@index', ['id' => $new_secretario['directorio_id']]);
   
    }

    public function delete($directorio_id){

        $secretario= Secretario::where('directorio_id','=',$directorio_id)->where('status','=','1')->first();
    
        //para eliminar un secretario su status es 
        $director->update(['status' => '0']);
        
        return view('secretarios.index')->with(['id'=>$directorio_id]);

    }
}
