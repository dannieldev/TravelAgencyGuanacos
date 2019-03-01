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

    /*  PRUEVAS
       $comp = Ciudad::select(DB::raw("CONCAT('pais.nombrep','ciudad.nombre') AS 

       pais"),'ciudad.idciudad')->join('pais','idpais','=','pais_idpais')->get();

       // dump output to see how it looks.
        dd($comp);// array key should be the arrray index, the value the concatted value.

      $cars   = Car::where(DB::raw('concat(first_name," ",vin," ",make)') , 'LIKE' , '%$search%')->paginate();*/

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

    /*GET REQUEST*/
      $ciudadD=$request->input('cityd');
      $ciudadP=$request->input('cityp');

      $fecha=$request->input('fecha');
      $hora=$request->input('hora');
      $horain=(int)$hora;
      $clase=$request->input('clase');
      $adultos=$request->input('adulto');
      $adultos= (int) $adultos;
      $ninos=$request->input('nino');
      $ninos= (int) $ninos;

    /*CONSULTAS SQL*/ 
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

          $destinos = DB::table('aerolipu as aerli')
          ->join('aerpuertos as ae','aerpuerto_id','=','idaerpuerto')
          ->join('aerolineas as a','aerolinea_id','=','idaerolinea')
          ->join('aerpuertos as aep','aerpuertos_idaerpuerto','=','aep.idaerpuerto')
          ->select('ae.nombrepu as aeropuerto','a.nombreli as aerolinia','aep.nombrepu as destino','ae.ciudad_idciudad as cinicio','aep.ciudad_idciudad as cdestino','id_aerolipu')
          /*->where('ae.ciudad_idciudad','LIKE','%'.$ciudadD.'%')
          ->where('aep.ciudad_idciudad','LIKE','%'.$ciudadP.'%')*/
          ->get();



    /*Calcular los kilometros en los paises
                    $unit = "K";
                    $addressFrom = $ciud->nombrep;
                    $addressTo = $ciup->nombrep;

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

                    $miles * 1.609344;*/

                    $miles = 123;
      

    /*CALCULOS DE SERVICIOS*/
        $gas = $miles*3;
        $tiempo = round($miles/300,2);
 
        $gaspcp = ($gas/455)*($tiempo*0.50);

       /* dd($tiempo);

        for($i=$tiempo; $i<=0; $i--){
           do {// do while impreme 1 ves en caso de que mo se cumpla la funcion 
             
           } while ( $q <= 25);

        }
       */
       /* CLASS */
       
          if ($clase == "Economico"){
            $class = "Economic Clas";

              $personas= $adultos+ $ninos; 

             $servicios = (236+$gaspcp)*$personas;

             $total = round($servicios);      
          }elseif ($clase == "Ejecutiva") {
            $class = "Executive Class";     

            dd('clase ejecutiva');
          } else {  
            dd('clase primera');
            $class = "First Class";
          }
            
        /*$dvuelos=[
        'fecha'=>$request->input('fecha'),
        'hora'=>$request->input('hora'),
        'km'=>$miles
        ];*/


        /*PARAMETROS PARA VIEW*/
            return view('pg.reserva',['cfrom'=>$cfrom,
                                      'cto'=>$cto,
                                      'hora'=>$hora,
                                      'fecha'=>$fecha, 
                                      'total'=>$total,
                                      'tiempo'=>$tiempo,
                                      'destinos'=>$destinos,
                                      'class'=>$class]);

        /*INVESTIGACION
            $1.40 por galon de avion 

            300 galones por 100 km 
            
            $250 pilotos 

            $150 azafatas

            455 pasajeros en cada avion 

            Econimico
            empleaods => 2p 6a: $1,400  por cada persona se cobra $3
            camida    => $13
            otros     => $20
            Total de $236


            Ejecutiva
            empleaods => 3p 9a:  $2,100 por cada persona se cobra $5
            comida    => $20
            otros     => $30
            Total de $255

            Primera
            empleaods => 3p 10a: $2,250 por cada persona se cobra $6
            comida    => $30
            otros     => $40
            Total de $276

            300 km * hora

            */

    }
    public function edit(Request $request,$destino){

      $destino=$destino;
      $depais=$request->get('depais');
      $apais=$request->get('apais');
      $hora=$request->get('hora');
      $fecha=$request->get('fecha');
      $clase=$request->get('clase');
      $total=$request->get('total');
      $duracion=$request->get('duracion');

      return view('pg.detalles',['depais'=>$depais,
                                 'apais'=>$apais,
                                 'hora'=>$hora,
                                 'fecha'=>$fecha,
                                 'clase'=>$clase,
                                 'total'=>$total,
                                 'destino'=>$destino]);
    }
    public function store(Request $request){

      dd($request->all());
      
    }

}
