<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Aerolineas;

class aerolineasController extends Controller
{
    
    public function index(Request $request){
     if ($request){
        $query=trim($request->get('searchText'));
     	$lineas=Aerolineas::where('nombreli','LIKE','%'.$query.'%')
					     	->orderBy('idaerolinea','desc')
				            ->paginate(10);
    	}

    	return view('crud.aerolineas.index',['lineas'=>$lineas,'searchText'=>$query]);
    }

    public function create(){
    	return view('crud.aerolineas.nuevo');
    }

    public function store(Request $request){
    	$aerolinea=new Aerolineas;
        $aerolinea->nombreli=$request->get('nombre');
        $aerolinea->save();
        return Redirect::to('/aerlineas');
    }
     public function edit($idaerolinea)
    {
        return view("crud.aerolineas.edit",["lineas"=>Aerolineas::where('idaerolinea', $idaerolinea)->firstOrFail()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idaerolinea)
    {

        $aerolinea=Aerolineas::where('idaerolinea','=',$idaerolinea)->first();
        $aerolinea->nombreli=$request->get('nombre');
        $aerolinea->update();

        return Redirect::to('/aerlineas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idaerolinea)
    {
        //
        $aerolinea=Aerolineas::findOrFail($idaerolinea);
        $aerolinea->delete();
        return Redirect::to('/aerlineas');
    }


}
