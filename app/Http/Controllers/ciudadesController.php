<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class ciudadesController extends Controller
{
    //
    public function index(){
    	$citys = Ciudad::get();
    	return view('crud.ciudades.index',['citys'=>$citys]);
    }
}
