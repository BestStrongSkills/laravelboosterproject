<?php

namespace App\Models;
use App\User;
Use App\Models\Order;
Use App\Models\GameAccount;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'user_id', 
        'amount',
        'totalData',
        'starting_image_save',
        'desired_image_save',
        'member_starting_rank',
        'member_desired_rank',
        'wins_price',
        'winstotalData',
        'wins_mode_statue',
        'mode_statue',
        'payment_id',
        'status',
        ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    public function gameaccount() 
    {
        return $this->hasOne('App\Models\GameAccount');
    }
}
