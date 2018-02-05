<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use App\Giro;
use Session;

class GirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        ////Asigno a la session la sociedad correspondiente
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');

        //obtendo todas las sucursales
        $giros = Sociedades::find($id)->giros()->orderBy('giros.id','DESC')->get();
        
        //retorno vista y lista de todas las sucursales
        $view = \View::make('giros.index')->with('sociedad',$sociedad)->with('giros',$giros);

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

        $view = \View::make('giros.create')->with('sociedad',$sociedad);

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
            ////Método para guardar en al Base de Datos  un giro
            Giro::create($request->all());

            $id = $request->input('sociedad_id');

             //Asigno a la session la sociedad correspondiente
            $this->getSociedad($id);
            $sociedad = Session::get('sociedad');

            //obtendo todos los giros
            $giros = Sociedades::find($id)->giros()->orderBy('giros.id','DESC')->get();

            //retorno vista y lista de todos los giros
            $view = \View::make('giros.index')->with('sociedad',$sociedad)->with('giros',$giros);

            
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
        //
        //Vista de la edición de un giro
        $giro = Giro::find($id);

        $view = \View::make('giros.edit')->with('giro',$giro);

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
            $giro = Giro::find($id);
            $giro->update($input);

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
        //
        if($request->ajax()){
            ////Eliminar un giro
            $giro = Giro::find($id);
            $giro->delete();
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
