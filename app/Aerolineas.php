<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aerolineas extends Model
{
    //
      protected $table = 'aerolineas';

    protected $primaryKey = 'idaerolinea';

    protected $fillable =[ 'idaerolinea',
                           'nombreli'];
}
