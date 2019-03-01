<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    //
    protected $table = 'clases';
        protected $primaryKey = 'idclases';

        protected $fillable = ['idclases', 
    				     	   'tipclase'];
    				     	   
    protected $dateFormat = 'Ymd H:i:s';
}
