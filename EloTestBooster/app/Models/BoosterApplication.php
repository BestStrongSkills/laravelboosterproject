<?php

namespace App\Models;
use App\User;
Use App\Models\BoosterApplication;
use Illuminate\Database\Eloquent\Model;

class BoosterApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'boosterAccess',
        'summonername',
        'skype_discord',
        'current_rank',
        'boosted_before',
        'willing',
        'queue',
        'otherHire',
        'file',
        ];

    

}
