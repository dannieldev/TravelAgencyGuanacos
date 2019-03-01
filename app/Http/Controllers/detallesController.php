<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use App\TestTrait;
use App\Reservas;
use App\Pasajero;
use App\Clase;


class detallesController extends Controller
{
    //

      /*public function index(Request $request){
    $ciudadD=$request->input('info');
    dd($ciudadD);

    return view('pg.detalles');
  }*/
  public function index(Request $request){

  
      $name=$request->get('nombre');
      $apellido=$request->get('apellido');
      $nombre=$name." ".$apellido;
      $fecha=$request->get('fecha');
      $dui=$request->get('dui');
      $genero=$request->get('sexo');

      $pasajero=new Pasajero;
      $pasajero->nombre=$nombre;
      $pasajero->fecha=$fecha;
      $pasajero->numid=$dui;
      $pasajero->genero=$genero;
      $pasajero->save();

      return redirect()->back();     
  }


  public function edit(Request $request){

        $hora=$request->get('hora');
        $fecha=$request->get('fecha');
        $pago=$request->get('total');
        $pago= (int) $pago;
        $pasajeros=$request->get('personas');
        $pasajeros=(int) $pasajeros;
        $clase=$request->get('clase');
        $destino=$request->get('destino');
        $destino= (int) $destino;

        $seachpass = Pasajero::orderby('idpasajero','DESC')->first();
        $idpass=$seachpass->idpasajero;

        $seachclass = Clase::select('id


          clases')->where('tipclase','LIKE','%'.$clase.'%')->first();
        $idclass=$seachclass->idclases;


        $reservas=new Reservas;
        $reservas->hora=$hora;
        $reservas->fecha=$fecha;
        $reservas->pago=$pago;
        $reservas->pasajeros=$pasajeros;
        $reservas->clases_idclases=$idclass;
        $reservas->aerolipu_id_aerolipu=$destino;
        $reservas->pasajero_idpasajero=$idpass;
        $reservas->save();

        return Redirect::to('/nueva');
      
    }

}
