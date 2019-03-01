<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservas;

class reservaController extends Controller
{
    //
    public function index(){
    	$reservas = Reservas::get();

    	return view('crud.reservacion.index',['reservas'=>$reservas]);
    }

}
