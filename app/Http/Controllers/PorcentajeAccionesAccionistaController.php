<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Accionista;
use App\PorcentajeAccionesAccionista;
use Session;

class PorcentajeAccionesAccionistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        //obtendo el dato del accionista
        $accionista = Accionista::find($id);
        //retorno vista y lista de todos los porcentajes por accionistas
        $porcentajesAccionesAccionistas = $accionista->porcentajeAccionesAccionistas;

        $view = \View::make('porcentajeAccionesAccionista.index')->with('accionista',$accionista)->with('porcentajesAccionesAccionistas',$porcentajesAccionesAccionistas);

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
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            ////Método para guardar en al Base de Datos  nuevo porcentaje
            PorcentajeAccionesAccionista::create($request->all());

            $id = $request->input('accionista_id');

            $accionista = Accionista::find($id);
            //obtendo todas las sucursales
            $porcentajesAccionesAccionistas = $accionista->porcentajeAccionesAccionistas;

            //retorno vista y lista de todas las sucursales
            $view = \View::make('porcentajeAccionesAccionista.index')->with('accionista',$accionista)->with('porcentajesAccionesAccionistas',$porcentajesAccionesAccionistas);

            
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 

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
    public function edit(Request $request,$id)
    {
        //
        //Vista de la edición de un porcentaje de acciones
        $porcentajeAA = PorcentajeAccionesAccionista::find($id);
        $accionista = Accionista::find($porcentajeAA->accionista_id);

        $view = \View::make('porcentajeAccionesAccionista.edit')->with('porcentajeAA',$porcentajeAA)->with('accionista',$accionista);

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
        if($request->ajax()){
            ////Actualizamos una sucursal
            $input = $request->all();
            $porcentajeAccionesAccionista = PorcentajeAccionesAccionista::find($id);
            $porcentajeAccionesAccionista->update($input);

            return response()->json([
                'message' => 'Editado con éxito',
            ]);


        }else{
            return response()->json([
                'response' => 'Error en guardar',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        ////
        if($request->ajax()){
            ////Eliminar un porcentaje
            $porcentajeAccionesAccionista = PorcentajeAccionesAccionista::find($id);
            $porcentajeAccionesAccionista->delete();
            
            return response()->json([
                'message' => 'Eliminado con éxito',
            ]);
        }else{
            return response()->json([
                'response' => 'Error en guardar',
            ]);
        }
    }
}
