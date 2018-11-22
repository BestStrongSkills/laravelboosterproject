<?php

namespace App\Models;
use App\User;
Use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
