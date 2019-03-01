<?php

namespace App\Http\Controllers;
use App\Destino;

use Illuminate\Http\Request;

class destinosController extends Controller
{
    //
    public function index(){
    	$puertos = Destino::get();

    	return view('crud.destinos.index',['puertos'=>$puertos]);
    }
}
