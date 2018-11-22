<?php

Route::get('/','FrontendController@dashboard')->name('index');
Route::get('/elo-boosting', 'FrontendController@EloBoosting')->name('frontend.elo_boosting');
Route::get('/solo_boosting', 'FrontendController@solo_boosting')->name('frontend.solo_boosting');
Route::get('/duo_boosting', 'FrontendController@duo_boosting')->name('frontend.duo_boosting');
Route::get('/coaching', 'FrontendController@coaching')->name('frontend.coaching');
Route::get('/demo', 'FrontendController@demo')->name('frontend.demo');
Route::get('/booster_application', 'FrontendController@booster_application')->name('frontend.booster_application'); 
Route::post('/boosterstore', 'FrontendController@booster_store')->name('boosterApplication');
Route::get('/faq', 'FrontendController@faq')->name('frontend.faq');
Route::get('/memberarea', 'FrontendController@memberArea')->name('frontend.memberArea'); 
Route::get('/contact', 'FrontendController@contact')->name('frontend.contact_us');
Route::post('/contact_with_admin', 'FrontendController@contact_with_admin')->name('contact_with_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/solo', 'HomeController@solo')->name('backend.memberArea_solo');
        Route::get('messages', 'ChatController@fetchMessages');
        Route::post('messages', 'ChatController@sendMessage');
Route::get('/profile','ChampionController@profile')->name('backend.memberArea_champion');
Route::post('/solo_account', 'HomeController@solo_account')->name('solo_account');
// Route::post('/solo_account', 'LOLApiController@solo_account')->name('solo_account');

Route::get('/duo', 'HomeController@duo')->name('backend.memberArea_duo');
Route::get('/memberProfile', 'HomeController@memberProfile')->name('backend.memberArea_profile');
Route::get('/memberAreaReview', 'HomeController@memberAreaReview')->name('backend.memberArea_review');

// ==================booster========================//
Route::get('/boosterdashboard', 'BoosterController@boosterdashboard')->name('booster.boosterdashboard');
Route::get('/order/{id}/edit', 'BoosterController@boosterBidedit')->name('booster.boosterBid')->middleware('auth');

Route::get('/boosterorder', 'BoosterController@boosterorder')->name('booster.boosterorder');
Route::get('/boosterprofile', 'BoosterController@boosterprofile')->name('booster.boosterprofile');
Route::get('/boosterpayment', 'BoosterController@boosterpayment')->name('booster.boosterpayment');



// ==================admin========================//
Route::get('/admindashboard', 'AdminController@admindashboard')->name('admin.admindashboard');
Route::get('/adminAreaorder', 'AdminController@adminAreaorder')->name('admin.adminAreaorder');
Route::get('/adminAreapayment', 'AdminController@adminAreapayment')->name('admin.adminAreapayment');

//===================Payment with paypal======================//
Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'paypal.status','uses' => 'AddMoneyController@getPaymentStatus',));
Route::get('paypalcancel', array('as' => 'paypal.cancel','uses' => 'AddMoneyController@PaymentCancel',));

//===================Gift Payment with paypal======================//
Route::get('giftpaywithpaypal', array('as' => 'addmoney.giftpaywithpaypal','uses' => 'AddMoneyController@giftpayWithPaypal',));
Route::post('paypalwin', array('as' => 'addmoney.paypalwins','uses' => 'AddMoneyController@winsPaymentWithpaypal',));
Route::post('giftpaypal', array('as' => 'addmoney.gift_with_paypal','uses' => 'AddMoneyController@giftPayment_With_Paypal',));
Route::get('giftpaypal', array('as' => 'payment.gift_payment_status','uses' => 'AddMoneyController@gift_payment_status',));


//===================Order items save in database======================//
Route::post('/divisonBoosting/order', 'OrderController@divisonBoostingSave');