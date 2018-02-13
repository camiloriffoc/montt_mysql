<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\FormaResolucionConflicto;
use App\Sociedades;

class FormaResolucionConflictosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit(Request $request,$id)
    {
        //
        //Vista de la edición
        $sociedad = Sociedades::find($id);
        $forma_resolucion_conflictos = $sociedad->formaResolucionConflicto;

        $view = \View::make('formaResolucionConflictos.edit')->with('sociedad',$sociedad)->with('forma_resolucion_conflictos',$forma_resolucion_conflictos);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
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
        $sociedad = Sociedades::find($request->input('sociedad_id'));
        //dd(isset($sociedad->fiscalizador));
        //Comprobamos si existe relación
        if(!isset($sociedad->formaResolucionConflicto)){
            //No existe relación (debo crear)

            ////Método para guardar en al Base de Datos
            $registro = FormaResolucionConflicto::create($request->all());

            if($file = $request->hasFile('clausula_estatutos_adjunto')){
                //Obtenemos el File Input
                $clausula_estatutos_adjunto = $request->file('clausula_estatutos_adjunto');
                //Le damos un nombre único
                $nombre_clausula_estatutos_adjunto = uniqid().'_'.str_replace(" ", "_", $clausula_estatutos_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['clausula_estatutos_adjunto'=>$nombre_clausula_estatutos_adjunto]);
                //Movemos el File con el nuevo nombre
                $clausula_estatutos_adjunto->move('uploads/forma_resolucion_conflictos', $nombre_clausula_estatutos_adjunto);
            }          
            
            $sociedad = Sociedades::find($request->input('sociedad_id'));
            $forma_resolucion_conflictos = $sociedad->formaResolucionConflicto;

            $view = \View::make('formaResolucionConflictos.edit')->with('sociedad',$sociedad)->with('forma_resolucion_conflictos',$forma_resolucion_conflictos);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 

        }else{
            //Si existe relación (debo Actualizar)
            $registro = FormaResolucionConflicto::find($sociedad->formaResolucionConflicto->id);

            $adjunto_antiguo = $registro->clausula_estatutos_adjunto;

            if(file_exists(public_path('uploads/forma_resolucion_conflictos/'.$adjunto_antiguo))){
              unlink(public_path('uploads/forma_resolucion_conflictos/'.$adjunto_antiguo));
          }

          
          $registro->update($request->all());

            //Obtenemos el File Input
          $clausula_estatutos_adjunto = $request->file('clausula_estatutos_adjunto');
            //Le damos un nombre único
          $nombre_clausula_estatutos_adjunto = uniqid().'_'.str_replace(" ", "_", $clausula_estatutos_adjunto->getClientOriginalName());
            //Actualizamos el campo del nombre del archivo adjunto
          $registro->update(['clausula_estatutos_adjunto'=>$nombre_clausula_estatutos_adjunto]);
            //Movemos el File con el nuevo nombre
          $clausula_estatutos_adjunto->move('uploads/forma_resolucion_conflictos', $nombre_clausula_estatutos_adjunto);

          $sociedad = Sociedades::find($request->input('sociedad_id'));
          $forma_resolucion_conflictos = $sociedad->formaResolucionConflicto;

          $view = \View::make('formaResolucionConflictos.edit')->with('sociedad',$sociedad)->with('forma_resolucion_conflictos',$forma_resolucion_conflictos);

          $sections = $view->renderSections();
          return Response::json($sections['myContent']); 
      }
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
