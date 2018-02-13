<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Accionista;
use App\Sociedades;
use App\RegistroAccionista;
use Session;

class RegistroAccionistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        //
        //Asigno a la session la sociedad correspondiente
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');
        //obtendo todos los accionistas*********
        $registro_accionistas = Sociedades::find($id)->accionistas()->orderBy('accionistas.id','DESC')->get();
        $registro_accionista_adjunto = $sociedad->registroAccionista;


        $view = \View::make('registroAccionista.index')->with('registro_accionistas',$registro_accionistas)->with('sociedad',$sociedad)->with('registro_accionista_adjunto',$registro_accionista_adjunto);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->ajax()){
            $id = $request->input('sociedad_id');

            //retorno vista y lista de todos los giros
            $this->getSociedad($id);
            $sociedad = Session::get('sociedad');

            if(!isset($sociedad->registroAccionista)){
                //Debo Crear
                  //Obtenemos el File Input
              $registro_accionista_adjunto = $request->file('registro_accionista_adjunto');
              $nombre_registro_accionista_adjunto = uniqid().'_'.str_replace(" ", "_", $registro_accionista_adjunto->getClientOriginalName());

            ////Método para guardar en al Base de Datos
              $registro = RegistroAccionista::create($request->all());
              $registro->update(['registro_accionista_adjunto'=>$nombre_registro_accionista_adjunto]);
              $registro_accionista_adjunto->move('uploads/registro_accionistas', $nombre_registro_accionista_adjunto);

            //obtendo todos los accionistas*********
              $sociedad = Sociedades::find($request->input('sociedad_id'));
              $registro_accionistas = $sociedad->accionistas()->orderBy('accionistas.id','DESC')->get();
              $registro_accionista_adjunto = $sociedad->registroAccionista;

              if(isset($registro_accionistas)){
                $registro_accionistas = [];
            }

            $view = \View::make('registroAccionista.index')->with('registro_accionistas',$registro_accionistas)->with('sociedad',$sociedad)->with('registro_accionista_adjunto',$registro_accionista_adjunto);


            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 


        }else{
                //Debo Actualizar
            //Si existe relación (debo Actualizar)
            $registro = RegistroAccionista::find($sociedad->registroAccionista->id);
            $adjunto_antiguo = $registro->registro_accionista_adjunto;

            if(file_exists(public_path('uploads/registro_accionistas/'.$adjunto_antiguo))){
                unlink(public_path('uploads/registro_accionistas/'.$adjunto_antiguo));
            }

            $registro->update($request->all());

            $registro_accionista_adjunto = $request->file('registro_accionista_adjunto');
            $nombre_registro_accionista_adjunto = uniqid().'_'.str_replace(" ", "_", $registro_accionista_adjunto->getClientOriginalName());

            $registro->update(['registro_accionista_adjunto'=>$nombre_registro_accionista_adjunto]);
            $registro_accionista_adjunto->move('uploads/registro_accionistas', $nombre_registro_accionista_adjunto);

            //obtendo todos los accionistas*********
            $sociedad = Sociedades::find($request->input('sociedad_id'));
            $registro_accionistas = $sociedad->accionistas()->orderBy('accionistas.id','DESC')->get();
            $registro_accionista_adjunto = $sociedad->registroAccionista;

            if(isset($registro_accionistas)){
                $registro_accionistas = [];
            }

            $view = \View::make('registroAccionista.index')->with('registro_accionistas',$registro_accionistas)->with('sociedad',$sociedad)->with('registro_accionista_adjunto',$registro_accionista_adjunto);


            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 


        }


        if(isset($sociedad->registroAccionista)){
            $adjunto_antiguo = $sociedad->registroAccionista->registro_accionista_adjunto;
            if(file_exists(public_path('uploads/registro_accionistas/'.$adjunto_antiguo))){
              unlink(public_path('uploads/registro_accionistas/'.$adjunto_antiguo));
          }
      }




  }else{
    return response()->json([
        'response' => 'Error en guardar',
    ]);
}
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
