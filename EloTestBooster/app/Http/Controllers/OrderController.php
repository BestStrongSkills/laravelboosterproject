<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function divisonBoosting()
    {
        $custom=Order::get();
        return view('backend.memberArea_solo',compact('custom'));
    }

    public function divisonBoostingSave(Request $request)
    {
        $this->validate(request(),[
            'divisionBoosting_price' => 'required|string|max:255',
            'current_rank' => 'required|string|max:100',
            'current_division' => 'required|string|max:255',
            'current_Lp' => 'required|string|string|max:255|',
            'desired_division' => 'required|string|max:255',
            'desired_rank' => 'required|string|max:255',
            'mode_selection' => 'required|string|max:255',
        ]);

        //Create and save the user.
        $user_name=Auth()->user()->name;

        
        // $order = Order::create(request(['user_id','current_rank','current_division','current_Lp','desired_division','desired_rank','divisionBoosting_price']));
            $order = Order::create();
            $order->user_name = $user_name;
            $order->current_rank = $request->current_rank;
            $order->current_division = $request->current_division;
            $order->current_Lp = $request->current_Lp;
            $order->desired_division = $request->desired_division;
            $order->desired_rank = $request->desired_rank;
            $order->divisionBoosting_price = $request->divisionBoosting_price;
            $order->customer = $request->customer;
            $order->mode_selection =  $request->mode_selection;
            $order->save();
            // dd($order);
            // return response()->json($post);
        return redirect()->route('backend.memberArea_solo');
    }
}
