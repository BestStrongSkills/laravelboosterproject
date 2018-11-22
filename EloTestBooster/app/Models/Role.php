<?php

namespace App\Models;
use App\User;
Use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['id', 'user_id','name',];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
