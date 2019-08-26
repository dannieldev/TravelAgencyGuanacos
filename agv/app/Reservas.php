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
    				     	   'pago',
    				     	   'pasajeros',
    				     	   'clases_idclases',
    				     	   'aerolipu_id_aerolipu',
                     'pasajero_idpasajero',
                     'updated_at',
                     'created_at'];
        protected $dateFormat = 'Ymd H:i:s';

}
