<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sociedades;
use Session;

class SociedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna todas las sociedades creadas
        $sociedades = Sociedades::get();
        return view('sociedades.index')->with('sociedades',$sociedades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornamos formulario de creáción de sociedad
        return view('sociedades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Método para guardar en al Base de Datos la nueva sociedad
        Sociedades::create($request->all());
        //Refrescar variable session
        $this->refreshSessionSociedades();

        return redirect()->route('sociedades.index');
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
        //Vista de la edición de una Sociedad
        $sociedad = Sociedades::find($id);
        return view('sociedades.edit')->with('sociedad',$sociedad);
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
        //Actualizamos una sociedad
        $input = $request->all();
        $sociedad = Sociedades::find($id);
        $sociedad->update($input);

        //Refrescar variable session
        $this->refreshSessionSociedades();

        return redirect()->route('sociedades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar una sociedad
        $sociedad = Sociedades::find($id);
        $sociedad->delete();

        //Refrescar variable session
        $this->refreshSessionSociedades();

        
        return redirect()->route('sociedades.index');
    }

    /** 
    Función para refrescar la variable de Session de Sociedades
    */
    public function refreshSessionSociedades(){
        //Refrescamos la variable de sessión
        $allSociedades = Sociedades::get(); 
        Session::put('allSociedades',$allSociedades);
    }
}
