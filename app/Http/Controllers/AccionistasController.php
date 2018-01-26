<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accionista;
use App\Sociedades;

class AccionistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $sociedad = Sociedades::find($id);
        $accionistas = Accionista::get();
        return view('accionistas.index')->with('accionistas',$accionistas)->with('sociedad',$sociedad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornamos formulario de creáción de accionista
        return view('accionistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Debo obtener el ID de la  sociedad actual


        ////Método para guardar en al Base de Datos el nuevo accionista
        Accionista::create($request->all());

        return redirect()->route('accionistas.index');
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
    public function edit($id)
    {
        ////Vista de la edición de una Sociedad
        $accionista = Accionista::find($id);
        return view('accionistas.edit')->with('accionista',$accionista);
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
        ////Actualizamos una sociedad
        $input = $request->all();
        $accionista = Accionista::find($id);
        $accionista->update($input);


        return redirect()->route('accionistas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////Eliminar una sociedad
        $accionista = Accionista::find($id);
        $accionista->delete();
        
        return redirect()->route('accionistas.index');
    }
}
