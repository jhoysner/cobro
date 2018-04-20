<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
     protected $table = 'asignaciones';

     protected $fillable = ['abogado_id', 'secretaria_id', 'cc_id', 'tabla'];


     public function predio(){
     	return  $this->belongsTo('App\Predio' , 'cc_id');
     }
}
