<?php

namespace App\Models;
Use App\Models\GameAccount;
Use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    
    protected $fillable = [
        'user_id',
        'order_id',
        'accountName',
        'password',
        'summonerName',
        'serverName',
        'note',
        'gameImage',
        'gameRole',
    ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    public function order() 
    {
        return $this->hasOne('App\Models\Order');
    }
    
}
