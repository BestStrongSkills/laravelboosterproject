@extends('layouts.frontend')
@section('header')
<link href="{{asset('css/frontend/rangeslider.css')}}" rel="stylesheet" type="text/css"/> 
<link href="{{asset('css/frontend/solo_division_boosting.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/frontend/bootstrap-responsive-tabs.css')}}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')


				<div class="container">
                	<div class="logo-align-center">
	                 	<img src="images/eloboosting/Logo.png" width="120px" />
                	</div>
                </div>
                
                <div class="container">
                	<div class="bg-boosting">
                        <h1 class="boosting-heded">ELO BOOSTING</h1>
                	</div>
                </div>

                <div class="bg-round-main">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="sold-left"> -->
                                    <div class="panel panel-default" style="padding:0px;background-color:#636363;border-color:#636363">
                                        <div class="panel-body" style="padding:0px;background-color:#636363;border-color:#636363">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color:#acacac;border-bottom:2px solid #787272">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab"  style="padding: 7px 73px !important" id="SoloDivisionBoosting-tab" href="#SoloDivisionBoosting" role="tab" aria-controls="SoloDivisionBoosting" aria-selected="true">
                                                        <h5 class="tabText">Duo Division Boosting</h5>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"  style="padding: 7px 72px !important" id="SoloNetWin-tab"  href="#SoloNetWin" role="tab" aria-controls="SoloNetWin" aria-selected="false">
                                                        <h5 class="tabText">&nbsp&nbsp Duo Net Win &nbsp&nbsp&nbsp</h5>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"  style="padding: 7px 72px !important"  id="SoloPlacementBoosting-tab" href="#SoloPlacementBoosting" role="tab" aria-controls="SoloPlacementBoosting" aria-selected="false">
                                                        <h5 class="tabText">Duo Placement Boosting</h5>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"  style="padding: 7px 72px !important"  id="SoloNormalMatches-tab"  href="#SoloNormalMatches" role="tab" aria-controls="SoloNormalMatches" aria-selected="false">
                                                        <h5 class="tabText">Duo Normal Matches</h5>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent" style="background-color:#636363;padding-bottom:50px">

                                                <div class="tab-pane fade show active"  id="SoloDivisionBoosting" role="tabpanel" aria-labelledby="SoloDivisionBoosting-tab">
                                                    <div class="row">
                                                        
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-sm-12 col-lg-3 current">

                                                                    <div class="col-md-10 col-md-offset-2" style="margin-bottom:2rem;padding-top:3rem">
                                                                        <img src="{{asset('images/divisions/3_4.png')}}" id="image_1" style="margin-left:-15px;">
                                                                        <h3 style="color:white;font-weight:500">Current Rank</h3>
                                                                        <select class="custom-select" id="current-rank" name="current-rank" onchange="get_string();" style="height:40px;width:160px;background-color:#acacac">
                                                                            <option value="1">Diamond</option>
                                                                            <option value="2">Platinum</option>
                                                                            <option value="3" selected="">Gold</option>
                                                                            <option value="4">Silver</option>
                                                                            <option value="5">Bronze</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-10 col-md-offset-2" style="margin-bottom:5rem;height:20px">
                                                                        <select class="custom-select" id="current-division"  name="current-division" onchange="get_string();" style="height:40px;width:160px;background-color:#acacac">
                                                                            <option value="1">Division I</option>
                                                                            <option value="2">Division II</option>
                                                                            <option value="3">Division III</option>
                                                                            <option value="4" selected="">Division IV</option>
                                                                            <option value="5">Division V </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-10 col-md-offset-2" style="margin-bottom:5rem;">
                                                                        <select class="custom-select division-select " id="current-Lp" name="current-Lp" onchange="get_string();" style="height:40px;width:160px;background-color:#acacac">
                                                                            <option value="" disabled="" selected="">Choose Division</option>
                                                                            <option value="1" selected="">0-20 LP</option>
                                                                            <option value="2">21-40 LP</option>
                                                                            <option value="3">41-60 LP</option>
                                                                            <option value="4">61-80 LP</option>
                                                                            <option value="5">81-100 LP</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 col-sm-12 col-lg-3 desired" style="padding-left:0px">
                                                                    <div class="col-md-10 col-md-offset-1" style="margin-bottom:2rem;padding-top:3rem">
                                                                        <img src="{{asset('images/divisions/3_1.png')}}" id="image_2">
                                                                        <h3 style="color:white;font-weight:500;margin-left:20px">Desired Rank</h3>
                                                                        <select class="custom-select rank-select offset-1" id="desired-rank" name="desired-rank" onchange="get_string();" style="height:40px;width:158px;background-color:#acacac">
                                                                            <option value="6">Master</option>
                                                                            <option value="1">Diamond</option>
                                                                            <option value="2">Platinum</option>
                                                                            <option value="3" selected="">Gold</option>
                                                                            <option value="4" >Silver</option>
                                                                            <option value="5" >Bronze</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <select class="custom-select division-select offset-1" id="desired-division" name="desired-division" onchange="get_string();" style="height:40px;width:158px;background-color:#acacac;">
                                                                            <option value="1">Division I</option>
                                                                            <option value="2">Division II</option>
                                                                            <option value="3" selected="">Division III</option>
                                                                            <option value="4">Division IV</option>
                                                                            <option value="5">Division V</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                           
                                                                <div class="col-md-1 col-sm-1 col-lg-1 hidden-xs" style="width: 2%;top:80px;height:100px;padding-left:0px;padding-right:0px">
                                                                    <img src="{{asset('images/eloboosting/border.png')}}" class="img-responsive" alt=""/>
                                                                </div>

                                                                <div class="col-md-6 col-sm-12 col-lg-5 orderitems" style="padding-left:0px;padding-right:0px">
                                                                    <div style="padding-top:6rem;text-align:left">
                                                                        <h4 style="color:white;font-weight:600">Your Order&nbsp:</h4>
                                                                        <ul>
                                                                            <li style="color:white;padding-top:3rem;">
                                                                                Division Boost&nbsp:
                                                                                    <img src="{{asset('images/divisions/4_2.png')}}" style="text-align:left;height:50px;width:40px">  
                                                                                Silver (Division V) -&gt;<img src="{{asset('images/divisions/2_2.png')}}"  style="text-align:left;height:70px;width:60px">&nbsp 
                                                                                
                                                                                Platinum (Division IV)
                                                                            </li> 
                                                                            <li style="padding-top:2rem">
                                                                                <strong style="color:white;"><span style="font-size:20px;">
                                                                                    Total Cost&nbsp:</span>
                                                                                    <span>
                                                                                        <span id="divisionBoosting_price" style="color:#ffd200;font-size:40px;font-weight:600">180</span>
                                                                                        <span style="color:#ffd200;font-size:40px;font-weight:600">$</span>
                                                                                    </span>
                                                                                </strong>
                                                                            </li>
                                                                        </ul>
                                                                        
                                                                        <form  id="payment-form"  action="{!! URL::route('addmoney.paypal') !!}" method="post">
                                                                        {{ csrf_field() }}
                                                                            <input type="hidden" name="divisionBoosting_price" id="divisionBoosting_price"  value="" autofocus>
                                                                            
                                                                            <!-- <input name="name" type="hidden" value="Silver (Division V) -> Silver (Division IV)">
                                                                            <input name="number" type="hidden" value="4">
                                                                            <input name="type" type="hidden" value="division">
                                                                            <input name="custom" type="hidden" value="current_mmr=1220&amp;desired_mmr=1290&amp;current_tier=1&amp;current_division=1&amp;desired_tier=1&amp;desired_division=2&amp;current_lp=1&amp;promo_code=0"> -->
                                                                       
                                                                            <button type="submit" class="btn btn-primary btn-purchase btn-paypal" title="Pay with PayPal" style="background-color:#636363!important;border-color:#636363!important;padding-left:0!important">
                                                                                <img class="control-label paypalimage"  src="{{asset('images/eloboosting/PayPal.png')}}" width="100" style="text-align:left;padding-top:1rem">
                                                                           </button>

                                                                            <span class="hidden-xs" style="text-align:left">
                                                                                <img src="{{asset('images/eloboosting/visa.png')}}" width="100" title="Visa" style="text-align:left;margin-right:30px;">
                                                                                <img src="images/eloboosting/MasterCard.png" width="100" title="MasterCard" style="text-align:left"><br>
                                                                            </span><br>
                                                                            <span class="hidden-xs">
                                                                                <img src="{{asset('images/eloboosting/Bitcoin.png')}}"  width="100" style="">
                                                                                <img src="{{asset('images/eloboosting/litecoin.png')}}"  width="100">
                                                                            </span>
                                                                            <div class="payments-others"  style="padding-top:3rem;color:#150b9d">
                                                                                looking for other payment methods? <a href="/contact">contact us</a>.
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                            </div>

                                                            <div class="col-md-4 offset-2" style="margin-left: 2.33333%;padding-bottom:30px">
                                                                <select class="custom-select division-select offset-1" id="current-Lp" name="current-Lp" style="height:40px;width:110px;background-color:#acacac;margin-top:20px;">
                                                                    <option value="" disabled="" selected="">Choose Mode</option>
                                                                    <option value="1" selected="">OnLineMode</option>
                                                                    <option value="2">offLine</option>
                                                                </select>
                                                                <button  class="btn btn-dafault" onclick="goto_divisionBoosting();" style="background-color:#a67c32;color:white;border-radius:0px;margin-left:10px;margin-top:20px;">SUBMIT</button>
                                                            </div>
                                                    </div>
                                                </div>
                                                <!-- ====================secondTab=================== -->
                                                <div class="tab-pane fade" id="SoloNetWin" role="tabpanel" aria-labelledby="SoloNetWin-tab">
                                                    <div class="row">
                                                    <form>
                                                        <input name="cost" type="hidden" value="18">
                                                        <input name="name" type="hidden" value="Silver (Division V) -> Silver (Division IV)">
                                                        <input name="number" type="hidden" value="4">
                                                        <input name="type" type="hidden" value="division">
                                                        <input name="custom" type="hidden" value="current_mmr=1220&amp;desired_mmr=1290&amp;current_tier=1&amp;current_division=1&amp;desired_tier=1&amp;desired_division=2&amp;current_lp=1&amp;promo_code=0">
                                                            <!-- <div class="form-group"> -->
                                                            <div class="col-md-6 col-sm-12 col-lg-1 current"></div>

                                                            <div class="col-md-6 col-sm-12 col-lg-5 current">
                                                                <div style="margin-bottom:2rem;padding-top:5rem">
                                                                    <img class="img-responsive" src="{{asset('images/eloboosting/Unrankedthree.png')}}" id="image_1" style="margin-left:9px"><br>
                                                                    <p style="color:white;font-size:18px;font-weight::600;text-align:left">Number Of  Games</p>
                                                                    <select class="custom-select rank-select form-control" id="wins_current" name="wins_current-rank" style="height:40px;width:158px;background-color:#acacac">
                                                                        <option value="" disabled="" selected="">Choose Rank</option>
                                                                        <option value="7">Challenger</option>
                                                                        <option value="6">Master</option>
                                                                        <option value="1">Diamond</option>
                                                                        <option value="2">Platinum</option>
                                                                        <option value="3">Gold</option>
                                                                        <option value="4">Silver</option>
                                                                        <option value="5">Bronze</option>
                                                                    </select>
                                                                </div>

                                                                <div>
                                                                    <select class="custom-select division-select form-control" id="wins_division" name="current-division" style="height:40px;width:158px;background-color:#acacac">
                                                                        <option value="1">Division I</option>
                                                                        <option value="2">Division II</option>
                                                                        <option value="3">Division III</option>
                                                                        <option value="4">Division IV</option>
                                                                        <option value="5">Division V</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6 col-sm-6 col-lg-6" style="padding-top:3rem;padding-left:0 !important">
                                                                    <input type="range" name="solo_win_range" class="range" min="1" max="40" step="1" value="5" data-orientation="horizontal" data-container="#duo" id="duo_range" data-rangeslider style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                                    <br>
                                                                    <output style="font-size:20px;margin-left:180px;color:white!important;">
                                                                        <p style="color:white!important;font-size:20px!important;margin-top:30px;margin-bottom:60px;">15</p>
                                                                    </output>
                                                                </div>
                                                            </div>

    
                                                            <div class="col-md-1 col-sm-1 col-lg-1" style="top:110px;height:100px;">
                                                                <img src="{{asset('images/eloboosting/border.png')}}" class="img-responsive" alt=""/>
                                                            </div>
                                                            
                                                            <div class="col-md-6 col-sm-12 col-lg-5 col-md-offset-1">
                                                                <div style="padding-top:1rem;text-align:left">
                                                                    <h4 style="color:white;font-weight:600">Your Order&nbsp:</h4>
                                                                    <ul>
                                                                        <li style="color:white;padding-top:4rem;">
                                                                            <p style="color:white;font-size:15px;font-weight::600;">NormalBoost&nbsp:25 wins;</p>
                                                                        </li> 
                                                                        <li style="padding-top:2rem">
                                                                            <strong style="color:white;">
                                                                                <span style="font-size:20px;">Total Cost&nbsp:</span>
                                                                                <span>
                                                                                    <span id="PriceOutput" style="color:#ffd200;font-size:40px;font-weight:600">180€ ($210)</span>
                                                                                </span>
                                                                            </strong>
                                                                        </li>
                                                                    </ul>

                                                                    <div class=" text-left">
                                                                        <a href="" style="">
                                                                            <img class="col-md-4 control-label" src="{{asset('images/eloboosting/PayPal.png')}}" width="100" style="text-align:left;padding-top:1rem">
                                                                        </a>
                                                                        <span class="hidden-xs" style="text-align:left">
                                                                            <img src="{{asset('images/eloboosting/visa.png')}}" width="100" style="text-align:left">
                                                                            <img src="{{asset('images/eloboosting/MasterCard.png')}}" width="100" style="text-align:left"><br>
                                                                        </span><br>
                                                                        <span class="hidden-xs">
                                                                            <img src="{{asset('images/eloboosting/Bitcoin.png')}}"  width="100">
                                                                            <img src="{{asset('images/eloboosting/litecoin.png')}}"  width="100">
                                                                        </span>
                                                                        <div class="payments-others"  style="padding-top:3rem;color:#150b9d">
                                                                            looking for other payment methods? <a href="/contact">contact us</a>.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="clear:both"></div>
                                                            <div class="col-md-5 offset-1" style="padding-bottom:30px">
                                                                <select class="custom-select division-select " id="current-Lp" name="current-Lp" style="height:40px;width:120px;background-color:#acacac;margin-top:20px;">
                                                                    <option value="" disabled="" selected="">Choose Mode</option>
                                                                    <option value="1" selected="">OnLineMode</option>
                                                                    <option value="2">offLine</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-dafault" style="background-color:#a67c32;color:white;border-radius:0px;margin-left:10px;margin-top:20px;">SUBMIT</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <!-- ====================third Tab=================== -->
                                                <div class="tab-pane fade" id="SoloPlacementBoosting" role="tabpanel" aria-labelledby="SoloPlacementBoosting-tab">
                                                    <div class="row">
                                                        <form>
                                                            <input name="cost" type="hidden" value="18">
                                                            <input name="name" type="hidden" value="Silver (Division V) -> Silver (Division IV)">
                                                            <input name="number" type="hidden" value="4">
                                                            <input name="type" type="hidden" value="division">
                                                            <input name="custom" type="hidden" value="current_mmr=1220&amp;desired_mmr=1290&amp;current_tier=1&amp;current_division=1&amp;desired_tier=1&amp;desired_division=2&amp;current_lp=1&amp;promo_code=0">
                                                            
                                                            <div class="col-md-6 col-sm-12 col-lg-1 current"></div>
                                                            
                                                            <div class="col-md-6 col-sm-12 col-lg-5 current">
                                                                <div style="margin-bottom:2rem;padding-top:5rem">
                                                                    <img src="{{asset('images/divisions/3_4.png')}}" id="image_5" style="margin-left:-20px;">
                                                                    <h3 style="color:white;font-weight:500;text-align:center;padding-top:20px;padding-bottom:20px;text-align:left;">Last Season Rank</h3>
                                                                    <select class="custom-select rank-select form-control" id="currently_placement" name="current-rank" style="height:50px;width:160px;background-color:#acacac">
                                                                        <option value="1">Diamond</option>
                                                                        <option value="2">Platinum</option>
                                                                        <option value="3" selected="">Gold</option>
                                                                        <option value="4">Silver</option>
                                                                        <option value="5">Bronze</option>
                                                                    </select>
                                                                </div>

                                                                <div style="margin-bottom:5rem;">
                                                                    <p style="color:white;font-size:18px;font-weight::600;text-align:left;">Number Of Placement Games</p>
                                                                </div>
                                                                
                                                                <div class="col-md-6 col-sm-12 col-lg-6" style="padding-left:0!important">
                                                                    <input type="range" name="SoloPlacementBoosting_range" class="range" min="1" max="30" step="1" value="5" data-orientation="horizontal" data-container="#SoloPlacementBoosting" id="SoloPlacementBoosting_tab" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">

                                                                    <output style="font-size:20px;margin-left:180px;color:white!important;">
                                                                        <p style="color:white!important;font-size:20px!important;margin-top:30px;margin-bottom:60px;">15</p>
                                                                    </output>
                                                                </div>
                                                            </div>

                                                           
                                                            <div class="col-md-1 col-sm-1 col-lg-2 hidden-xs" style="width:7%;top:120px;height:110px;padding-left:0px;padding-right:20px">
                                                                <img src="{{asset('images/eloboosting/border.png')}}" class="img-responsive" alt=""/>
                                                            </div>
                                                            
                                                            <div class="col-md-6 col-sm-12 col-lg-5 col-md-offset-1">
                                                                <div style="text-align:left">
                                                                <h4 style="color:white;font-weight:600">Your Order&nbsp:</h4>
                                                                <ul>
                                                                    <li style="color:white;padding-top:4rem;">
                                                                        <p style="color:white;font-size:15px;font-weight::600;">PlacementBoost&nbsp:
                                                                            <img src="{{asset('images/divisions/4_2.png')}}" style="text-align:left;height:50px;width:50px">  
                                                                        Silver (Division V)</p>
                                                                    </li> 
                                                                    <li style="padding-top:2rem">
                                                                        <strong style="color:white;">
                                                                            <span style="font-size:20px;"> Total Cost&nbsp:</span>
                                                                            <span>
                                                                                <span id="PlaceMentOutput" style="color:#ffd200;font-size:40px;font-weight:600">180€ ($210)</span>
                                                                            </span>
                                                                        </strong>
                                                                    </li>
                                                                </ul>
                                                                
                                                                <div class=" text-left">
                                                                    <a href="" style="">
                                                                        <img class="col-md-4 control-label" src="{{asset('images/eloboosting/PayPal.png')}}" width="100" style="text-align:left;padding-top:1rem">
                                                                    </a>
                                                                    <span class="hidden-xs" style="text-align:left">
                                                                        <img src="{{asset('images/eloboosting/visa.png')}}" width="100" style="text-align:left">
                                                                        <img src="{{asset('images/eloboosting/MasterCard.png')}}" width="100" style="text-align:left"><br>
                                                                    </span><br>
                                                                    <span class="hidden-xs">
                                                                        <img src="{{asset('images/eloboosting/Bitcoin.png')}}"  width="100">
                                                                        <img src="{{asset('images/eloboosting/litecoin.png')}}"  width="100">
                                                                    </span>
                                                                    <div class="payments-others"  style="padding-top:3rem;color:#150b9d">
                                                                        looking for other payment methods? <a href="/contact">contact us</a>.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                        <div class="col-md-4 col-md-offset-1" style="padding-bottom:30px">
                                                            <select class="custom-select division-select " id="current-Lp" name="current-Lp" style="height:40px;width:110px;background-color:#acacac;margin-top:20px;">
                                                                <option value="" disabled="" selected="">Choose Mode</option>
                                                                <option value="1" selected="">OnLineMode</option>
                                                                <option value="2">offLine</option>
                                                            </select>
                                                            <button type="submit" class="btn btn-dafault" style="background-color:#a67c32;color:white;border-radius:0px;margin-left:10px;margin-top:20px;">SUBMIT</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- ====================forth Tab=================== -->
                                            <div class="tab-pane fade" id="SoloNormalMatches" role="tabpanel" aria-labelledby="SoloNormalMatches-tab">
                                                <div class="row">
                                                    <form>
                                                        <input name="cost" type="hidden" value="18">
                                                        <input name="name" type="hidden" value="Silver (Division V) -> Silver (Division IV)">
                                                        <input name="number" type="hidden" value="4">
                                                        <input name="type" type="hidden" value="division">
                                                        <input name="custom" type="hidden" value="current_mmr=1220&amp;desired_mmr=1290&amp;current_tier=1&amp;current_division=1&amp;desired_tier=1&amp;desired_division=2&amp;current_lp=1&amp;promo_code=0">
                                                        <div class="col-md-6 col-sm-12 col-lg-1 current"></div>

                                                        <div class="col-md-6 col-sm-12 col-lg-5 current">
                                                            <div style="margin-bottom:2rem;padding-top:5rem">
                                                                <img class="img-responsive " src="{{asset('images/eloboosting/Unrankedthree.png')}}" id="image_1" style="text-align:center"><br>
                                                            </div>

                                                            <div style="margin-bottom:5rem;">
                                                                <p style="color:white;font-size:18px;font-weight::600;text-align:left">Number Of Wins</p>
                                                            </div>
                                                            
                                                            <div class="col-md-6 col-sm-12 col-lg-6" style="padding-left:0!important">
                                                                <input type="range" name="SoloNormalMatches_range" class="range" min="1" max="30" step="1" value="5" data-orientation="horizontal" data-container="#SoloNormalMatches" id="SoloNormalMatches_tab" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">

                                                                <output style="font-size:20px;margin-left:180px;color:white!important;">
                                                                    <p style="color:white!important;font-size:20px!important;margin-top:30px;margin-bottom:60px;">15</p>
                                                                </output>
                                                            </div>
                                                        </div>

   
                                                        <div class="col-md-1 col-sm-1 col-lg-1" style="top:110px;height:100px;">
                                                            <img src="{{asset('images/eloboosting/border.png')}}" class="img-responsive" alt=""/>
                                                        </div>
                                                        
                                                        <div class="col-md-6 col-sm-12 col-lg-5 col-md-offset-1">
                                                            <div style="padding-top:1rem;text-align:left">
                                                                <h4 style="color:white;font-weight:600">Your Order&nbsp:</h4>
                                                                <ul>
                                                                    <li style="color:white;padding-top:4rem;"><p style="color:white;font-size:15px;font-weight::600;">NormalBoost&nbsp:25 wins;</p>
                                                                    </li> 
                                                                    <li style="padding-top:2rem">
                                                                        <strong style="color:white;">
                                                                            <span style="font-size:20px;"> Total Cost&nbsp:</span>
                                                                            <span>
                                                                                <span id="normalDraftOutput" style="color:#ffd200;font-size:40px;font-weight:600">180€ ($210)</span>
                                                                            </span>
                                                                        </strong>
                                                                    </li>
                                                                </ul>
                                                                
                                                                <div class=" text-left">
                                                                    <a href="" style="">
                                                                        <img class="col-md-4 control-label" src="{{asset('images/eloboosting/PayPal.png')}}" width="100" style="text-align:left;padding-top:1rem">
                                                                    </a>
                                                                    <span class="hidden-xs" style="text-align:left">
                                                                        <img src="{{asset('images/eloboosting/visa.png')}}" width="100" style="text-align:left">
                                                                        <img src="{{asset('images/eloboosting/MasterCard.png')}}" width="100" style="text-align:left"><br>
                                                                    </span><br>
                                                                    <span class="hidden-xs">
                                                                        <img src="{{asset('images/eloboosting/Bitcoin.png')}}"  width="100">
                                                                        <img src="{{asset('images/eloboosting/litecoin.png')}}"  width="100">
                                                                    </span>
                                                                    <div class="payments-others"  style="padding-top:3rem;color:#150b9d">
                                                                        looking for other payment methods? <a href="/contact">contact us</a>.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div style="clear:both"></div>

                                                        <div class="col-md-4 offset-1" style="padding-bottom:30px">
                                                            <select class="custom-select division-select " id="current-Lp" name="current-Lp" style="height:40px;width:100px;background-color:#acacac;margin-top:20px;">
                                                                <option value="" disabled="" selected="">Choose Mode</option>
                                                                <option value="1" selected="">OnLineMode</option>
                                                                <option value="2">offLine</option>
                                                            </select>
                                                            <button type="submit" class="btn btn-dafault" style="background-color:#a67c32;color:white;border-radius:0px;margin-left:20px;margin-top:20px;">SUBMIT</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <!--  </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border-color:#a67c33;margin-right:12%;margin-left:12%">
@endsection
                

       
@section('footer')
     <!-- jQuery CDN -->
       
     <script type="text/javascript" src="{{asset('js/home/rangeslider.js')}}"></script> 
     <script src="{{asset('js/eloboosting/jquery.bootstrap-responsive-tabs.min.js')}}"></script>
     <script src="{{asset('js/home/rank.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/home/range_controlling.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/home/paypal-ajax.js')}}"></script>
 
     <!-- =======================tab control========== -->
     <script>
         $('.responsive-tabs').responsiveTabs({
         accordionOn: ['xs', 'sm'] // xs, sm, md, lg 
         });
     </script>
@endsection
