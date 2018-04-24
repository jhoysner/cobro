<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteo extends Model
{
    protected $table = 'conteos';

    protected $fillable = ['tabla', 'valor'];
}
