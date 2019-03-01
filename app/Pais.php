<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
        protected $table = 'pais';
        protected $primaryKey = 'idpais';

        protected $fillable = ['idpais', 
    				     	   'nombrep',
    				     	   'id'];
    				     	   
    protected $dateFormat = 'Ymd H:i:s';


}
