<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Pais;

class paisesController extends Controller
{
    //
    public function index(Request $request){

     if ($request){
        $query=trim($request->get('searchText'));
     	$contrys=Pais::where('nombrep','LIKE','%'.$query.'%')
					     	->orderBy('idpais','desc')
				            ->paginate(10);
		}

    	return view('crud.paises.index',['contrys'=>$contrys,'searchText'=>$query]);
    }
    public function create(){
    	return view('crud.paises.nueva');
    }

    public function store(Request $request){
    	$contrys = new Pais;
    	$contrys->idpais=$request->get('codigo');
    	$contrys->nombrep=$request->get('nombre');
    	$contrys->save();
    	return Redirect::to('/paises');
    }
    public function edit($id){
    	return view('crud.paises.editar',['contrys'=>Pais::where('id',$id)->firstOrfail()]);
    }
    public function update(Request $request, $id){
    	$contrys =Pais::where('id','=',$id)->first();
    	$contrys->idpais=$request->get('codigo');
    	$contrys->nombrep=$request->get('nombre');
    	$contrys->update();
    	return Redirect::to('/paises');
    }
    public function destroy($idpais){
    	$contrys=Pais::findOrFail($idpais);
    	$contrys->delete();
    	return Redirect::to('/paises');
    }

}
