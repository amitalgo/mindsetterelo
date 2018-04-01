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
        'name', 'email', 'password','mobile','is_Admin','is_Active', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public  function user_x()
    {
        return $this->hasOne('App\user_x');
    }
    public function userRoles()
    {
        return $this->hasMany(userRoles::class);

    }
    public function subDetails()
    {
        return $this->hasMany('App\subDetails');
    }
}
