<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Aeropuerto;
use DB;

class aeropuertosController extends Controller
{
    //
    public function index(Request $request){
    	 if ($request){
        $query=trim($request->get('searchText'));
     	$puertos=DB::table('aerpuertos')
     	            ->select('idaerpuerto','nombrepu','ciudad.nombrec')
     	            ->join('ciudad','idciudad','=','ciudad_idciudad')
     	            ->where('nombrepu','LIKE','%'.$query.'%')
				  	->orderBy('idaerpuerto','desc')
		            ->paginate(10);
    	}

    	return view('crud.aeropuertos.index',['puertos'=>$puertos,'searchText'=>$query]);
    }
    public function create(){
    	return view('crud.aeropuertos.new');
    }
    public function store(Request $request){
    	$puertos=new Aeropuerto;
    	$puertos->nombrepu=$request->get('nombre');
    	$puertos->ciudad_idciudad=$request->get('codigoc');
    	$puertos->save();
    	return Redirect::to('/aeropuertos');
    }
    public function edit($idaerpuerto){
    	return view('crud.aeropuertos.edit',['puertos'=>Aeropuerto::where('idaerpuerto',$idaerpuerto)->firstOrFail()]);
    }
    public function update(Request $request, $idaerpuerto){
    	$puertos=Aeropuerto::where('idaerpuerto','=',$idaerpuerto)->first();
    	$puertos->nombrepu=$request->get('nombre');
    	$puertos->ciudad_idciudad=$request->get('codigoc');
    	$puertos->update();
    	return Redirect::to('/aeropuertos');

    }
    public function destroy($idaerpuerto){
    	$puertos=Aeropuerto::findOrFail($idaerpuerto);
        $puertos->delete();
        return Redirect::to('/aeropuertos');
    }

}
