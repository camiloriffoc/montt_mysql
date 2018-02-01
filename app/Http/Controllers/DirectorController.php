<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Director;
use App\Secretario;

class DirectorController extends Controller
{
    public function index(Request $request, $id) {

    	//Se llama al index con el id del directorio	
    	//return view('directores.index')->with('id',$id);

        $view = \View::make('directores.index')->with('id',$id);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function store(request $request){

        if($request->ajax()){

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');

        	$new_director = $request->all();

            $director = new Director($new_director);
            $director->save();

            if($file_fecha) {
                $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $director->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                $file_fecha->move('uploads/directores', str_replace(" ","_",$file_fecha->getClientOriginalName()));
            }

            if($file_rut) {
                $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $director->update(['rut_file'=>$nombre_rut]);              
                $file_rut->move('uploads/directores', str_replace(" ","_",$file_rut->getClientOriginalName()));
            }
            
            //Se retorna al index con el id del directorio y el check de que se guardo
            //return view('directores.index')->with(['id'=>$new_director['directorio_id'],'check'=>1]);

            $view = \View::make('directores.index')->with(['id'=>$new_director['directorio_id'],'check'=>1]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";    
   
    }

    public function show(request $request, $id) {

        if($request->ajax()){
        	//Se buscan los directores que pertenescan al directorio y se encuentren activos
        	$directores = Director::where("directorio_id","=",$id)->where('status','=','1')->get();
        	$secretario = Secretario::where('directorio_id','=',$id)->where('status','=','1')->first();

        	//Se retorna al index con el id del directorio, los directores y el secretario
        	//return view('directores.show')->with(['id'=>$id, 'directores'=>$directores, 'secretario'=>$secretario]);
            
            $view = \View::make('directores.show')->with(['id'=>$id, 'directores'=>$directores, 'secretario'=>$secretario]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";        

    }

    public function edit(request $request, $directorio_id,$id){

        if($request->ajax()){
        	$director= Director::find($id);

        	//Rettorna al edit todos los datos del director, el id del directorio esta en "$director"
        	//return view('directores.edit')->with(['director'=>$director, 'id'=>'no']);

            $view = \View::make('directores.edit')->with(['director'=>$director, 'id'=>'no']);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";            

    }

    public function update(request $request){

        if($request->ajax()){

            $file_fecha = $request->file('fecha_nombramiento_file');
            $file_rut   = $request->file('rut_file');

        	$director_update = $request->all();
            $director = Director::find($director_update['id']);

            //los nombres de los archivos adjuntos antiguos
            $nombre_rut_old = $director->rut_file;
            $nombre_fecha_old = $director->fecha_nombramiento_file;

            $directorio_id=$director['directorio_id'];
            $director->update($director_update);

            if($file_fecha) {
                $nombre_fecha= str_replace(" ", "_", $file_fecha->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $director->update(['fecha_nombramiento_file'=>$nombre_fecha]);              
                $file_fecha->move('uploads/directores', str_replace(" ","_",$file_fecha->getClientOriginalName()));
                
                if(\File::exists(public_path('uploads/directores'.$nombre_fecha_old))){
                        \File::delete(public_path('uploads/directores/'.$nombre_fecha_old));
                }
            }

            if($file_rut) {
                $nombre_rut= str_replace(" ", "_", $file_rut->getClientOriginalName());
                //obtenemos el campo file definido en el formulario
                $director->update(['rut_file'=>$nombre_rut]);              
                $file_rut->move('uploads/directores', str_replace(" ","_",$file_rut->getClientOriginalName()));

                if(\File::exists(public_path('uploads/directores/'.$nombre_rut_old))){
                        \File::delete(public_path('uploads/directores/'.$nombre_rut_old));
                }
            }




            $directores = Director::where("directorio_id","=",$directorio_id)->where('status','=','1')->get();
        	$secretario = Secretario::where('directorio_id','=',$directorio_id)->where('status','=','1')->first();

        	
            $view = \View::make('directores.show')->with(['id'=>$directorio_id, 'directores'=>$directores, 'secretario'=>$secretario]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";       

    }

    public function delete(request $request,$directorio_id,$id){

        if($request->ajax()){

            $director = Director::find($id);
            $directorio_id=$director['directorio_id'];

            $nombre_rut_old = $director->rut_file;
            $nombre_fecha_old = $director->fecha_nombramiento_file;
            //para eliminar un director se coloca su status en 0
            $director->delete();

            if(\File::exists(public_path('uploads/directores/'.$nombre_rut_old))){
                \File::delete(public_path('uploads/directores/'.$nombre_rut_old));
            }

            if(\File::exists(public_path('uploads/directores/'.$nombre_fecha_old))){
                \File::delete(public_path('uploads/directores/'.$nombre_fecha_old));
            }

            $directores = Director::where("directorio_id","=",$directorio_id)->where('status','=','1')->get();
        	$secretario = Secretario::find($directorio_id);

        	//Se retorna al index con el id del directorio, los directores, el secretario y el check de eliminacion

        	//return view('directores.show')->with(['id'=>$directorio_id, 'directores'=>$directores, 'secretario'=>$secretario, 'delete'=>1]);

            $view = \View::make('directores.show')->with(['id'=>$directorio_id, 'directores'=>$directores, 'secretario'=>$secretario]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return "";  

    }
}
