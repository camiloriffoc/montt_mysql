<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Directorio;


use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
    {   
        $directorio = Directorio::where('sociedad_id','=',$id)->first();

        // return view('directorios.edit')->with(['directorio'=>$directorio,'sociedad_id'=>$id]);

        $view = \View::make('directorios.edit')->with(['directorio'=>$directorio,'sociedad_id'=>$id]);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    public function store(Request $request)
    {   

        if($request->ajax()){
           //una sociedad solo puede tener un directorio 
            $file = $request->file('actas_de_directorio');
            if($file) {
                $nombre = $file->getClientOriginalName();
            }
        	
            $new_directorio = $request->all();

            //se consulta si la sociedad tiene directorio, si tiene se edita si no se crea uno
            $directorio = Directorio::where('sociedad_id','=',$new_directorio['sociedad_id'])->first();
        	
        	if($directorio){
                $nombreOld = $directorio->actas_de_directorio;

            	$directorio->update($new_directorio);
                
                if($file)
                {
                    $id=$directorio->id;
                    //obtenemos el campo file definido en el formulario
                    $directorio->update(['actas_de_directorio'=>$nombre]);              
                    $file->move('uploads', $file->getClientOriginalName());

                    if(\File::exists(public_path('uploads/'.$nombreOld))){
                        \File::delete(public_path('uploads/'.$nombreOld));
                    }
                }
        	}
        	else{
                $directorio = new Directorio($new_directorio);
                $directorio->save();
                $id=$directorio->id;
                //obtenemos el campo file definido en el formulario
                if($file)
                {
                    $update= Directorio::find($id);
                    $update->update(['actas_de_directorio'=>$nombre]);
                    
                    $file->move('uploads', $file->getClientOriginalName());
        	   }
            }

            $directorio = Directorio::where('sociedad_id','=',$new_directorio['sociedad_id'])->first();
        
            //return view('directorios.edit')->with(['sociedad_id'=>$new_directorio['sociedad_id'],'directorio'=>$directorio, 'check'=>1]);

            $view = \View::make('directorios.edit')->with(['sociedad_id'=>$new_directorio['sociedad_id'],'directorio'=>$directorio]);

            
                $sections = $view->renderSections();
                return Response::json($sections['myContent']); 
        }else return "";
    }

}
