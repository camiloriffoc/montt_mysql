<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use App\Sucursal;
use Session;

class SucursalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        //Asigno a la session la sociedad correspondiente
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');

        //obtendo todas las sucursales
        $sucursales = Sociedades::find($id)->sucursales()->orderBy('sucursals.id','DESC')->get();
        
        //retorno vista y lista de todas las sucursales
        $view = \View::make('sucursales.index')->with('sociedad',$sociedad)->with('sucursales',$sucursales);

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
    public function create(Request $request, $id)
    {
        //
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');

        $view = \View::make('sucursales.create')->with('sociedad',$sociedad);

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
        if($request->ajax()){
            ////Método para guardar en al Base de Datos  una nueva sucursal
            Sucursal::create($request->all());

            $id = $request->input('sociedad_id');

             //Asigno a la session la sociedad correspondiente
            $this->getSociedad($id);
            $sociedad = Session::get('sociedad');

            //obtendo todas las sucursales
            $sucursales = Sociedades::find($id)->sucursales()->orderBy('sucursals.id','DESC')->get();

            //retorno vista y lista de todas las sucursales
            $view = \View::make('sucursales.index')->with('sociedad',$sociedad)->with('sucursales',$sucursales);

            
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
    public function edit(Request $request, $id)
    {
        //Vista de la edición de una sucursal
        $sucursal = Sucursal::find($id);

        $view = \View::make('sucursales.edit')->with('sucursal',$sucursal);

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
            $sucursal = Sucursal::find($id);
            $sucursal->update($input);

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
            ////Eliminar una sucursal
            $sucursal = Sucursal::find($id);
            $sucursal->delete();
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
