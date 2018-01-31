<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Accionista;
use App\SubPactosAccionistas;

class SubPactosController extends Controller
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
        //retorno vista y lista de todos los pactos por accionistas
        $subpactoAccionista = $accionista->subpactosAccionistas;

        $view = \View::make('subpacto_accionista.index')->with('accionista',$accionista)->with('subpactoAccionista',$subpactoAccionista);

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
        if($request->ajax()){
            ////Método para guardar en al Base de Datos  nuevo titulo de accion
        SubPactosAccionistas::create($request->all());

        $id = $request->input('accionista_id');

        $accionista = Accionista::find($id);
            //obtendo todas las sucursales
        $subpactoAccionista = $accionista->subpactosAccionistas;

            //retorno vista y lista de todas las sucursales
        $view = \View::make('subpacto_accionista.index')->with('accionista',$accionista)->with('subpactoAccionista',$subpactoAccionista);


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
        ////Vista de la edición de un pacto de accionista
        $subpactoAccionista = SubPactosAccionistas::find($id);
        $accionista = Accionista::find($subpactoAccionista->accionista_id);

        $view = \View::make('subpacto_accionista.edit')->with('accionista',$accionista)->with('subpactoAccionista',$subpactoAccionista);
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
        if($request->ajax()){
            ////Actualizamos un pacto de accionista
            $input = $request->all();
            $subpactoAccionista = SubPactosAccionistas::find($id);

            $subpactoAccionista->update($input);

            $accionista = Accionista::find($subpactoAccionista->accionista_id);
            $subpactoAccionista = $accionista->subpactosAccionistas;

            $view = \View::make('subpacto_accionista.index')->with('accionista',$accionista)->with('subpactoAccionista',$subpactoAccionista);

            if($request->ajax()){
                $sections = $view->renderSections();
                return Response::json($sections['myContent']); 
            }else return $view;


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
    public function destroy(Request $request,$id)
    {
        //
        if($request->ajax()){
            ////Eliminar un pacto
            $subpactoAccionista = SubPactosAccionistas::find($id);
            $subpactoAccionista->delete();
            
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
