<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBoss extends Model
{
   	protected $table = 'user_boss';

    protected $fillable = [
        'user_id', 
        'user_boss', 
    ];
}
