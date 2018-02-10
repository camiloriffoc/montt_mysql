<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use App\ListadoAccionistaVoto;
use Session;

class ListadoAccionistaVotoController extends Controller
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
        if($request->ajax()){
            ////Método para guardar en al Base de Datos
            ListadoAccionistaVoto::create($request->all());

            $id = $request->input('sociedad_id');

             //Asigno a la session la sociedad correspondiente
            $this->getSociedad($id);
            $sociedad = Session::get('sociedad');

            //obtendo todos
            $listado_voto = $sociedad->listadoAccionistasVotos;
            $listado_capital = $sociedad->listadoAccionistasCapitales;
            $listado_dividendo = $sociedad->listadoAccionistasDividendos;

            //retorno vista
            $view = \View::make('composicionAccionaria.index')->with('sociedad',$sociedad)->with('listado_voto',$listado_voto)->with('listado_capital',$listado_capital)->with('listado_dividendo',$listado_dividendo);

            
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
        //
        $listado_voto = ListadoAccionistaVoto::find($id);

        $view = \View::make('listadoAccionistaVoto.edit')->with('listado_voto',$listado_voto);

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
        ////
        if($request->ajax()){
            ////Actualizamos un giro
            $input = $request->all();
            $listado_voto = ListadoAccionistaVoto::find($id);
            $listado_voto->update($input);

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
