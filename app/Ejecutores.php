<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejecutores extends Model
{
    //
    Protected $table = 'ejecutores';  
    protected $fillable = [
        'name', 'last_name', 'rank', 'shell', 'email', 'agente','co_criminal','description'
    ];
}
