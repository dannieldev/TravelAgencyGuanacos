<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajero;

class pasajerosController extends Controller
{
    //
    public function index(){

    	$pasajeros = Pasajero::get();

    	return view('crud.pasajeros.index',['pasajeros'=>$pasajeros]);
    }
}
