<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    //
    protected $table ='aerpuertos';
    protected $primaryKey ='idaerpueto';
    protected $fillable =['idaeropuerto',
                          'nombrepu',
                          'ciudad_idciudad'];
}
