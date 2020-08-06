<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agentes extends Model
{
    //
    Protected $table = 'agentes';  
    protected $fillable = [
        'name', 'last_name', 'rank', 'shell', 'email', 'distrit','cod_sibyl','description'
    ];
      
}
