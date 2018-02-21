<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
    	'ficha_catastra', 'matricula_inmoviliaria', 'direccion_predio', 'nombre_predio', 'a_hectareas', 
    	'a_metros', 'a_construida', 'tipo_tarifa', 'destino_economico', 'porc_tarifa', 'expediente',
    ];
}
