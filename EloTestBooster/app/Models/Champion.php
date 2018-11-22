<?php

namespace App\Models;
use App\User;
Use App\Models\Champion;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable = [
        'name',
        'imageName',
        'champion_key',
        'riot_id',
        'role'
    ];

    public function users() 
    {
        return $this->hasMany('App\User');
    }

    public function champion() 
    {
        return $this->hasMany('App\Models\Champion');
    }

    public function boosters() 
    {
        return $this->hasMany('App\Models\Booster');
    }
}