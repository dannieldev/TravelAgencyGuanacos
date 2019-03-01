<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    //

        protected $table = 'reserva';
        protected $primaryKey = 'idreserva';

        protected $fillable = ['idreserva', 
    				     	   'hora',
    				     	   'fecha',
    				     	   'tiempo',
    				     	   'precio',
    				     	   'clase_idclases',
    				     	   'aerolipu_id_aerolipu'];
  protected $dateFormat = 'Ymd H:i:s';

}
