<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;

class clasesController extends Controller
{
    //
    public function index(){

    	$clases=Clase::get();

    	return view('crud.clases.index',['clases'=>$clases]);
    }
    public function create(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){
        
    }

}
