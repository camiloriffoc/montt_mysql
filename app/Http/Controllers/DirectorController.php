<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
use App\Secretario;

class DirectorController extends Controller
{
    public function index($id) {

    	//Se llama al index con el id del directorio	
    	return view('directores.index')->with('id',$id);

    }

    public function store(request $request){

    	$new_director = $request->all();

        $director = new Director($new_director);
        $director->save();
        
        //Se retorna al index con el id del directorio y el check de que se guardo
        return view('directores.index')->with(['id'=>$new_director['directorio_id'],'check'=>1]);
   
    }

    public function show($id) {
    	//Se buscan los directores que pertenescan al directorio y se encuentren activos
    	$directores = Director::where("directorio_id","=",$id)->where('status','=','1')->get();
    	$secretario = Secretario::find($id);

    	//Se retorna al index con el id del directorio, los directores y el secretario
    	return view('directores.show')->with(['id'=>$id, 'directores'=>$directores, 'secretario'=>$secretario]);

    }

    public function edit($directorio_id,$id){

    	$director= Director::find($id);

    	//Rettorna al edit todos los datos del director, el id del directorio esta en "$director"
    	return view('directores.edit')->with(['director'=>$director, 'id'=>'no']);


    }

    public function update(request $request){

    	$director_update = $request->all();
        $director = Director::find($director_update['id']);
        $directorio_id=$director['directorio_id'];
        $director->update($director_update);

        $directores = Director::where("directorio_id","=",$directorio_id)->where('status','=','1')->get();
    	$secretario = Secretario::find($directorio_id);

    	//Se retorna al index con el id del directorio, los directores, el secretario y el check de modificacion

    	return view('directores.show')->with(['id'=>$directorio_id, 'directores'=>$directores, 'secretario'=>$secretario, 'check'=>1]);

        //return redirect()->action('DirectorController@show', ['id' => $directorio_id]);

    }

    public function delete($directorio_id,$id){

        $director = Director::find($id);
        $directorio_id=$director['directorio_id'];
        //para eliminar un director se coloca su status en 0
        $director->update(['status' => '0']);

        $directores = Director::where("directorio_id","=",$directorio_id)->where('status','=','1')->get();
    	$secretario = Secretario::find($directorio_id);

    	//Se retorna al index con el id del directorio, los directores, el secretario y el check de eliminacion

    	return view('directores.show')->with(['id'=>$directorio_id, 'directores'=>$directores, 'secretario'=>$secretario, 'delete'=>1]);

    }
}
