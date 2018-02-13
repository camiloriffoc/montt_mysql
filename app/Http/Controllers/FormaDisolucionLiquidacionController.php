<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Sociedades;
use App\FormaDisolucionLiquidacion;
use Session;

class FormaDisolucionLiquidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        //
        //Asigno a la session la sociedad correspondiente
        $this->getSociedad($id);
        $sociedad = Session::get('sociedad');

        $forma_disolucion_liquidacion = $sociedad->formaDisolucionLiquidacion;
        $view = \View::make('formaDisolucionLiquidacion.index')->with('forma_disolucion_liquidacion',$forma_disolucion_liquidacion)->with('sociedad',$sociedad);

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
            $id = $request->input('sociedad_id');

            //retorno vista y lista de todos los giros
            $this->getSociedad($id);
            $sociedad = Session::get('sociedad');

            if(!isset($sociedad->formaDisolucionLiquidacion)){
                //dEBO CREAR
                ////Método para guardar en al Base de Datos
                $registro = FormaDisolucionLiquidacion::create($request->all());

                 //Preguntamos si existe el file input
                if($file = $request->hasFile('forma_disolucion_liquidacion_adjunto')){
                //Obtenemos el File Input
                    $forma_disolucion_liquidacion_adjunto = $request->file('forma_disolucion_liquidacion_adjunto');
                    $nombre_forma_disolucion_liquidacion_adjunto = uniqid().'_'.str_replace(" ", "_", $forma_disolucion_liquidacion_adjunto->getClientOriginalName());
                    $registro->update(['forma_disolucion_liquidacion_adjunto'=>$nombre_forma_disolucion_liquidacion_adjunto]);
                    $forma_disolucion_liquidacion_adjunto->move('uploads/forma_disolucion_liquidacion', $nombre_forma_disolucion_liquidacion_adjunto);
                }

                $forma_disolucion_liquidacion = $sociedad->formaDisolucionLiquidacion;
                $view = \View::make('formaDisolucionLiquidacion.index')->with('forma_disolucion_liquidacion',$forma_disolucion_liquidacion)->with('sociedad',$sociedad);


                $sections = $view->renderSections();
                return Response::json($sections['myContent']); 


            }else{
                //Si existe relación (debo Actualizar)
                $registro = FormaDisolucionLiquidacion::find($sociedad->formaDisolucionLiquidacion->id);
                $adjunto_antiguo = $registro->forma_disolucion_liquidacion_adjunto;

                if(file_exists(public_path('uploads/forma_disolucion_liquidacion/'.$adjunto_antiguo))){
                    unlink(public_path('uploads/forma_disolucion_liquidacion/'.$adjunto_antiguo));
                }

                $registro->update($request->all());

                 //Preguntamos si existe el file input
                if($file = $request->hasFile('forma_disolucion_liquidacion_adjunto')){
                //Obtenemos el File Input
                    $forma_disolucion_liquidacion_adjunto = $request->file('forma_disolucion_liquidacion_adjunto');
                    $nombre_forma_disolucion_liquidacion_adjunto = uniqid().'_'.str_replace(" ", "_", $forma_disolucion_liquidacion_adjunto->getClientOriginalName());
                    $registro->update(['forma_disolucion_liquidacion_adjunto'=>$nombre_forma_disolucion_liquidacion_adjunto]);
                    $forma_disolucion_liquidacion_adjunto->move('uploads/forma_disolucion_liquidacion', $nombre_forma_disolucion_liquidacion_adjunto);
                }

                $forma_disolucion_liquidacion = $sociedad->formaDisolucionLiquidacion;
                $view = \View::make('formaDisolucionLiquidacion.index')->with('forma_disolucion_liquidacion',$forma_disolucion_liquidacion)->with('sociedad',$sociedad);


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
        //
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
