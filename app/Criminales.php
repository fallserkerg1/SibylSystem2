<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criminales extends Model
{
    // 
    Protected $table = 'criminales';
    Protected $fillable = [
        'name', 'last_name', 'cri_latent', 'leg_status', 'case_reg', 'cell', 'description'
    ];

}
