<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;

class paisesController extends Controller
{
    //
    public function index(){

    	$contrys = Pais::get();

    	return view('crud.paises.index',['contrys'=>$contrys]);
    }
}
