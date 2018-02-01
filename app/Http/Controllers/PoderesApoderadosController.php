<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\PoderesApoderados;
use App\Sociedades;

use Illuminate\Http\Request;

class PoderesApoderadosController extends Controller
{
    public function index(Request $request, $sociedad_id) {;

        if($request->ajax()){

        	$sociedad=Sociedades::find($sociedad_id);
        	$poderes=$sociedad->poderesApoderados;

        	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$sociedad_id,'poderes'=>$poderes]);
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function create(Request $request, $sociedad_id) {;

        $view = \View::make('poderesApoderados.create')->with('sociedad_id',$sociedad_id);

        if($request->ajax()){
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function store(Request $request) {;

		if($request->ajax()){   
			$request_poder = $request->all();
			$poder = new PoderesApoderados($request_poder);
          	$poder->save();

          	$sociedad=Sociedades::find($request_poder['sociedad_id']);
        	$poderes=$sociedad->poderesApoderados;

          	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$request_poder['sociedad_id'],'poderes'=>$poderes]);

  	     	$sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;


    }

    public function edit(Request $request, $poder_id) {;

        if($request->ajax()){
        	
        	$poder = PoderesApoderados::find($poder_id);
        	
        	$view = \View::make('poderesApoderados.edit')->with(['poder_id'=>$poder_id, 'poder'=>$poder]);
        
            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function update(Request $request) {

    	if($request->ajax()){

    		$request_poder= $request->all();
    		$poder = PoderesApoderados::find($request_poder['id']);
    		$poder->update($request_poder);

    		$sociedad=Sociedades::find($poder['sociedad_id']);
        	$poderes=$sociedad->poderesApoderados;

        	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$poder['sociedad_id'],'poderes'=>$poderes]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }

    public function delete(Request $request, $id) {

    	if($request->ajax()){

    		$request_poder= $request->all();
    		$poder = PoderesApoderados::find($id);
    		$sociedad_id = $poder['sociedad_id'];
    		$poder->delete();

    		$sociedad=Sociedades::find($poder['sociedad_id']);
        	$poderes=$sociedad->poderesApoderados;

        	$view = \View::make('poderesApoderados.index')->with(['sociedad_id'=>$sociedad_id,'poderes'=>$poderes]);

            $sections = $view->renderSections();
            return Response::json($sections['myContent']); 
        }else return $view;

    }



}
