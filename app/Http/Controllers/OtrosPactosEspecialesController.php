<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\OtrosPactosEspeciales;
use App\Sociedades;

class OtrosPactosEspecialesController extends Controller
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
        ////Vista de la edición
        $sociedad = Sociedades::find($id);
        $otros_pactos_especiales = $sociedad->otrosPactosEspeciales;

        $view = \View::make('otrosPactosEspeciales.edit')->with('sociedad',$sociedad)->with('otros_pactos_especiales',$otros_pactos_especiales);

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
            $sociedad = Sociedades::find($request->input('sociedad_id'));
            //dd(isset($sociedad->fiscalizador));
            //Comprobamos si existe relación
            if(!isset($sociedad->otrosPactosEspeciales)){
                //No existe relación (debo crear)

                ////Método para guardar en al Base de Datos
                $registro = OtrosPactosEspeciales::create($request->all());

                if($file = $request->hasFile('otros_pactos_adjunto')){
                    //Obtenemos el File Input
                    $otros_pactos_adjunto = $request->file('otros_pactos_adjunto');
                    //Le damos un nombre único
                    $nombre_otros_pactos_adjunto = uniqid().'_'.str_replace(" ", "_", $otros_pactos_adjunto->getClientOriginalName());
                    //Actualizamos el campo del nombre del archivo adjunto
                    $registro->update(['otros_pactos_adjunto'=>$nombre_otros_pactos_adjunto]);
                    //Movemos el File con el nuevo nombre
                    $otros_pactos_adjunto->move('uploads/otros_pactos_especiales', $nombre_otros_pactos_adjunto);
                }          
                
                //dd($sociedad);
                $otros_pactos_especiales = $sociedad->otrosPactosEspeciales;
                
                //dd($otros_pactos_especiales);

                $view = \View::make('otrosPactosEspeciales.edit')->with('sociedad',$sociedad)->with('otros_pactos_especiales',$otros_pactos_especiales);

                $sections = $view->renderSections();
                return Response::json($sections['myContent']); 

            }else{
                //Si existe relación (debo Actualizar)
                $registro = OtrosPactosEspeciales::find($sociedad->otrosPactosEspeciales->id);
                $adjunto_antiguo = $registro->otros_pactos_adjunto;

                if(file_exists(public_path('uploads/otros_pactos_especiales/'.$adjunto_antiguo))){
                  unlink(public_path('uploads/otros_pactos_especiales/'.$adjunto_antiguo));
                }


              $registro->update($request->all());

              if($file = $request->hasFile('otros_pactos_adjunto')){
                    //Obtenemos el File Input
                $otros_pactos_adjunto = $request->file('otros_pactos_adjunto');
                    //Le damos un nombre único
                $nombre_otros_pactos_adjunto = uniqid().'_'.str_replace(" ", "_", $otros_pactos_adjunto->getClientOriginalName());
                    //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['otros_pactos_adjunto'=>$nombre_otros_pactos_adjunto]);
                    //Movemos el File con el nuevo nombre
                $otros_pactos_adjunto->move('uploads/otros_pactos_especiales', $nombre_otros_pactos_adjunto);

            }

            $otros_pactos_especiales = $sociedad->otrosPactosEspeciales;

            $view = \View::make('otrosPactosEspeciales.edit')->with('sociedad',$sociedad)->with('otros_pactos_especiales',$otros_pactos_especiales);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }

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
