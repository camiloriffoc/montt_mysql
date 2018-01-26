<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sociedades;
use Session;

class AdminController extends Controller
{
   public function index()
    {
      
    	$allSociedades = Sociedades::get();	

    	//Creamos una variable de sesión
    	Session::put('allSociedades',$allSociedades);
    	
      	return view('admin')->with('allSociedades',$allSociedades);
    }

}
