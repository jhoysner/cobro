<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function type()
    {
        return $this->belongsTo('App\Type');
    }    

    public function user_boss()
    {
        return $this->hasOne('App\UserBoss');
    }

    public function boss_users()
    {
        return $this->hasMany('App\UserBoss', 'boss_id');
    }
}
