<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use App\Models\Champion;
use App\Models\Order;
use App\Models\GameAccount;
use App\Models\Role;
use Auth;
use App\User;
use Redirect;
use Input;


/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class BoosterPaymentController extends HomeController
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');

        $this->_api_context = new ApiContext(

            new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));

        $this->_api_context->setConfig($paypal_conf['settings']);
    }
    /**
     * Show the application paywith paypalpage.
     *
     * @return \Illuminate\Http\Response
     */

    public function payWithPaypal()
    {
        return view('frontend.solo_boosting');
    }
   
    public function postPaymentWithpaypal(Request $request)
    {
            $amount=$request->amount;
            $totalData=$request->totalData;
            $member_desired_rank=$request->member_desired_rank;
            $member_starting_rank=$request->member_starting_rank;
            $starting_image_save=$request->starting_image_save;
            $desired_image_save=$request->desired_image_save;
            $mode_statue=$request->mode_statue;
            
            
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');
          
            $item_1 = new Item();
            $item_1->setName('Item 1') /** item name **/
                    ->setCurrency('USD')
                    ->setQuantity(1)
                    ->setPrice($request->get('amount')); /** unit price **/

            $item_list = new ItemList();
            $item_list->setItems(array($item_1));
            
            $amount = new Amount();
            $amount->setCurrency('USD')
                    ->setTotal($request->get('amount'));
                
            $transaction = new Transaction();
            $transaction->setAmount($amount)
                    ->setItemList($item_list)
                    ->setDescription('Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('paypal.status')) /** Specify return URL **/
                          ->setCancelUrl(URL::route('paypal.cancel'));


            $payment = new Payment();
            $payment->setIntent('Sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirect_urls)
                    ->setTransactions(array($transaction));
                   
                /** dd($payment->create($this->_api_context));exit; **/
            try 
            {
                $payment->create($this->_api_context);
            }
            catch (\PayPal\Exception\PPConnectionException $ex) 
            {
                if (\Config::get('app.debug')) 
                {
                    \Session::put('error','Connection timeout');
                    return Redirect::route('addmoney.frontend.solo_boosting');
                    /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                    /** $err_data = json_decode($ex->getData(), true); **/
                    /** exit; **/
                } 
                else 
                {
                    \Session::put('error','Some error occur, sorry for inconvenient');
                    return Redirect::route('addmoney.frontend.solo_boosting');
                }
            }
            foreach($payment->getLinks() as $link) 
            {
                if($link->getRel() == 'approval_url') 
                {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            //========================= create an orders table ========================//

            // $user_name=Auth()->user()->name;
            $user_id=Auth()->user()->id;
            $order = Order::create();
            $order->user_id = $user_id;
            $order->amount = $request->amount;
            $order->totalData = $request->totalData;
            $order->member_desired_rank = $request->member_desired_rank;
            $order->member_starting_rank = $request->member_starting_rank;
            $order->starting_image_save = $request->starting_image_save;
            $order->desired_image_save = $request->desired_image_save;
            $order->mode_statue = $request->mode_statue;
            $order->payment_id = $payment->getId();
            $order->save();

            

            /** add payment ID to session **/
           Session::put('paypal_payment_id', $payment->getId());
        
            if(isset($redirect_url)) 
            {
                /** redirect to paypal **/
                return Redirect::away($redirect_url);
            }
            \Session::put('error','Unknown error occurred');

            return Redirect::route('addmoney.frontend.solo_boosting');
    }
 
    public function getPaymentStatus(Request $request)
    {
        if(empty(Session::get('paypal_payment_id')))
        {
            /** Get the payment ID before session clear **/ 
            $payment_id = Session::get('paypal_payment_id');
            
            /** clear the session payment ID **/
            // Session::forget('paypal_payment_id');
            if (empty(Input::get('PayerID')) || empty(Input::get('token'))) 
            {
                //\Session::put('error','To order, you have to Register.please register.');
                \Session::put('success','To Order , you have to select your rank and division. Please select your rank and division.');
                
                return Redirect::route('frontend.solo_boosting');
            }
            $payment = Payment::get($payment_id, $this->_api_context);
            /** PaymentExecution object includes information necessary **/
            /** to execute a PayPal account payment. **/
            /** The payer_id is added to the request query parameters **/
            /** when the user is redirected from paypal back to your site **/
            $execution = new PaymentExecution();

            $execution->setPayerId(Input::get('PayerID'));
            /**Execute the payment **/
            $result = $payment->execute($execution, $this->_api_context);
            /** dd($result);exit; /** DEBUG RESULT, remove it later **/
            if ($result->getState() == 'approved') 
            { 
                /** Here Write your database logic like that insert record or value in database if you want **/
                \Session::put('success','Payment success');

                $this->saveOrder('success');

                    $user_id=Auth()->user()->id;
                    $images=Champion::get();
                    $roleImages=Role::get();
                    $startingRanks=Order::where('user_id','=',$user_id)->select('starting_image_save','member_starting_rank')->first();
                    $desiredRanks=Order::where('user_id','=',$user_id)->select('desired_image_save','member_desired_rank')->first();
                    $order_id = Order::where('user_id','=',$user_id)->select('id')->first();

                    $rowStarting=Order::where('user_id','=',$user_id)->select('starting_image_save')->first();
                    $small_starting_image=substr($rowStarting->starting_image_save ,0,-2);
                    $small_starting_division=substr($rowStarting->starting_image_save ,2 );
                    $startingImageName=Order::where('user_id','=',$user_id)->select('member_starting_rank')->first();
                    $startingRank_imageName=substr($startingImageName->member_starting_rank,0,1);
                    // dd($startingRank_imageName);


                    $rowDesired=Order::where('user_id','=',$user_id)->select('desired_image_save')->first();
                    $small_desired_image=substr($rowDesired->desired_image_save ,0,-2);
                    $small_desired_division=substr($rowDesired->desired_image_save ,2 );
                    $small_desired_rank_imageName=Order::where('user_name','=',$user_name)->select('member_desired_rank')->first();
                    $smalldesiredImageName=substr($small_desired_rank_imageName->member_desired_rank,0,1);
                             
                    return view('backend.memberArea_solo' ,compact('images','roleImages','servers','summonernames',
                                'startingRanks','desiredRanks','small_starting_image','small_starting_division',
                                'small_desired_image','small_desired_division','startingRank_imageName','smalldesiredImageName','order_id'));
            }
            \Session::put('error','Payment failed');
            return Redirect::route('addmoney.frontend.solo_boosting');
        }
        else 
        {
            $user_id=Auth()->user()->id;
            $images=Champion::get();
            $roleImages=Role::get();
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

    protected function saveOrder($term)
    {
        $payment_id = Session::get('paypal_payment_id');
        Session::forget('paypal_payment_id');
        // destroy the session here 
        if($term == 'success')
        {
            $order = Order::where('payment_id',$payment_id)->first();
            $order->status = TRUE;
            $order->save();
        }   
        $user_id=Auth()->user()->id;
        $images=Champion::get();
        $roleImages=Role::get();
        $startingRanks=Order::where('user_id','=',$user_id)->select('starting_image_save','member_starting_rank')->first();
        $desiredRanks=Order::where('user_id','=',$user_id)->select('desired_image_save','member_desired_rank')->first();
        $order_id = Order::where('user_id','=',$user_id)->select('id')->first();

        
                            
        return view('backend.memberArea_solo' ,compact('images','roleImages','servers','summonernames','user_id',
                    'startingRanks','desiredRanks','order_id'));
    }

    public function gift_payment_status(Request $request)
    {
        $payment_id = Session::get('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) 
        {
            //\Session::put('error','To order, you have to Register.please register.');
            \Session::put('success','please select your rank and division.');
            return Redirect::route('backend.memberArea_solo');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') 
        { 
            \Session::put('success','Payment success');
            // $this->saveOrder('success');
            //     $images=Champion::get();
            //     $roleImages=Role::get();
                return view('backend.memberArea_solo');
        }
        \Session::put('error','Payment failed');

        return Redirect::route('addmoney.backend.memberArea_solo');
    }

    public function PaymentCancel()
    {
        return 'Payment Aborted';
    }
  }

