<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $images=Champion::get();
       
    	return view('memberarea_solo' ,compact('images'));
    }
}
