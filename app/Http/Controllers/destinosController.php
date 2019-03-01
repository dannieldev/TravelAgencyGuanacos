<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Destino;
use App\Aeropuerto;
use App\Aerolineas;
use DB;

class destinosController extends Controller
{
    //
    public function index(Request $request){
        if ($request){
        $query=trim($request->get('searchText'));
          $destinos = DB::table('aerolipu as aerli')
          ->join('aerpuertos as ae','aerpuerto_id','=','idaerpuerto')
          ->join('aerolineas as a','aerolinea_id','=','idaerolinea')
          ->join('aerpuertos as aep','aerpuertos_idaerpuerto','=','aep.idaerpuerto')
          ->select('ae.nombrepu as aeropuerto','a.nombreli as aerolinea','aep.nombrepu as destino','ae.ciudad_idciudad as cinicio','aep.ciudad_idciudad as cdestino','id_aerolipu')
          ->where('ae.ciudad_idciudad','LIKE','%'.$query.'%')
          ->orderBy('idaerolinea','desc')
/*          ->get()->toArray()
*/          ->paginate(10);
        }

    	return view('crud.destinos.index',['destinos'=>$destinos,'searchText'=>$query]);
    }
    public function create(){

        $aeropuerto = Aeropuerto::orderBy('idaerpuerto', 'ASC')->pluck('nombrepu', 'idaerpuerto');
        $aerolinea = Aerolineas::orderBy('idaerolinea','ASC')->pluck('nombreli','idaerolinea');

        return view('crud.destinos.new',compact('aeropuerto'),compact('aerolinea'));
    }
    public function store(Request $request){
        $destino=new Destino;

        $ainicio=$request->get('ainicio');
        $ainicio=(int)$ainicio;
        $adestino=$request->get('adestino');
        $adestino=(int)$adestino;
        $aerolinea=$request->get('aeroline');
        $aerolinea=(int)$aerolinea;


        $destino->aerpuerto_id=$ainicio;
        $destino->aerpuertos_idaerpuerto=$adestino;
        $destino->aerolinea_id=$aerolinea;
        $destino->save();
       /* return Redirect::to('/destinos');*/
       return Redirect::to('nueva');
    }
    public function edit($id_aerolipu){
         $aeropuerto = Aeropuerto::orderBy('idaerpuerto', 'ASC')->pluck('nombrepu', 'idaerpuerto');
         $aerolinea = Aerolineas::orderBy('idaerolinea','ASC')->pluck('nombreli','idaerolinea');

        return view("crud.destinos.edit",["destinos"=>Destino::where('id_aerolipu', $id_aerolipu)->firstOrFail(),'aeropuerto'=>$aeropuerto,'aerolinea'=>$aerolinea]);
    }
    public function update(Request $request, $id_aerolipu){

        $destino=Destino::where('id_aerolipu','=',$id_aerolipu)->first();
        

        $ainicio=$request->get('ainicio');
        $ainicio=(int)$ainicio;
        $adestino=$request->get('adestino');
        $adestino=(int)$adestino;
        $aerolinea=$request->get('aeroline');
        $aerolinea=(int)$aerolinea;

        $destino->aerpuerto_id=$ainicio;
        $destino->aerpuertos_idaerpuerto=$adestino;
        $destino->aerolinea_id=$aerolinea;
        $destino->update();
        return Redirect::to('/destinos');
    }
    public function destroy($id_aerolipu){
        $destino=Destino::findOrFail($id_aerolipu);
        $destino->delete();
        return Redirect::to('/destinos');
    }
}
