<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Models\Champion;
use App\Models\Role;
use App\Models\GameAccount;
use App\Models\Order;

// use PYS\LolApi\Api as LolApi;
// use PYS\LolApi\ApiRequest\Region;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.solo_boosting');
    }

    public function solo()
    {

        if(Auth::user()->is_admin==1)
        {
            return view('admin.admindashboard');
        }
        elseif(Auth::user()->is_admin==2)
        {
            $orders=Order::orderByRaw("RAND()")->take(4)->get();
            return view('booster.boosterdashboard',compact('orders'));
        }
        elseif(Auth::user()->is_admin==0)
        {
            $images=Champion::get();
            $roleImages=Role::get();
            $user_id=Auth()->user()->id;
            $servers=GameAccount::where('user_id','=',$user_id)->select('serverName')->first();
            $summonernames=GameAccount::where('user_id','=',$user_id)->select('summonerName')->first();
            $startingRanks=Order::where('user_id','=',$user_id)->select('starting_image_save','member_starting_rank')->first();
            $desiredRanks=Order::where('user_id','=',$user_id)->select('desired_image_save','member_desired_rank')->first();
            $order_id = Order::where('user_id','=',$user_id)->select('id')->first();
            
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
                                
            return view('backend.memberArea_solo' ,compact('images','roleImages','servers','summonernames','user_id',
                        'startingRanks','desiredRanks','small_starting_image','small_starting_division',
                        'small_desired_image','small_desired_division','startingRank_imageName','smalldesiredImageName','order_id'));
        }      
    }

    public function solo_account(Request $request)
    {
        $request->validate([
            'accountName' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'summonerName' => 'required|string|max:200',
            'serverName' => 'required|string|max:200',
            'note' => 'required|string|max:255',
        ]);
        
        $user_id=Auth()->user()->id;
        $order = Order::where('user_id','=',$user_id)->select('id')->first();
        $order_id=$order->id;

        // $api = new LolApi('RGAPI-0afd9b7d-d4ab-4480-a31b-df7743ad58cd');
        //     $region=$request->serverName;
        //     $summonerName=$request->summonerName;
        //     $accountId=$request->accountName;
        //     $summoner = $api->summoner($region, $summonerName);
        //     $summonerByAccount = $api->summoner($region, $accountId);        
        // $summonerById = $api->summoner($region, $summonerId);
        // $summonerByAccount = $api->summoner($region, $accountId, 'account');
        // $summonerByName = $api->summoner($region, $name, 'name');
        
        $gameaccount=GameAccount::create();
            $gameaccount->user_id= $user_id;
            $gameaccount->order_id = $order_id;
            $gameaccount->accountName = $request->accountName;
            $gameaccount->password = $request->password;
            $gameaccount->summonerName = $request->summonerName;
            $gameaccount->serverName = $request->serverName;
            $gameaccount->note = $request->note;
            $gameaccount->gameImage = $request->selectedImages;
            $gameaccount->gameRole = $request->selectedRoles;
            $gameaccount->save();
        return redirect()->route('backend.memberArea_solo');
    }

    public function duo()
    {
        return view('backend.memberArea_duo');
    }
    public function memberProfile()
    {
        return view('backend.memberArea_profile');
    }
    public function memberAreaReview()
    {
        return view('backend.memberArea_review');
    }
}
