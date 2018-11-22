<!DOCTYPE html>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/backend/boosterarea.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('secondfonts/big-stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <script defer src="{{asset('js/backend/all.js')}}"></script>

</head>
<body>
    <header>
        <div class="container">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<span style="font-size:18px;margin-left:10px;">CLOSE</span></a>
                <a class="nav-link white-menu" href="{{route('booster.boosterdashboard')}}" >Dashboard</a></li>
                <a class="nav-link white-menu" href="{{route('booster.boosterorder')}}" >Order</a>
                <a class="nav-link white-menu" href="{{route('booster.boosterpayment')}}" >Payment</a>
                <a class="nav-link white-menu" href="{{route('booster.boosterprofile')}}">Profile</a>
                <a href="{{route('logout') }}" class="nav-link white-menu" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span> Log Out </span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <!-- <div class="nav-wrapper d-flex align-items-center"> -->
                    <span style="font-size:18px;cursor:pointer;color:#eeac39;" onclick="openNav()">&#9776; MENU</span>
                    <!-- </div> -->
                </div>
                <div class="col-sm-12 col-md-7 d-flex align-items-center">
                    <div class="balance-wrapper">
                        Balance: <strong>22 (56) USD/198 (120) EUR/0(0) GBP</strong>
                    </div>
                    <div class="notifications-wrapper mr-1 ml-1">
                        <span class="badge badge-light">
                            <i class="fa fa-bell"></i>
                            1
                        </span>
                        <span class="badge badge-danger">
                            <i class="fa fa-flag"></i>
                            2
                        </span>
                    </div>
                    <div class="profile-wrapper ml-md-3">
                        <img src="https://randomuser.me/api/portraits/men/70.jpg" class="rounded-circle"/>
                        <strong>Celinoes</strong>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container main-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="logo-container text-center">
                    <a href="#">
                        <img src="{{asset('images/eloboosting/Logo.png')}}" width="100" />
                    </a>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <h1 class="memberareaFont">Booster's Area</h1>
                <h3 class="sub-title">Dashboard</h3>
            </div>

            <div class="col-sm-12" style="padding-top:60px">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-lg-9" style="padding-top:20px">
                        <div class="card-box">
                            <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                                <table class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="background-color:#636363">
                                    <h5 class="sub-title panel-heading m-t-0 header-title" style="text-align:center;padding-top:20px">AVALIABLE ORDERS</h5>
                                    <thead>
                                        <th>ID</th>
                                        <th>SERVER</th>
                                        <th>DESCRIPTION</th>
                                        <th></th>
                                        <th>PUCHARGE&nbspDATE</th>
                                        <th>CASH&nbspOUT</th>
                                        <th style="width:50px">ACTION&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                    </thead>
                                    <tbody style="border-top:2px solid #a67c33;">

                                        <?php $no=1;?>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td >{{$order->id}}</td>
                                            <td id="{{$no.'userServer'}}" style="font-size:12px">{{$order->gameaccount->serverName}}</td>
                                            <td id="{{$no.'userDescription'}}" style="font-size:10px">{{$order->totalData}}</td>
                                            <input type="hidden" id="{{$no.'userchampion'}}" name="userchampion" value="{{$order->gameaccount->gameImage}}"/>
                                            <input type="hidden" id="{{$no.'userRole'}}" name="userRole" value="{{$order->gameaccount->gameRole}}"/>
                                            <input type="hidden" id="{{$no.'userNote'}}" name="userNote" value="{{$order->gameaccount->note}}"/>
                                            <td>
                                                <span style="background-color:#f26522;font-size:11px;border-radius:4px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:10px;background-color:#ed1c24;font-size:11px;border-radius:4px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:13px">{{$order->created_at}}</td>
                                            <td id="{{$no.'userAmount'}}" name="userAmount" style="font-size:13px">{{$order->amount}}$</td>
                                            <td style="font-size:13px">
                                               <a  onclick="ShowOrderData({{$no}})"  class="show-modal btn btn-primary" data-toggle="modal" data-target="#myModal" 
                                                   style="background-color:#ed1c24;">Apply</a>
                                            </td>
                                        </tr>
                                        <?php $no++;?>
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal" style="padding-top:50px;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="background-color:#636363;">

                                          <!-- Modal Header -->
                                          <div class="modal-header" style="background-color:#555555;border-bottom:0px;">
                                          <div class="sub-title panel-heading col-md-18 offset-4" style="text-align:center!important">APPLYING TO ORDER BNM2345</div>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <!-- Modal body -->
                                          <div class="modal-body" style="background-color:#636363;border-top:0px;">
                                            
                                                <div class="flex-container" style="margin:10px;text-align: center;font-size:16px;">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-3 col-xs-3 firstdiv" style="margin: 6px 5px 20px 10px;">
                                                            <span>Never use scripts or any 3rd party tools in a cuntomer account.Never share the account with anyone else, no matter the situation.</span>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 seconddiv" style="margin: 6px 5px 10px 20px;text-align: center;font-size:16px;">
                                                            <p>Do not attempt tp contact the customer and offer the client a lower price for a private job.We give customers who report boosters FREE BOOSTS.They will try and bait you.</p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 thirddiv" style="margin: 6px 5px 20px 10px;text-align: center;font-size:16px;">
                                                            <p>You need to play at least 3 games after  locking an order,and 10 mininum per day.OR WE WILL REMOVE CASHOUT FROM YOUR BALANCE.If you are NOT sure about it,DO NOT BID.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex-container" style="margin: 10px;text-align: center;font-size:16px;">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-3 col-xs-3 firstdiv" style="margin: 6px 5px 20px 10px;">
                                                            <p style="text-align:left">Description</p>
                                                            <p style="text-align:left">Starting&nbspCashout</p>
                                                            <p style="text-align:left">Minium&nbspBid</p>
                                                            <p style="text-align:left">Server</p>
                                                            <p style="text-align:left">CashOut</p>
                                                            <p style="text-align:left">Prefered&nbspRoles</p>
                                                            <p style="text-align:left">Prefered&nbspchampions</p>
                                                            <p style="text-align:left">Customer&nbspNote</p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 seconddiv" style="margin: 6px 5px 10px 20px;text-align: center;font-size:16px;">
                                                   
                                                            <p id="showDescripton" style="text-align:right">SilverIII->PlatinumI(60LP)</p>
                                                            <p style="text-align:right">22&nbspEUR</p>
                                                            <p style="text-align:right">15&nbspEUR</p>
                                                            <p id="showUserServer" style="text-align:right">ENW</p>
                                                            <p id="showUserAmount" style="text-align:right"></p>
                                                            <div id="showUserRole"></div>
                                                            
                                                            <div id="showUserChampion"></div>
                                                            
                                                            <p id="showUserNote" style="text-align:right">Hello? How are you?</p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 thirddiv" style="margin: 6px 5px 20px 10px;text-align: center;font-size:16px;">

                                                            <form>
                                                                <div class="rounded-circle champion center offeset-1" style="width:80px; height: 80px; border: 2px solid #88692c;margin-top:10px;margin-left:70px;">
                                                                    <p class="sub-title panel-heading" style="margin-top:20px">60</p>
                                                                </div>
                                                                <p style="margin-top:10px">Starting Bid</p>
                                                                <p class="sub-title panel-heading" style="margin-top:20px">22 EUR</p>

                                                                 <input type="text" class="btn btn-primary " id="priceBtn"  style="width:240px;background-color:#a67c33;margin-bottom:10px;display:none" /><br>
                                                                <buton type="submit" onclick="myBid();" class="btn btn-primary" style="width:100px;background-color:#a67c33">APPLY BID</buton>
                                                            </form>
                                                            <p>By applying you will start a bid, if you nobody else bids less than the starting Cashout within 1 minute, you will be assigned to it !.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                          </div>

                                          <!-- Modal footer -->
                                          <div class="modal-footer" style="background-color:#636363;border-top:0px;">
                                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-box mt-5">
                            <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                                <table class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="background-color:#636363">
                                    <h5 class="sub-title panel-heading m-t-0 header-title" style="text-align:center;padding-top:20px">YOUR ORDERS</h5>
                                    <thead>
                                        <th>ID</th>
                                        <th>SERVER</th>
                                        <th>DESCRIPTION</th>
                                        <th></th>
                                        <th>PUCHARGE&nbspDATE</th>
                                        <th>CASH&nbspOUT</th>
                                        <th style="width:50px">ACTION&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                    </thead>
                                    <tbody style="border-top:2px solid #a67c33;">
                                        <tr>
                                            <td>1</td>
                                            <td style="font-size:12px">EUW</td>
                                            <td style="font-size:10px">Bronze III- Silver II(86LP)</td>
                                            <td>
                                                <span style="background-color:#f26522;font-size:11px;border-radius:4px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:10px;background-color:#ed1c24;font-size:11px;border-radius:4px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:12px">8 days ago</td>
                                            <td style="font-size:12px">105USD</td>
                                            <td style="font-size:12px">
                                                <!-- <a href="" style="background-color:#ed1c24;height:40px;color:white">Details</a> -->
                                                <a href="{{route('booster.boosterorder')}}" class="btn btn-primary" style="background-color:#ed1c24;color:white;border-color:#ed1c24;">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td style="font-size:12px">CHINA</td>
                                            <td style="font-size:10px">Bronze IV- Silver I(86LP)</td>    
                                            <td>
                                                <span style="background-color:#f26522;font-size:11px;border-radius:4px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:10px;background-color:#0076a3;font-size:11px;border-radius:4px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:12px">7days ago</td>
                                            <td style="font-size:12px">98EUR</td>
                                            <td style="font-size:12px">
                                                <a href="{{route('booster.boosterorder')}}" class="btn btn-primary" style="background-color:#ed1c24;color:white;border-color:#ed1c24;">Details</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td style="font-size:12px">EUW</td>
                                            <td style="font-size:10px">Bronze III- Silver II(86LP)</td>
                                            <td>
                                                <span style="background-color:#f26522;font-size:11px;border-radius:4px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:10px;background-color:#ed1c24;font-size:11px;border-radius:4px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:12px">8 days ago</td>
                                            <td style="font-size:12px">105USD</td>
                                            <td style="font-size:12px">
                                                <a href="{{route('booster.boosterorder')}}" class="btn btn-primary" style="background-color:#ed1c24;color:white;border-color:#ed1c24;">Details</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td style="font-size:12px">EUW</td>
                                            <td style="font-size:10px">Bronze III- Silver II(86LP)</td>
                                            <td>
                                                <span style="background-color:#f26522;font-size:11px;border-radius:4px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:10px;background-color:#ed1c24;font-size:11px;border-radius:4px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:12px">8 days ago</td>
                                            <td style="font-size:12px">105USD</td>
                                            <td style="font-size:12px">
                                                <a href="{{route('booster.boosterorder')}}" class="btn btn-primary" style="background-color:#ed1c24;color:white;border-color:#ed1c24;">Details</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-3 col-lg-3" style="padding-top:20px;">
                        <div class="panel panel-default" style="background-color:#636363;height:430px">
                            <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
                                <h5 class="sub-title" style="padding-top:10px">NEWS</h5></div>
                            <div class="panel-body">
                               
                                <p style="font-size:18px;margin-left:20px;top:20px">GG Ap Beta Testing</p>
                                <p style="font-size:13px;margin-left:20px">Dear booster,All changes will be reverted.we will update you soon.</p>
                                <p style="font-size:13px;margin-left:20px">The first stage of testing was complete , to test our server handling over 200 connections,we will release a new app sooon to fix some of the isssues that were occuring  for new everything is done as before.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mt-5">
                <div class="card-box">
                    <div class="table-responsive">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;"><h5 class="sub-title" style="padding-top:10px">RULES</h5>
                            </div>
                            <div class="panel-body" style="background-color:#636363;padding-bottom:30px">
                                <p style="font-size:18px;margin-left:20px;top:20px">List of rules a nd penalties.</p>

                                <p style="font-size:14px;margin-left:20px">To report any booster for breaking any of the rules, add @Maria, provide proof and you will be rewarded.

                                <p style="font-size:14px;margin-left:20px">List of things that YOU CAN'T do as a booster for theboostexpresscom.</p>

                                <strong style="font-size:14px;margin-left:20px"> Offenses that result In Permanent Ban and 6 Month Chargeback (monetary penalty)</strong>

                                <p style="font-size:14px;margin-left:20px">1. YOU CANT attempt to ask the customer for a cheaper price or a privatejob. Customers that report boosters or private jobs receive a FREE BOOST. Customers will try and BAIT you.</p>
                                <p style="font-size:14px;margin-left:20px">2. YOU CANT use scripts or any third party program.</p>

                                <strong style="font-size:15px;margin-left:20px">Offenses that result In Permanent Ban.</strong>

                                <p style="font-size:14px;margin-left:20px">3. YOU CANT attempt to send customers to other boosting websites.</p>

                                <p style="font-size:14px;margin-left:20px">4. YOU CAN'T slander the name of theboostexpress and communicate false information about theboostexpres.</p>

                                <p style="font-size:14px;margin-left:20px">5. YOU CAN’T stream any games while playing on a customer account or while DUO queuing with a customer.</p>

                                <p style="font-size:14px;margin-left:20px">6. YOU CANT share customer account information with ANYONE.</p>

                                <p style="font-size:14px;margin-left:20px">7. YOU CAN'T share your personal information such as summoner name, email, social media, skype. discord etc with any customer.</p>

                                <p style="font-size:14px;margin-left:20px">8. YOU CAN’T flame, trash talk or have negative attitude, with a customer account or In a game where a custom r is present.</p>

                                <p style="font-size:14px;margin-left:20px">9. YOU CANT ﬂame or be rude to the customer.</p>

                                <strong style="font-size:14px;margin-left:20px">Offenses that result In Monetary Penalty.</strong>

                                <p style="font-size:14px;margin-left:20px">10. YOU CAN'T fail to use the proper VPN or fail to use a VPN that works. Penalty -20.</p>

                                <p style="font-size:14px;margin-left:20px">11. YOU CANT use customer BEIRP without customer permission. Penalty: -20.</p>

                                <p style="font-size:13px;margin-left:20px">12. YOU CANT dodge or abandon games, even if you were autoﬁlled, without customer permission. Penalty. -20.</p>

                                <p style="font-size:14px;margin-left:20px">13. YOU CAN'T add the customer to your League of Legends friend list in any situation. <br><span style="margin-left:20px">You MUST invite the cust er directly to your lobby ifyou are doing a DUO order.Penalty -40.</span></p>
                                <p style="font-size:14px;margin-left:20px">14. YOU CAN’T chat with ANY customer account friends, no exception. Penalty. -20.</p>

                                <p style="font-size:14px;margin-left:20px">15. YOU CANT ask the customer to start the order later or tomorrow. Penalty. -l 0</p>

                                <p style="font-size:14px;margin-left:20px">16. YOU CAN'T ask for payouts. It is automated in our system to pay you every 2 weeks.</p>

                                <p style="font-size:14px;margin-left:20px">1. YOU MUST talk to the customer right after you get the order, introduce yourself and try to answer as many c ncems the customer may have.</p>

                                <p style="font-size:14px;margin-left:20px">2. YOU MUST you must communicate very clearly to the customer if you are taking short or long break. becaus they will be waiting to spectate the games..</p>

                                <p style="font-size:14px;margin-left:20px">3. YOU MUST follow the customers prefered champions and roles..</p>

                                <p style="font-size:14px;margin-left:20px">4. YOU MUST follow the customers directions and notes. [eg. ﬂash on F).</p>

                                <p style="font-size:14px;margin-left:20px">5. YOU MUST state your time schedule CLEARLY (eg. time difference) for DUO queue.</p>

                                <p style="font-size:14px;margin-left:20px">6. YOU MUST be very friendly and professional with all of the customers, as we are a service provider..</p>

                                <p style="font-size:14px;margin-left:20px">7. YOU MUST constantly check the member's chat every 45 minutes or after every game..</p>

                                <p style="font-size:14px;margin-left:20px">8. YOU MUST contact the booster support Immediately, lfyou have any concerns about your order. (eg. custom .r's playing ranked, bugs and problems with website)
                                <p style="font-size:14px;margin-left:20px">9. YOU MUST stop the playing on the order if the customer hits the Pause button..</p>

                                <p style="font-size:14px;margin-left:20px">10. YOU MUST play in offline mode when the customer hits the oflline mode button. (https://ww.v.redditcomlr/l gueoﬂegends/comments/4fzr61lguide_ho~.v_to_appear_offline/).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        <div class="row" style="padding-top:100px">
            <div class="col-sm-12">
                <footer  id="colophon" class="footer" style="border:2px;border-color:white;">
                    <hr style="background-color:#a67c33;border-color:#a67c33 !important;">
                    <div class="footer-bottom" style="background-color:#000a14;border:2px;border-color:white ! important;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                            <img alt="" src="{{asset('images/homepage/logoo.png')}}" width="100px">
                                            <span class="text-bj">BOOST&nbspEXPRESS</span>  
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-center" style="top:20px">
                                                <a href="#"><img src="{{asset('images/memberarea/facebook.png')}}" style="width:30px;height:30px"></a>
                                                <a href="#"><img src="{{asset('images/memberarea/google.png')}}" style="width:30px;height:30px"></a>
                                                <a href="#"><img src="{{asset('images/memberarea/twitter.png')}}" style="width:30px;height:30px"></a>
                                                <a href="#"><img src="{{asset('images/memberarea/youtube.png')}}" style="width:30px;height:30px"></a>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="advertiseText" style="padding-top:20px">League of Legends is a registered trademark of Riot Games, Inc.</br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                    <div class="copyright">
                                        <address class="companytext">             
                                            &copy; 2018 @ the BOOSTEXPRESS, <a href="#" style="color:white;">BOOSTING</a> | <a href="#" style="color:white;">COACHING</a>  |  <a href="#" style="color:white;">CONTACT US</a>    
                                        </address>
                                    </div>   
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                    <h4 class="footerMenu1" style="text-align:left;margin-left:15%;">BOOST&nbspME</h4>
                                    
                                    <ul class="footerlist-unstyled">
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">ENJOY CLIMBING</a></li>
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">EXPRESS FEATURE</a></li>
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">BOOST EXPRESS</a></li>
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">SOLO NORMAL WINS</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                    <h4 class="footerMenu1" style="text-align:left;margin-left:15%;">PAGES</h4>
                                    <ul class="footerlist-unstyled">
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">VPN&nbsp&nbsp&nbspSERVICE</a></li>
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">EASY TO INTERACT</a></li>
                                        <li style="text-align:left;list-style: none;"><a href="#" style="color:white;">AWESOME PLAYERS</a></li>
                                    </ul>
                                </div>
                            </div>    
                        </div>    
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="{{asset('js/backend/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('js/backend/jquery.popper.min.js')}}"></script>
    <script src="{{asset('js/eloboosting/bootstrap.min.js')}}"></script>
    <!-- <script src="js/backend/dataTables.bootstrap4.min.js"></script>
    <script src="js/backend/jquery.dataTable.min.js"></script>--> 
    <!-- <script src="js/backend/dataTables.responsive.min.js"></script> -->

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>


    <script>
        function ShowOrderData(rowId)
        {
            $("#showDescripton").text($("#"+rowId+'userDescription').text());
            $("#showUserServer").text($("#"+rowId+'userServer').text());
            $("#showUserAmount").text($("#"+rowId+'userAmount').text());
                var str_champion = $("#"+rowId+'userchampion').val();
                var res_champion=[];
                var res_champion = str_champion.split(",");
                
                $("#showUserChampion").empty();
                for (var i=0;i<=res_champion.length-1;i++)
                {
                    $("#showUserChampion").append('<div style="display:inline-block;margin-right:5px;margin-top:5px;"><img src="images/champions/'+res_champion[i]+'.png" style="width:40px;height:40px;"/></div>');
                }
                
                var str_role = $("#"+rowId+'userRole').val();
                var res_role=[];
                var res_role = str_role.split(",");
                $("#showUserRole").empty();
                for (var j=0;j<=res_role.length-1;j++)
                {
                    $("#showUserRole").append('<div style="display:inline-block"><img src="images/roles/'+res_role[j]+'.png" style="width:40px;height:40px;"/>');
                }
            $("#showUserNote").text($("#"+rowId+'userNote').val());
        }
    </script>

    <script>
        function myBid()
        {
            $("#priceBtn").css("display", "block")
        }
    </script>

</body>
</html>