<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    //
    protected $table ='aerolipu';
    protected $primaryKey ='id_aerolipu';
    protected $fillable = ['id_aerolipu',
                            'aerpuerto_id',
                            'aerolinea_id',
                            'aerpuertos_idaerpuerto'];


}
