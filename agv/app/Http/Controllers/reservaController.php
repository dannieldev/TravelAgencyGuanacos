<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservas;
use DB;

class reservaController extends Controller
{
    //
    public function index(Request $request){
        if ($request){
        $query=trim($request->get('searchText'));
        $reservas=DB::table('reserva')
            ->select('reserva.hora','reserva.fecha','reserva.pago','reserva.pasajeros','clases.tipclase','aerolipu.id_aerolipu','pasajero.nombre')
            ->join('clases','idclases','=','clases_idclases')
            ->join('pasajero','idpasajero','=','pasajero_idpasajero')
            ->join('aerolipu','id_aerolipu','=','aerolipu_id_aerolipu')
/*            ->where('nombreli','LIKE','%'.$query.'%')
*/            ->orderBy('idreserva','desc')
            ->paginate(10);
        }
    	return view('crud.reservacion.index',['reservas'=>$reservas,'searchText'=>$query]);
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
