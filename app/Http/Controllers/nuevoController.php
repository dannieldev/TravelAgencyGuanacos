<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuevoController extends Controller
{
    //
    public function index(Request $request){
    	  //$categorias = $request->input("de");
    	  //dd($categorias);
    	return view ('layout.index');
    }
}
