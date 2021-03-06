<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaPredio extends Model
{
    protected $table = "persona_predio";

    protected $fillable = [
    	'persona_id', 'predio_id', 'porcentaje',   
    ];

    public function personas(){

        return $this->belongsToMany('App\Persona');
    }

    public function predios(){

        return $this->belongsToMany('App\Predio');
    } 
}