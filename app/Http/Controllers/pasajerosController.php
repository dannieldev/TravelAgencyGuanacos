<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajero;

class pasajerosController extends Controller
{
    //
    public function index(Request $request){

        if ($request){
        $query=trim($request->get('searchText'));
        $pasajeros=Pasajero::where('nombre','LIKE','%'.$query.'%')
                            ->orderBy('idpasajero','desc')
                            ->paginate(10);
        }
    	return view('crud.pasajeros.index',['pasajeros'=>$pasajeros,'searchText'=>$query]);
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
