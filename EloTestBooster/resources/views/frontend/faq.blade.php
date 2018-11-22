@extends('layouts.frontend')
@section('header')
        <link href="{{asset('css/frontend/faq.css')}}" rel="stylesheet">

        <link href="{{asset('css/frontend/bootstrap-responsive-tabs.css')}}" rel="stylesheet">
@endsection

@section('content')

                <div class="bg-round-main">
                    <div class="container">
                        <div class="logo-align-center">
                            <img src="{{asset('images/eloboosting/Logo.png')}}" width="120px" />
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="bg-boosting">
                            <h1 class="boosting-heded">FAQ</h1>
                        </div>
                    </div>
                   
                	<div class="container">
                        <div class="row">
                            <!-- <div class="col-md-1 col-sm-1 col-xs-1 "></div> -->
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <div class="sold-left">
                                    <div class="panel panel-default" style="padding:0px;background-color:#636363;border-color:#636363">
                                        <div class="panel-body" style="padding:0px;background-color:#636363;border-color:#636363">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color:#acacac;border-bottom:2px solid #787272">
                                                <li class="nav-item">
                                                    <a class="nav-link active" style="padding:12px 155px !important" id="SoloDivisionBoosting-tab" data-toggle="tab" href="#SoloDivisionBoosting" role="tab" aria-controls="SoloDivisionBoosting" aria-selected="true">
                                                        <h5 class="tabText">GENERAL</h5>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" style="padding:12px 123px !important" id="SoloNetWin-tab" data-toggle="tab" href="#SoloNetWin" role="tab" aria-controls="SoloNetWin" aria-selected="false">
                                                        <h5 class="tabText">REGISTRATION&nbsp&&nbspPAYMENT</h5>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" style="padding:12px 158px !important"  id="SoloPlacementBoosting-tab" data-toggle="tab" href="#SoloPlacementBoosting" role="tab" aria-controls="SoloPlacementBoosting" aria-selected="false">
                                                        <h5 class="tabText">BOOST</h5>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent" style="background-color:#636363;padding-bottom:50px">

                                                <div class="tab-pane fade show active"  id="SoloDivisionBoosting" role="tabpanel" aria-labelledby="SoloDivisionBoosting-tab">  
                                                    <div class="row" style="padding-top:20px">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div class="panel-group" id="accordion">

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1" onclick="statuschange(1);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img1" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white"> How does this service work?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse1" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2" onclick="statuschange(2);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img2" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a style="float:left;padding-left:20px;color:white">what service do you  function on?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse2" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3" onclick="statuschange(3);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img3" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can I banned for boosting?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse3" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4" onclick="statuschange(4);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img4" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">I have  question that isn't listed on the FAQs</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse4" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white">
                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse5" onclick="statuschange(5);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img5" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">I have  question that isn't listed on the FAQs</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse5" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white">
                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- ====================secondTab=================== -->
                                                <div class="tab-pane fade" id="SoloNetWin" role="tabpanel" aria-labelledby="SoloNetWin-tab">
                                                    <div class="row" style="padding-top:20px">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div class="panel-group" id="accordion">

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse6" onclick="statuschange(6);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img6" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can the boosters&nbspplay&nbspwith&nbspchampions&nbspor&nbsproles&nbspthat&nbspI want?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse6" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">I can pay with paypal,bank card</div>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse7" onclick="statuschange(7);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img7" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">what are the methods of payment?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse7" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">I can pay with paypal,bank card</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse8" onclick="statuschange(8);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img8" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Are there any discount of payment?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse8" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">You can get more service from boosters.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse9" onclick="statuschange(9);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img9" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">How do I purcharge Bitcoin or Litecoin?</a>
                                                                        </p>
                                                                    </div>

                                                                    <div id="collapse9" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse10" onclick="statuschange(10);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img10" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">How to make payments through Bitcoin or Litecoin?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse10" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please go to the Elo Booster . In there you can click any paymentlink.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse11" onclick="statuschange(11);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img11" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">My change the champions and roles the booster to play</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse11" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">
                                                                            Yes , you can change your  champions and roles</div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================third Tab=================== -->
                                                <div class="tab-pane fade" id="SoloPlacementBoosting" role="tabpanel" aria-labelledby="SoloPlacementBoosting-tab">
                                                    <div class="row" style="padding-top:20px">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div class="panel-group" id="accordion">

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse12" onclick="statuschange(12);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img12" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can i get same booster?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse12" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">I can pay with paypal,bank card</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse13" onclick="statuschange(13);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img13" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">what if  I am not satisfied with my booster?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse13" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">I can pay with paypal,bank card</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse14" onclick="statuschange(14);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img14" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Are boosters going to chat with my friends?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse14" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">You can get more service from boosters.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse15" onclick="statuschange(15);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img15" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Do the boosters have access to my blue Essence and RP?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse15" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse16" onclick="statuschange(16);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img16" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can I watch the  games performed by booster?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse16" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse17" onclick="statuschange(17);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img17" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can I contact the booster through LeagueClient?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse17" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse18" onclick="statuschange(18);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img18" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Is it possible for me to play other modes than the ranked mode of my order on my account during the order?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse18" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse19" onclick="statuschange(19);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img19" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can I duo queue with my booster?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse19" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>

                                                               <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" data-target="#collapse20" onclick="statuschange(20);">
                                                                    <div class="panel-heading" style="border-bottom:4px solid #a67c33;">
                                                                        <p class="panel-title"><img src="{{asset('images/faq/plus.png')}}" id="img20" class="img-responsive" alt="" style="width:20px;height:20px;float:left;">
                                                                            <a  style="float:left;padding-left:20px;color:white">Can I pause my order?</a>
                                                                        </p>
                                                                    </div>
                                                                    <div id="collapse20" class="panel-collapse collapse in"  style="border:1px solid #636363;">
                                                                        <div class="panel-body" style="border-bottom:4px solid #636363;color:white;text-align:left">Please ask to your booster.</div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border-color:#a67c33;margin-right:12%;margin-left:12%">
@endsection



@section('footer')
        <!-- jQuery CDN -->
        <!-- <script src="{{asset('js/home/jquery.js')}}"></script> -->
        <script src="{{asset('js/eloboosting/jquery.bootstrap-responsive-tabs.min.js')}}"></script>

        <!-- =======================tab control========== -->
        <!-- <script>
            $('.responsive-tabs').responsiveTabs({
            accordionOn: ['xs', 'sm'] // xs, sm, md, lg 
            });
        </script> -->

        <!-- ======================FAQ list control========== -->
        <script>
           function statuschange(param)
           {
            var src = ($("#img"+param).attr('src') === "{{asset('images/faq/minus.png')}}")
                ? '{{asset('images/faq/plus.png')}}'
                : '{{asset('images/faq/minus.png')}}';
                $("#img"+param).attr('src', src);
           }
        </script>
@endsection
