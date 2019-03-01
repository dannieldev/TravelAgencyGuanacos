<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeropuerto;

class aeropuertosController extends Controller
{
    //
    public function index(){

    	$puertos =Aeropuerto::get();

    	return view('crud.aeropuertos.index',['puertos'=>$puertos]);
    }
}
