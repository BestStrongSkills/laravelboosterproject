<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Auth;
use App\User;
use Redirect;
use Input;
use App\Models\Order;
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

class AddMoneyController extends HomeController
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

        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));

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
    /**
     * Store a details of payment with paypal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function postPaymentWithpaypal(Request $request)
    {
        
         
       if($amount=$request->amount)
       {
            $amount=$request->amount;
            $totalData=$request->totalData;
            $mode_statue=$request->mode_statue;
            // dd($amount);

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

            $redirect_urls->setReturnUrl(URL::route('payment.status')) /** Specify return URL **/
                          ->setCancelUrl(URL::route('payment.status'));


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
                    /** die('Some error occur, sorry for inconvenient'); **/
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


       else if($wins_price=$request->wins_price)
       {
            $payer = new Payer();
            
            $payer->setPaymentMethod('paypal');
            
            $item_1 = new Item();

            $item_1->setName('Item 1') /** item name **/
                    ->setCurrency('USD')
                    ->setQuantity(1)
                    ->setPrice($request->get('wins_price')); /** unit price **/

            $item_list = new ItemList();

            $item_list->setItems(array($item_1));
            
            $wins_price = new Amount();


            $wins_price->setCurrency('USD')
                        ->setTotal($request->get('wins_price'));
                
            $transaction = new Transaction();

            $transaction->setAmount($wins_price)
                        ->setItemList($item_list)
                        ->setDescription('Your transaction description');
            
            $redirect_urls = new RedirectUrls();

            $redirect_urls->setReturnUrl(URL::route('payment.status')) /** Specify return URL **/
                          ->setCancelUrl(URL::route('payment.status'));

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
                    /** die('Some error occur, sorry for inconvenient'); **/
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
            // create an orders table 
            $user_name=Auth()->user()->name;
            $order = Order::create();
            $order->user_name = $user_name;
            $order->amount = $request->amount;
            $order->totalData = $request->totalData;
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
  
    }

    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        //Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) 
        {
            \Session::put('error','Payment failed');
            // \Session::put('success','Log in success . please select you rank and division.');
            
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
            // $this->saveOrder($request);
            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/
            \Session::put('success','Payment success');
           //dd($request->amount);
            $this->saveOrder('success');
            // return Redirect::route('home');
            return view('backend.memberArea_solo');
        }
        \Session::put('error','Payment failed');

        return Redirect::route('addmoney.frontend.solo_boosting');
    }

    protected function saveOrder($term )
    {
       
        // Order::create([
        //     'amount' => $request->amount,
        //     'totalData' => $request->totalData,
        //     'mode_statue' => $request->mode_statue,
        // ]);
        // return  Redirect::route('backend.memberArea_solo');
        $payment_id = Session::get('paypal_payment_id');
        if($term == 'success'){
            $order = Order::where('payment_id'->$payment_id)->first();
            $order->status = 'success';
            $order->save();
        }         
            
            dd($order);
        return view('backend.memberArea_solo');
    }
  }