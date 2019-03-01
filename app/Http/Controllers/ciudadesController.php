<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Ciudad;
Use DB;

class ciudadesController extends Controller
{
    //
    public function index(Request $request){

    	if ($request){
        $query=trim($request->get('searchText'));
     	$citys=DB::table('ciudad')
     	           ->join('pais','idpais','=','pais_idpais')
     	           ->select('nombrec','pais.nombrep','pais_idpais','idciudad')
                   ->where('nombrec','LIKE','%'.$query.'%')
				   ->orderBy('idciudad','desc')
		           ->paginate(10);
    	}

    	return view('crud.ciudades.index',['citys'=>$citys,'searchText'=>$query]);
    }
    public function create(){
    	return view('crud.ciudades.new');
    }
     public function store(Request $request){
    	$citys = new Ciudad;
    	$citys->idciudad=$request->get('codigo');
    	$citys->pais_idpais=$request->get('codigop');
    	$citys->nombrec=$request->get('nombre');
    	$citys->save();
    	return Redirect::to('/ciudades');
    }
     public function edit($idciudad){
     	return view('crud.ciudades.edit',['citys'=>Ciudad::where('idciudad',$idciudad)->firstOrFail()]);
    }
     public function update(Request $request, $id){
    	$citys =Ciudad::where('id','=',$id)->first();
        $citys->nombrec=$request->get('nombre');
    	$citys->idciudad=$request->get('codigo');
    	$citys->pais_idpais=$request->get('codigop');
    	$citys->update();
    	return Redirect::to('/ciudades');
    }

    public function destroy($idciudad){
        $citys=Ciudad::findOrFail($idciudad);
        $citys->delete();
       	return Redirect::to('/ciudades');
    }
}
