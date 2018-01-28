<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Acciones;
use App\Sociedades;
use Session;

class AccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        //Asigno a la session la sociedad correspondiente
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');
        //obtendo todos los accionistas*********
        $acciones = Sociedades::find($id)->acciones()->orderBy('acciones.id','DESC')->get();
        //retorno vista y lista de todos los accionistas

        $view = \View::make('acciones.index')->with('acciones',$acciones)->with('sociedad',$sociedad);

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
    public function create(Request $request,$id)
    {
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');

        $view = \View::make('acciones.create')->with('sociedad',$sociedad);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;
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
            ////Método para guardar en al Base de Datos el nuevo accionista
            Acciones::create($request->all());

            return response()->json([
                'message' => 'Creado con éxito',
                'iden' => 'Limpiar',
            ]);

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
        //////Vista de la edición de una Accion
        $accion = Acciones::find($id);

        $view = \View::make('acciones.edit')->with('accion',$accion);

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
            ////Actualizamos una accion
            $input = $request->all();
            $accion = Acciones::find($id);
            $accion->update($input);

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
    public function destroy(Request $request,$id)
    {
        //
        if($request->ajax()){
            ////Eliminar una accion
            $acciones = Acciones::find($id);
            $acciones->delete();
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
