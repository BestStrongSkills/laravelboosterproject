<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Models\Champion;
use App\Models\Role;
use App\Models\GameAccount;
use App\Models\Order;

use Illuminate\Http\Request;

class BoosterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function boosterdashboard()
    {
        $user_id=Auth()->user()->id;
        $orders=Order::orderByRaw("RAND()")->take(4)->get();
        $order_id = Order::where('user_id','=',$user_id)->select('id')->first();
    	return view('booster.boosterdashboard',compact('orders','order_id'));
    }

    public function order_show_Modal($id)
    {
        $order = Order::findOrFail($id);
       
        return view('booster.boosterdashboard',compact('order'));
    }

    public function boosterBidStore(Order $order,$id)
    {
        $order = Order::findOrFail($id);
       
        return view('booster.boosterdashboard',compact('order'));
    }

    public function boosterorder()
    {
        
        
        $user_id=Auth()->user()->id;
        $order_id = Order::where('user_id','=',$user_id)->select('id')->first();
        $championImages=GameAccount::where('user_id','=',$user_id)->select('gameImage')->first();
            $gameImages = explode(",",$championImages->gameImage);
          
        $roleImages=GameAccount::where('user_id','=',$user_id)->select('gameRole')->first();
            $gameRoles = explode(",",$roleImages->gameRole);

        $servers=GameAccount::where('user_id','=',$user_id)->select('serverName')->first();
        $summonernames=GameAccount::where('user_id','=',$user_id)->select('summonerName')->first();
        $startingRanks=Order::where('user_id','=',$user_id)->select('starting_image_save','member_starting_rank')->first();
        $desiredRanks=Order::where('user_id','=',$user_id)->select('desired_image_save','member_desired_rank')->first();
        
        $cashout = Order::where('user_id','=',$user_id)->select('amount')->first();
        $description = Order::where('user_id','=',$user_id)->select('totalData')->first();
        $gameAccounts=GameAccount::where('user_id','=',$user_id)->get();
        $note=GameAccount::where('user_id','=',$user_id)->select('note')->first();

        
        $rowStarting=Order::where('user_id','=',$user_id)->select('starting_image_save')->first();
        $small_starting_image=substr($rowStarting->starting_image_save ,0,-2);
        $small_starting_division=substr($rowStarting->starting_image_save ,2 );

        $startingImageName=Order::where('user_id','=',$user_id)->select('member_starting_rank')->first();
        $startingRank_imageName=substr($startingImageName->member_starting_rank,0,1);
        
        

        $rowDesired=Order::where('user_id','=',$user_id)->select('desired_image_save')->first();
        $small_desired_image=substr($rowDesired->desired_image_save ,0,-2);
        $small_desired_division=substr($rowDesired->desired_image_save ,2 );
        $small_desired_rank_imageName=Order::where('user_id','=',$user_id)->select('member_desired_rank')->first();
        $smalldesiredImageName=substr($small_desired_rank_imageName->member_desired_rank,0,1);
                            
        return view('booster.boosterorder' ,compact('gameImages','gameRoles','servers','summonernames','user_id','gameAccounts',
                    'startingRanks','desiredRanks','small_starting_image','small_starting_division','cashout','description','note',
                    'small_desired_image','small_desired_division','startingRank_imageName','smalldesiredImageName','order_id'));

    }
    public function boosterprofile()
    {
        return view('booster.boosterprofile');
    }

    public function boosterpayment()
    {
        return view('booster.boosterpayment');
    }

   
}
