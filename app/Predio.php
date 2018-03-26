<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
    	'ficha_catastral', 'matricula_inmobiliaria', 'direccion_predio', 'nombre_predio', 'a_hectareas', 
    	'a_metros', 'a_construida', 'tipo_tarifa', 'destino_economico', 'porc_tarifa', 'expediente',
    ];


    public function asignacion(){

    	return $this->hasOne('App\Asignacion', 'cc_id');
    }
}
