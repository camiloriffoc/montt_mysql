<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
    {
      
    	//$allSociedades = Session::get('allSociedades');	
      return view('admin');
    }

}
