<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use App\ListadoOpciones;
use Session;

class ListadoOpcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        //
        ////Asigno a la session la sociedad correspondiente
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');

        //obtendo todas
        $listado_opciones = $sociedad->listadoOpciones;
        
        //retorno vista y lista de todas las sucursales
        $view = \View::make('listadoOpciones.index')->with('sociedad',$sociedad)->with('listado_opciones',$listado_opciones);

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
            ////Método para guardar en al Base de Datos
            ListadoOpciones::create($request->all());

            $id = $request->input('sociedad_id');

             //Asigno a la session la sociedad correspondiente
            $this->getSociedad($id);
            $sociedad = Session::get('sociedad');

            //obtendo todos
            $listado_opciones = $sociedad->listadoOpciones;

            //retorno vista
            $view = \View::make('listadoOpciones.index')->with('sociedad',$sociedad)->with('listado_opciones',$listado_opciones);

            
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
        $listado_opciones = ListadoOpciones::find($id);

        $view = \View::make('listadoOpciones.edit')->with('listado_opciones',$listado_opciones);

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
            ////Actualizamos un giro
            $input = $request->all();
            $listado_opciones = ListadoOpciones::find($id);
            $listado_opciones->update($input);

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
    public function destroy($id)
    {
        //
    }
}
