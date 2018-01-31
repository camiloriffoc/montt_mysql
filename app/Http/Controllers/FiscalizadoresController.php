<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Fiscalizadores;
use App\Sociedades;

class FiscalizadoresController extends Controller
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
        //Vista de la edición del fiscalizador
        $sociedad = Sociedades::find($id);
        $fiscalizador = $sociedad->fiscalizador;

        $view = \View::make('fiscalizadores.edit')->with('sociedad',$sociedad)->with('fiscalizador',$fiscalizador);

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

        $sociedad = Sociedades::find($request->input('sociedad_id'));
        //dd(isset($sociedad->fiscalizador));
        //Comprobamos si existe relación
        if(!isset($sociedad->fiscalizador)){
            //No existe relación (debo crear un fiscalizador para la sociedad)
            Fiscalizadores::create($request->all());

            return response()->json([
                'message' => 'Creado con éxito',
            ]);

        }else{
            //Si existe relación (debo Actualizar al fiscalizador para la sociedad)
            $fiscalizador = Fiscalizadores::find($sociedad->fiscalizador->id);
            $fiscalizador->update($request->all());

            return response()->json([
                'message' => 'Editado con éxito',
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
