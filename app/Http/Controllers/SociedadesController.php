<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use Session;

class SociedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Retorna todas las sociedades creadas
        $sociedades = Sociedades::get();
        
        $view = \View::make('sociedades.index')->with('sociedades',$sociedades);

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
    public function edit(Request $request,$id)
    {
        //Vista de la edición de una Sociedad
        $sociedad = Sociedades::find($id);
        $view = \View::make('sociedades.edit')->with('sociedad',$sociedad);

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
        //Actualizamos una sociedad
        $input = $request->all();
        
        dd($input->id);die();    

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
        Session::forget('allSociedades');
        $allSociedades = Sociedades::get(); 
        Session::put('allSociedades',$allSociedades);
    }
}
