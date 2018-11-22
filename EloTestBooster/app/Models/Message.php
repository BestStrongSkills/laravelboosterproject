<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_username','message','read'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
