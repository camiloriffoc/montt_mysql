<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;
use App\Capital;
use App\PlazoMaximoPago;
use App\PlazoMaximoSuscripcion;

class CapitalController extends Controller
{
    public function index(request $request, $id) {

    	if($request->ajax()){
      		
    		$request_capital = $request->all();
    		$capital = Capital::where('sociedad_id','=',$id)->first();
        $capital = Capital::where('sociedad_id','=',$id)->first();
        $suscripcion = PlazoMaximoSuscripcion::where('sociedad_id','=',$id)->get();
        $pago = PlazoMaximoPago::where('sociedad_id','=',$id)->get();
        
      	$view = \View::make('capitales.index')->with(['sociedad_id'=>$id,'capital'=>$capital,'suscripcion'=>$suscripcion,'pago'=>$pago]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function store(request $request) {

    	if($request->ajax()){
          
    		$request_capital = $request->all();
    		$capital = Capital::where('sociedad_id','=',$request_capital['sociedad_id'])->first();

    		if($capital){
    			
    			$capital->update($request_capital);
    		}else
    		{
    			$capital = new Capital($request_capital);
          $capital->save();
    		}

    		$capital = Capital::where('sociedad_id','=',$request_capital['sociedad_id'])->first();
        $suscripcion = PlazoMaximoSuscripcion::where('sociedad_id','=',$request_capital['sociedad_id'])->get();
        $pago = PlazoMaximoPago::where('sociedad_id','=',$request_capital['sociedad_id'])->get();


        $view = \View::make('capitales.index')->with(['sociedad_id'=>$request_capital['sociedad_id'],'capital'=>$capital,'suscripcion'=>$suscripcion,'pago'=>$pago]);

        $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return $view;
    }

    public function suscripcionStore(request $request) {

      if($request->ajax()){

        $request_suscripcion = $request->all();
        $suscripcion = new PlazoMaximoSuscripcion($request_suscripcion);
        $suscripcion->save();

        $capital = Capital::where('sociedad_id','=',$request_suscripcion['sociedad_id'])->first();
        $suscripcion = PlazoMaximoSuscripcion::where('sociedad_id','=',$request_suscripcion['sociedad_id'])->get();
        $pago = PlazoMaximoPago::where('sociedad_id','=',$request_suscripcion['sociedad_id'])->get();

     
        $view = \View::make('capitales.index')->with(['sociedad_id'=>$request_suscripcion['sociedad_id'],'capital'=>$capital,'suscripcion'=>$suscripcion,'pago'=>$pago]);

       $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return $view;
    }

    public function pagoStore(request $request) {

      if($request->ajax()){

        $request_pago = $request->all();
        $pago = new PlazoMaximoPago($request_pago);
        $pago->save();

        $capital = Capital::where('sociedad_id','=',$request_pago['sociedad_id'])->first();
        $suscripcion = PlazoMaximoSuscripcion::where('sociedad_id','=',$request_pago['sociedad_id'])->get();
        $pago = PlazoMaximoPago::where('sociedad_id','=',$request_pago['sociedad_id'])->get();

     
        $view = \View::make('capitales.index')->with(['sociedad_id'=>$request_pago['sociedad_id'],'capital'=>$capital,'suscripcion'=>$suscripcion,'pago'=>$pago]);

       $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return $view;
    }

    public function suscripcionEdit(request $request,$id) {

      if($request->ajax()){

        $suscripcion = PlazoMaximoSuscripcion::find($id);

        $view = \View::make('capitales.edit_suscripcion')->with(['suscripcion'=>$suscripcion]);

          $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return $view;
      
    }

    public function pagoEdit(request $request,$id) {

       if($request->ajax()){

        $pago = PlazoMaximoPago::find($id);

        $view = \View::make('capitales.edit_pago')->with(['pago'=>$pago]);

        $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return $view;
    }

    public function pagoUpdate(request $request) {

      if($request->ajax()){
        $pagoUpdate = $request->all();

        $pago = PlazoMaximoPago::find($pagoUpdate['id']);
        $sociedad_id=$pago['sociedad_id'];
        $pago->update($pagoUpdate);
        
     
        $capital = Capital::where('sociedad_id','=',$sociedad_id)->first();
        $suscripcion = PlazoMaximoSuscripcion::where('sociedad_id','=',$sociedad_id)->get();
        $pago = PlazoMaximoPago::where('sociedad_id','=',$sociedad_id)->get();
      
      $view = \View::make('capitales.index')->with(['sociedad_id'=>$sociedad_id,'capital'=>$capital,'suscripcion'=>$suscripcion,'pago'=>$pago]);

        $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return "";
    }

    public function suscripcionUpdate(request $request) {

      if($request->ajax()){
        $suscripcionUpdate = $request->all();

        $suscripcion = PlazoMaximoSuscripcion::find($suscripcionUpdate['id']);
        $sociedad_id=$suscripcion['sociedad_id'];
        $suscripcion->update($suscripcionUpdate);
        
     
        $capital = Capital::where('sociedad_id','=',$sociedad_id)->first();
        $suscripcion = PlazoMaximoSuscripcion::where('sociedad_id','=',$sociedad_id)->get();
        $pago = PlazoMaximoPago::where('sociedad_id','=',$sociedad_id)->get();
      
      $view = \View::make('capitales.index')->with(['sociedad_id'=>$sociedad_id,'capital'=>$capital,'suscripcion'=>$suscripcion,'pago'=>$pago]);

        $sections = $view->renderSections();
        return Response::json($sections['myContent']); 
      }else return "";
    }

}
