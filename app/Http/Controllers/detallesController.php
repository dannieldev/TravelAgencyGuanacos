<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use App\TestTrait;
use App\Reservas;


class detallesController extends Controller
{
    //
      /*public function index(Request $request){
    $ciudadD=$request->input('info');
    dd($ciudadD);

    return view('pg.detalles');
  }*/
  public function edit(Request $request){

        $reservas=new Reservas;
        $reservas->hora="12.3";
        $reservas->fecha="12/1/12";
        $reservas->tiempo="45";
        $reservas->precio="$138";
        $reservas->clases_idclases=1;
        $reservas->aerolipu_id_aerolipu=1;
        $reservas->save();

        return Redirect::to('/nueva');


      //  $categoria=new Sistemas;
      //  $categoria->articulo=$request->get('articulo');
      //  $categoria->cantidad=$request->get('cantidad');
      //  $categoria->descripcion=$request->get('descripcion');
      //  $categoria->observacion=$request->get('observacion');
      //  $categoria->save();
      //  return Redirect::to('/registro');
      
    }

}
