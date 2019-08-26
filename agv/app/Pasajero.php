<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    //
        protected $table = 'pasajero';
        protected $primaryKey = 'idpasajero';

        protected $fillable = ['idpasajero', 
    				     	   'nombre',
    				     	   'fecha',
    				     	   'numid',
    				     	   'genero',
    				     	   'updated_at',
    				     	   'created_at'];
    				     	   
        protected $dateFormat = 'Ymd H:i:s';
}
