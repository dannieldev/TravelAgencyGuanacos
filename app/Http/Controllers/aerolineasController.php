<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aerolineas;

class aerolineasController extends Controller
{
    //
    public function index(){

    	$lineas=Aerolineas::get();

    	return view('crud.aerolineas.index',['lineas'=>$lineas]);
    }
}
