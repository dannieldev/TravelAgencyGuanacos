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

      $ciudadD=$request->input('cityd');
      $ciudadP=$request->input('cityp');


      $cfrom = DB::table('ciudad')
                ->join('pais','idpais','=','pais_idpais')
                ->select(DB::raw('concat(ciudad.nombrec,", ",pais.nombrep) AS cpais'),'ciudad.idciudad')
                ->where('idciudad','LIKE','%'.$ciudadD.'%')
                ->first();

      $cto = DB::table('ciudad')
                ->join('pais','idpais','=','pais_idpais')
                ->select(DB::raw('concat(ciudad.nombrec,", ",pais.nombrep) AS cpais'),'ciudad.idciudad')
                ->where('idciudad','LIKE','%'.$ciudadP.'%')
                ->first();

           $ciud = DB::table('ciudad')
          ->join('pais','idpais','=','pais_idpais')
          ->select('ciudad.nombrec','pais.nombrep','ciudad.idciudad')
          ->where('idciudad','LIKE','%'.$ciudadD.'%')
          ->first();

           $ciup = DB::table('ciudad')
          ->join('pais','idpais','=','pais_idpais')
          ->select('ciudad.nombrec','pais.nombrep','ciudad.idciudad')
          ->where('idciudad','LIKE','%'.$ciudadP.'%')
          ->first();


      //dd($ciud->nombrep);

      //dd($ciup->nombrep);


      $fecha=$request->input('fecha');

      $hora=$request->input('hora');


  
            $unit = "K";
            $addressFrom = 'España';
            $addressTo = 'Rusia';

            $formattedAddrFrom = str_replace(' ','+',$addressFrom);
            $formattedAddrTo = str_replace(' ','+',$addressTo);
            
            //Send request and receive json data
            $geocodeFrom = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false');
            $outputFrom = json_decode($geocodeFrom);
            $geocodeTo = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false');
            $outputTo = json_decode($geocodeTo);
            
            //Get latitude and longitude from geo data
            $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
            $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
            $latitudeTo = $outputTo->results[0]->geometry->location->lat;
            $longitudeTo = $outputTo->results[0]->geometry->location->lng;
            
            //Calculate distance from latitude and longitude
            $theta = $longitudeFrom - $longitudeTo;
            $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));

            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            $miles * 1.609344;

        $dvuelos=[
        'fecha'=>$request->input('fecha'),
        'hora'=>$request->input('hora'),
        'km'=>$miles
        ];


            return view('pg.reserva',['cfrom'=>$cfrom,'cto'=>$cto]);
    }
}
