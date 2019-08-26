<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    //
    protected $table ='aerpuertos';
    protected $primaryKey ='idaerpuerto';
    protected $fillable =['idaerpuerto',
                          'nombrepu',
                          'ciudad_idciudad'];
}
