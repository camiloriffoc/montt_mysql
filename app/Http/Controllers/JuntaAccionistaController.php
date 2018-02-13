<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\JuntaAccionista;
use App\Sociedades;

class JuntaAccionistaController extends Controller
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
        ////Vista de la edición
        $sociedad = Sociedades::find($id);
        $junta_accionista = $sociedad->juntaAccionista;

        $view = \View::make('juntaAccionista.edit')->with('sociedad',$sociedad)->with('junta_accionista',$junta_accionista);

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
        if(!isset($sociedad->juntaAccionista)){
            //No existe relación (debo crear)

            ////Método para guardar en al Base de Datos
            $registro = JuntaAccionista::create($request->all());

            if($file = $request->hasFile('primera_citacion_adjunto')){
                //Obtenemos el File Input
                $primera_citacion_adjunto = $request->file('primera_citacion_adjunto');
                //Le damos un nombre único
                $nombre_primera_citacion_adjunto = uniqid().'_'.str_replace(" ", "_", $primera_citacion_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['primera_citacion_adjunto'=>$nombre_primera_citacion_adjunto]);
                //Movemos el File con el nuevo nombre
                $primera_citacion_adjunto->move('uploads/junta_accionista', $nombre_primera_citacion_adjunto);
            } 

            if($file = $request->hasFile('segunda_citacion_adjunto')){
                //Obtenemos el File Input
                $segunda_citacion_adjunto = $request->file('segunda_citacion_adjunto');
                //Le damos un nombre único
                $nombre_segunda_citacion = uniqid().'_'.str_replace(" ", "_", $segunda_citacion_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['segunda_citacion_adjunto'=>$nombre_segunda_citacion]);
                //Movemos el File con el nuevo nombre
                $segunda_citacion_adjunto->move('uploads/junta_accionista', $nombre_segunda_citacion);
            }   

            if($file = $request->hasFile('quorum_adoptar_acuerdos_adjunto')){
                //Obtenemos el File Input
                $quorum_adoptar_acuerdos_adjunto = $request->file('quorum_adoptar_acuerdos_adjunto');
                //Le damos un nombre único
                $nombre_quorum_adoptar_acuerdos_adjunto = uniqid().'_'.str_replace(" ", "_", $quorum_adoptar_acuerdos_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['quorum_adoptar_acuerdos_adjunto'=>$nombre_quorum_adoptar_acuerdos_adjunto]);
                //Movemos el File con el nuevo nombre
                $quorum_adoptar_acuerdos_adjunto->move('uploads/junta_accionista', $nombre_quorum_adoptar_acuerdos_adjunto);
            }   

            if($file = $request->hasFile('quorum_especiales_adjunto')){
                //Obtenemos el File Input
                $quorum_especiales_adjunto = $request->file('quorum_especiales_adjunto');
                //Le damos un nombre único
                $nombre_quorum_especiales_adjunto = uniqid().'_'.str_replace(" ", "_", $quorum_especiales_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['quorum_especiales_adjunto'=>$nombre_quorum_especiales_adjunto]);
                //Movemos el File con el nuevo nombre
                $quorum_especiales_adjunto->move('uploads/junta_accionista', $nombre_quorum_especiales_adjunto);
            }            
            

            $junta_accionista = $sociedad->juntaAccionista;

            $view = \View::make('juntaAccionista.edit')->with('sociedad',$sociedad)->with('junta_accionista',$junta_accionista);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 

        }else{
            //Si existe relación (debo Actualizar)
            $registro = JuntaAccionista::find($sociedad->juntaAccionista->id);
            $registro->update($request->all());

            if($file = $request->hasFile('primera_citacion_adjunto')){
                //Obtenemos el File Input
                $primera_citacion_adjunto = $request->file('primera_citacion_adjunto');
                //Le damos un nombre único
                $nombre_primera_citacion_adjunto = uniqid().'_'.str_replace(" ", "_", $primera_citacion_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['primera_citacion_adjunto'=>$nombre_primera_citacion_adjunto]);
                //Movemos el File con el nuevo nombre
                $primera_citacion_adjunto->move('uploads/junta_accionista', $nombre_primera_citacion_adjunto);
            } 

            if($file = $request->hasFile('segunda_citacion')){
                //Obtenemos el File Input
                $segunda_citacion = $request->file('segunda_citacion');
                //Le damos un nombre único
                $nombre_segunda_citacion = uniqid().'_'.str_replace(" ", "_", $segunda_citacion->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['segunda_citacion'=>$nombre_segunda_citacion]);
                //Movemos el File con el nuevo nombre
                $segunda_citacion->move('uploads/junta_accionista', $nombre_segunda_citacion);
            }   

            if($file = $request->hasFile('quorum_adoptar_acuerdos_adjunto')){
                //Obtenemos el File Input
                $quorum_adoptar_acuerdos_adjunto = $request->file('quorum_adoptar_acuerdos_adjunto');
                //Le damos un nombre único
                $nombre_quorum_adoptar_acuerdos_adjunto = uniqid().'_'.str_replace(" ", "_", $quorum_adoptar_acuerdos_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['quorum_adoptar_acuerdos_adjunto'=>$nombre_quorum_adoptar_acuerdos_adjunto]);
                //Movemos el File con el nuevo nombre
                $quorum_adoptar_acuerdos_adjunto->move('uploads/junta_accionista', $nombre_quorum_adoptar_acuerdos_adjunto);
            }   

            if($file = $request->hasFile('quorum_especiales_adjunto')){
                //Obtenemos el File Input
                $quorum_especiales_adjunto = $request->file('quorum_especiales_adjunto');
                //Le damos un nombre único
                $nombre_quorum_especiales_adjunto = uniqid().'_'.str_replace(" ", "_", $quorum_especiales_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['quorum_especiales_adjunto'=>$nombre_quorum_especiales_adjunto]);
                //Movemos el File con el nuevo nombre
                $quorum_especiales_adjunto->move('uploads/junta_accionista', $nombre_quorum_especiales_adjunto);
            }            
            
             $junta_accionista = $sociedad->juntaAccionista;

            $view = \View::make('juntaAccionista.edit')->with('sociedad',$sociedad)->with('junta_accionista',$junta_accionista);

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
