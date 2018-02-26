<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaPredio extends Model
{
    protected $table = "personas_predio";

    protected $fillable = [
    	'persona_id', 'predio_id', 'porcentaje', 
    ];
}