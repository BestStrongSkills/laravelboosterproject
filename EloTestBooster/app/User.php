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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders() 
    {
        return $this->hasMany('App\Models\Order');
    }

    public function champions() 
    {
        return $this->hasMany('App\Models\Champion');
    }

    public function roles() 
    {
        return $this->hasMany('App\Models\Role');
    }

    public function gameaccount() 
    {
        return $this->hasOne('App\Models\GameAccount');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }
}
