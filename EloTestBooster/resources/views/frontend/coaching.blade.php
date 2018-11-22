@extends('layouts.frontend')
@section('header')
        <link rel="stylesheet" href="{{asset('css/frontend/coaching.css')}}">
        <link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/frontend/style.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{asset('secondfonts/big-stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
@endsection

@section('content')


                <div class="bg-round-main">
                    <div class="container">
                        <div class="logo-align-center">
                            <img src="{{asset('images/eloboosting/Logo.png')}}" width="120px" />
                        </div>
                    </div>
                	<div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="sold-left">
                                    <h1>Coaching </h1>
                                    <h4>Our Team</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                            <div class="flex-container">
                                <!-- <div class="row"> -->
                                    <div class="col-md-2 col-sm-2 col-xs-2 rect_area" style="">
                                        <img src="{{asset('images/champions/15.png')}}" id="rect_img" class="img-responsive" alt="" style="border:2px solid #a67c33;"/><br>
                                        <h4 class="Celnous">CELINOS</h4>
                                        <a href="#"><img src="{{asset('images/coaching/speaker1.png')}}" class="img-rect-bottom" alt="" style="width:30px;height:30px"/>
                                        </a>
                                        <a href="#"><img src="{{asset('images/coaching/german.png')}}" class="img-rect-bottom" alt="" style="width:30px;height:30px"/>
                                        </a>
                                        <a href="#"><img src="{{asset('images/coaching/england.png')}}" class="img-rect-bottom" alt="" style="width:30px;height:30px"/>
                                        </a>
                                    </div>

                                    <div class="col-md-2 col-sm-2 col-xs-2 division_area">
                                        <img src="{{asset('images/divisions/1_1.png')}}" class="img-diamond-responsive" alt="" style=""/><br>
                                        <h4 class="diamond">Diamond1</h4>
                                    </div>

                                    <div class="col-md-1 col-sm-1 col-xs-1 rate_price">
                                        <p class="diamond" style="padding-left:0;padding-bottom:0;">20&nbsp$</p>
                                        <hr style="background-color:#725627;padding-left:2rem;width:10px !important;margin:0">
                                        <p style="color:white;padding-top:0px">Hour</p>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-3 starArea">
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/half-star.png')}}" class="img-responsive" alt="" style="width:16px;height:25px;"/>
                                        <h4 style="padding-left:0;color:white;padding-top:2rem">4.6&nbspOf&nbsp5&nbsp&nbsp&nbsp(Voted 13)</h4>
                                    </div>
                                
                                    <div class="col-md-4 col-sm-4 col-xs-4 boosterimage">
                                        <h4 class="Celnous" style="font-size:20px;padding-bottom:20px">TOP&nbsp&nbspPLAYED&nbsp&nbspCHAMPIONS</h4>
                                        <img src="{{asset('images/coaching/booster1.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left;0px"/>
                                        <img src="{{asset('images/coaching/booster2.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                        <img src="{{asset('images/coaching/booster3.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                        <img src="{{asset('images/coaching/booster4.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                        <img src="{{asset('images/coaching/booster5.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                    </div>
                                <!-- </div> -->
                            </div>

                            <div class="flex-container">
                                <!-- <div class="row"> -->
                                    <div class="col-md-2 col-sm-2 col-xs-2 rect_area" style="">
                                        <!-- <img src="images/Coaching/rect.png" id="rect_img" class="img-responsive" alt="" style=""/><br> -->
                                        <img src="{{asset('images/champions/15.png')}}" id="rect_img" class="img-responsive" alt="" style="border:2px solid #a67c33;"/><br>
                                        <h4 class="Celnous">CELINOS</h4>
                                        <a href="#"><img src="{{asset('images/coaching/speaker1.png')}}" class="img-rect-bottom" alt="" style="width:30px;height:30px"/>
                                        </a>
                                        <a href="#"><img src="{{asset('images/coaching/german.png')}}" class="img-rect-bottom" alt="" style="width:30px;height:30px"/>
                                        </a>
                                        <a href="#"><img src="{{asset('images/coaching/england.png')}}" class="img-rect-bottom" alt="" style="width:30px;height:30px"/>
                                        </a>
                                    </div>

                                    <div class="col-md-2 col-sm-2 col-xs-2 division_area">
                                        <img src="{{asset('images/divisions/1_1.png')}}" class="img-diamond-responsive" alt="" style=""/><br>
                                        <h4 class="diamond">Diamond2</h4>
                                    </div>

                                    <div class="col-md-1 col-sm-1 col-xs-1 rate_price">
                                        <p class="diamond" style="padding-left:0;padding-bottom:0;">25&nbsp$</p>
                                        <hr style="background-color:#725627;padding-left:2rem;width:10px !important;margin:0">
                                        <p style="color:white;padding-top:0px">Hour</p>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-3 starArea">
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;"/>
                                        <img src="{{asset('images/coaching/half-star.png')}}" class="img-responsive" alt="" style="width:16px;height:25px;"/>
                                        <h4 style="padding-left:0;color:white;padding-top:2rem">4.5&nbspOf&nbsp5&nbsp&nbsp&nbsp(Voted 13)</h4>
                                    </div>
                                
                                    <div class="col-md-4 col-sm-4 col-xs-4 boosterimage">
                                        <h4 class="Celnous" style="font-size:20px;padding-bottom:20px">TOP&nbsp&nbspPLAYED&nbsp&nbspCHAMPIONS</h4>
                                        <img src="{{asset('images/coaching/booster1.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left;0px"/>
                                        <img src="{{asset('images/coaching/booster2.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                        <img src="{{asset('images/coaching/booster3.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                        <img src="{{asset('images/coaching/booster4.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                        <img src="{{asset('images/coaching/booster5.png')}}" class="img-responsive" alt="" style="width:50px;height:50px;margin-left:0.7rem"/>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border-color:#a67c33;margin-top:0px;margin-bottom:0px;">
@endsection

@section('footer')

@endsection
