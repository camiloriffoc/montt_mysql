<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Accionista;
use App\FolioRegistroAccionista;

class FolioRegistroAccionistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        ////obtendo el dato del accionista
        $accionista = Accionista::find($id);
        //retorno vista y lista de todos folios accionista
        $folio_registro_accionista = $accionista->FolioRegistroAccionista;

        $view = \View::make('folioRegistroAccionista.index')->with('accionista',$accionista)->with('folio_registro_accionista',$folio_registro_accionista);

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
            ////Método para guardar en al Base de Datos  nuevo FOLIO
            $registro = FolioRegistroAccionista::create($request->all());

            if($file = $request->hasFile('instrumento_suscripcion_adjunto')){
                //Obtenemos el File Input
                $instrumento_suscripcion_adjunto = $request->file('instrumento_suscripcion_adjunto');
                //Le damos un nombre único
                $nombre_instrumento_suscripcion_adjunto = uniqid().'_'.str_replace(" ", "_", $instrumento_suscripcion_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['instrumento_suscripcion_adjunto'=>$nombre_instrumento_suscripcion_adjunto]);
                //Movemos el File con el nuevo nombre
                $instrumento_suscripcion_adjunto->move('uploads/folio_registro_accionista', $nombre_instrumento_suscripcion_adjunto);
            } 

            if($file = $request->hasFile('numero_titulo_inutilizable_adjunto')){
                //Obtenemos el File Input
                $numero_titulo_inutilizable_adjunto = $request->file('numero_titulo_inutilizable_adjunto');
                //Le damos un nombre único
                $nombre_numero_titulo_inutilizable_adjunto = uniqid().'_'.str_replace(" ", "_", $numero_titulo_inutilizable_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['numero_titulo_inutilizable_adjunto'=>$nombre_numero_titulo_inutilizable_adjunto]);
                //Movemos el File con el nuevo nombre
                $numero_titulo_inutilizable_adjunto->move('uploads/folio_registro_accionista', $nombre_numero_titulo_inutilizable_adjunto);
            } 

            if($file = $request->hasFile('nuevo_titulo_comprador_adjunto')){
                //Obtenemos el File Input
                $nuevo_titulo_comprador_adjunto = $request->file('nuevo_titulo_comprador_adjunto');
                //Le damos un nombre único
                $nombre_nuevo_titulo_comprador_adjunto = uniqid().'_'.str_replace(" ", "_", $nuevo_titulo_comprador_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['nuevo_titulo_comprador_adjunto'=>$nombre_nuevo_titulo_comprador_adjunto]);
                //Movemos el File con el nuevo nombre
                $nuevo_titulo_comprador_adjunto->move('uploads/folio_registro_accionista', $nombre_nuevo_titulo_comprador_adjunto);
            } 

            if($file = $request->hasFile('nuevo_titulo_vendedor_adjunto')){
                //Obtenemos el File Input
                $nuevo_titulo_vendedor_adjunto = $request->file('nuevo_titulo_vendedor_adjunto');
                //Le damos un nombre único
                $nombre_nuevo_titulo_vendedor_adjunto = uniqid().'_'.str_replace(" ", "_", $nuevo_titulo_vendedor_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['nuevo_titulo_vendedor_adjunto'=>$nombre_nuevo_titulo_vendedor_adjunto]);
                //Movemos el File con el nuevo nombre
                $nuevo_titulo_vendedor_adjunto->move('uploads/folio_registro_accionista', $nombre_nuevo_titulo_vendedor_adjunto);
            } 

            //Tablas de usufructo, prenda, embargo
            if($file = $request->hasFile('fecha_usufructo_adjunto')){
                //Obtenemos el File Input
                $fecha_usufructo_adjunto = $request->file('fecha_usufructo_adjunto');
                //Le damos un nombre único
                $nombre_fecha_usufructo_adjunto = uniqid().'_'.str_replace(" ", "_", $fecha_usufructo_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['fecha_usufructo_adjunto'=>$nombre_fecha_usufructo_adjunto]);
                //Movemos el File con el nuevo nombre
                $fecha_usufructo_adjunto->move('uploads/folio_registro_accionista', $nombre_fecha_usufructo_adjunto);
            } 

            if($file = $request->hasFile('fecha_prenda_adjunto')){
                //Obtenemos el File Input
                $fecha_prenda_adjunto = $request->file('fecha_prenda_adjunto');
                //Le damos un nombre único
                $nombre_fecha_prenda_adjunto = uniqid().'_'.str_replace(" ", "_", $fecha_prenda_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['fecha_prenda_adjunto'=>$nombre_fecha_prenda_adjunto]);
                //Movemos el File con el nuevo nombre
                $fecha_prenda_adjunto->move('uploads/folio_registro_accionista', $nombre_fecha_prenda_adjunto);
            } 

            if($file = $request->hasFile('fecha_embargo_adjunto')){
                //Obtenemos el File Input
                $fecha_embargo_adjunto = $request->file('fecha_embargo_adjunto');
                //Le damos un nombre único
                $nombre_fecha_embargo_adjunto = uniqid().'_'.str_replace(" ", "_", $fecha_embargo_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['fecha_embargo_adjunto'=>$nombre_fecha_embargo_adjunto]);
                //Movemos el File con el nuevo nombre
                $fecha_embargo_adjunto->move('uploads/folio_registro_accionista', $nombre_fecha_embargo_adjunto);
            } 


            $id = $request->input('accionista_id');
            $accionista = Accionista::find($id);
            //obtendo todos los folios
            $folio_registro_accionista = $accionista->FolioRegistroAccionista;

            //retorno vista y lista de todas las sucursales
            $view = \View::make('folioRegistroAccionista.index')->with('accionista',$accionista)->with('folio_registro_accionista',$folio_registro_accionista);


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
    public function edit(Request $request,$id)
    {

         $folio_registro_accionista = FolioRegistroAccionista::find($id);
         $accionista = Accionista::find($folio_registro_accionista->accionista_id);

         $view = \View::make('folioRegistroAccionista.edit')->with('accionista',$accionista)->with('folio_registro_accionista',$folio_registro_accionista);

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
            $registro = FolioRegistroAccionista::find($id);

            $adjunto_antiguo_1 = $registro->instrumento_suscripcion_adjunto;
            $adjunto_antiguo_2 = $registro->numero_titulo_inutilizable_adjunto;
            $adjunto_antiguo_3 = $registro->nuevo_titulo_comprador_adjunto;
            $adjunto_antiguo_4 = $registro->nuevo_titulo_vendedor_adjunto;
            $adjunto_antiguo_5 = $registro->fecha_usufructo_adjunto;
            $adjunto_antiguo_6 = $registro->fecha_prenda_adjunto;
            $adjunto_antiguo_7 = $registro->fecha_embargo_adjunto;

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_1)) && $request->hasFile('instrumento_suscripcion_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_1));
            }

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_2)) && $request->hasFile('numero_titulo_inutilizable_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_2));
            }

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_3)) && $request->hasFile('nuevo_titulo_comprador_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_3));
            }

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_4)) && $request->hasFile('nuevo_titulo_vendedor_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_4));
            }

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_5)) && $request->hasFile('fecha_usufructo_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_5));
            }

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_6)) && $request->hasFile('fecha_prenda_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_6));
            }

            if(file_exists(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_7)) && $request->hasFile('fecha_embargo_adjunto')){
                unlink(public_path('uploads/folio_registro_accionista/'.$adjunto_antiguo_7));
            }

            $registro->update($request->all());

            if($file = $request->hasFile('instrumento_suscripcion_adjunto')){
                //Obtenemos el File Input
                $instrumento_suscripcion_adjunto = $request->file('instrumento_suscripcion_adjunto');
                //Le damos un nombre único
                $nombre_instrumento_suscripcion_adjunto = uniqid().'_'.str_replace(" ", "_", $instrumento_suscripcion_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['instrumento_suscripcion_adjunto'=>$nombre_instrumento_suscripcion_adjunto]);
                //Movemos el File con el nuevo nombre
                $instrumento_suscripcion_adjunto->move('uploads/folio_registro_accionista', $nombre_instrumento_suscripcion_adjunto);
            } 

            if($file = $request->hasFile('numero_titulo_inutilizable_adjunto')){
                //Obtenemos el File Input
                $numero_titulo_inutilizable_adjunto = $request->file('numero_titulo_inutilizable_adjunto');
                //Le damos un nombre único
                $nombre_numero_titulo_inutilizable_adjunto = uniqid().'_'.str_replace(" ", "_", $numero_titulo_inutilizable_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['numero_titulo_inutilizable_adjunto'=>$nombre_numero_titulo_inutilizable_adjunto]);
                //Movemos el File con el nuevo nombre
                $numero_titulo_inutilizable_adjunto->move('uploads/folio_registro_accionista', $nombre_numero_titulo_inutilizable_adjunto);
            } 

            if($file = $request->hasFile('nuevo_titulo_comprador_adjunto')){
                //Obtenemos el File Input
                $nuevo_titulo_comprador_adjunto = $request->file('nuevo_titulo_comprador_adjunto');
                //Le damos un nombre único
                $nombre_nuevo_titulo_comprador_adjunto = uniqid().'_'.str_replace(" ", "_", $nuevo_titulo_comprador_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['nuevo_titulo_comprador_adjunto'=>$nombre_nuevo_titulo_comprador_adjunto]);
                //Movemos el File con el nuevo nombre
                $nuevo_titulo_comprador_adjunto->move('uploads/folio_registro_accionista', $nombre_nuevo_titulo_comprador_adjunto);
            } 

            if($file = $request->hasFile('nuevo_titulo_vendedor_adjunto')){
                //Obtenemos el File Input
                $nuevo_titulo_vendedor_adjunto = $request->file('nuevo_titulo_vendedor_adjunto');
                //Le damos un nombre único
                $nombre_nuevo_titulo_vendedor_adjunto = uniqid().'_'.str_replace(" ", "_", $nuevo_titulo_vendedor_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['nuevo_titulo_vendedor_adjunto'=>$nombre_nuevo_titulo_vendedor_adjunto]);
                //Movemos el File con el nuevo nombre
                $nuevo_titulo_vendedor_adjunto->move('uploads/folio_registro_accionista', $nombre_nuevo_titulo_vendedor_adjunto);
            } 

            //Tablas de usufructo, prenda, embargo
            if($file = $request->hasFile('fecha_usufructo_adjunto')){
                //Obtenemos el File Input
                $fecha_usufructo_adjunto = $request->file('fecha_usufructo_adjunto');
                //Le damos un nombre único
                $nombre_fecha_usufructo_adjunto = uniqid().'_'.str_replace(" ", "_", $fecha_usufructo_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['fecha_usufructo_adjunto'=>$nombre_fecha_usufructo_adjunto]);
                //Movemos el File con el nuevo nombre
                $fecha_usufructo_adjunto->move('uploads/folio_registro_accionista', $nombre_fecha_usufructo_adjunto);
            } 

            if($file = $request->hasFile('fecha_prenda_adjunto')){
                //Obtenemos el File Input
                $fecha_prenda_adjunto = $request->file('fecha_prenda_adjunto');
                //Le damos un nombre único
                $nombre_fecha_prenda_adjunto = uniqid().'_'.str_replace(" ", "_", $fecha_prenda_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['fecha_prenda_adjunto'=>$nombre_fecha_prenda_adjunto]);
                //Movemos el File con el nuevo nombre
                $fecha_prenda_adjunto->move('uploads/folio_registro_accionista', $nombre_fecha_prenda_adjunto);
            } 

            if($file = $request->hasFile('fecha_embargo_adjunto')){
                //Obtenemos el File Input
                $fecha_embargo_adjunto = $request->file('fecha_embargo_adjunto');
                //Le damos un nombre único
                $nombre_fecha_embargo_adjunto = uniqid().'_'.str_replace(" ", "_", $fecha_embargo_adjunto->getClientOriginalName());
                //Actualizamos el campo del nombre del archivo adjunto
                $registro->update(['fecha_embargo_adjunto'=>$nombre_fecha_embargo_adjunto]);
                //Movemos el File con el nuevo nombre
                $fecha_embargo_adjunto->move('uploads/folio_registro_accionista', $nombre_fecha_embargo_adjunto);
            } 

            $folio_registro_accionista = $registro;

            $accionista = Accionista::find($folio_registro_accionista->accionista_id);

            $view = \View::make('folioRegistroAccionista.edit')->with('accionista',$accionista)->with('folio_registro_accionista',$folio_registro_accionista);

            if($request->ajax()){
                $sections = $view->renderSections();
                return Response::json($sections['myContent']); 
            }else return $view;


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
