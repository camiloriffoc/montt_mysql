<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Accionista;
use App\Sociedades;
use Session;



class AccionistasController extends Controller
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
        $accionistas = Sociedades::find($id)->accionistas;
        //retorno vista y lista de todos los accionistas

        $view = \View::make('accionistas.index')->with('accionistas',$accionistas)->with('sociedad',$sociedad);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;


        
        //return view('accionistas.index')->with('accionistas',$accionistas)->with('sociedad',$sociedad);
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

        $view = \View::make('accionistas.create')->with('sociedad',$sociedad);

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
            ////Método para guardar en al Base de Datos el nuevo accionista
            Accionista::create($request->all());

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
    public function edit(Request $request, $id)
    {

        ////Vista de la edición de una Sociedad
        $accionista = Accionista::find($id);

        $view = \View::make('accionistas.edit')->with('accionista',$accionista);

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
            ////Actualizamos una sociedad
            $input = $request->all();
            $accionista = Accionista::find($id);
            $accionista->update($input);

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
        ////Eliminar un accionista
        $accionista = Accionista::find($id);
        $accionista->delete();

        return redirect()->route('accionistas.index');
    }
}