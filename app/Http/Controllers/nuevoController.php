<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use App\Ciudad;
use DB;

class nuevoController extends Controller
{
    //
    public function index(Request $request){
/*
      $comp = Ciudad::select(DB::raw("CONCAT('pais.nombrep','ciudad.nombre') AS pais"),'ciudad.idciudad')->join('pais','idpais','=','pais_idpais')->get();

       // dump output to see how it looks.
        dd($comp);// array key should be the arrray index, the value the concatted value.
*/
      /*$cars   = Car::where(DB::raw('concat(first_name," ",vin," ",make)') , 'LIKE' , '%$search%')->paginate();*/

      $citypais = DB::table('ciudad')
                   ->join('pais','idpais','=','pais_idpais')
                   ->select(DB::raw('concat(ciudad.nombrec,", ",pais.nombrep) AS cpais'),'ciudad.idciudad')
                   ->orderBy('idciudad','ASC')
                   ->get();
    
      $city = $citypais->pluck('cpais','idciudad');

    	$query=trim($request->get('paises'));
    
    	$reportes=Pais::where('nombrep','LIKE','%'.$query.'%')->get();

    	
    	
    	return view ('pg.inicio',compact('city'));
    }
    public function reserva(Request $request){



      $ciudad=$request->input('cityp');

      $buscar = DB::table('ciudad')
                ->join('pais','idpais','=','pais_idpais')
                ->select(DB::raw('concat(ciudad.nombrec,", ",pais.nombrep) AS cpais'),'ciudad.idciudad')
                ->where('idciudad','LIKE','%'.$ciudad.'%')
                ->first();



      
      $fecha=$request->input('fecha');

      $hora=$request->input('hora');

      $dvuelos = array();

      $dvuelos ['fecha']=$fecha;
      $dvuelos ['hora']=$hora;

      $fecha = get($dvuelos);
   


      return view('pg.reserva',['buscar'=>$buscar,'dvuelos'=>$dvuelos]);
    }
}
