<!DOCTYPE html>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/backend/memberArea_profile.css')}}">
    <link rel="stylesheet" href="{{asset('secondfonts/big-stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
    
    <script defer src="{{asset('js/backend/all.js')}}"></script>

</head>
<body>
    <header>
        <div class="container">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<span style="font-size:18px;margin-left:10px;">CLOSE</span></a>
                <a class="nav-link white-menu" href="{{route('admin.admindashboard')}}" >Dashboard</a></li>
                <a class="nav-link white-menu" href="{{route('admin.adminAreaorder')}}" >Order</a>
                <a class="nav-link white-menu" href="{{route('admin.adminAreapayment')}}" >Payment</a>
                
                <a href="{{route('logout') }}" class="nav-link white-menu" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span> Log Out </span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <!-- <a class="nav-link white-menu" href="" >LOG OUT</a> -->
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
                <h1 class="memberareaFont">Admin's Area</h1>
                <h3 class="sub-title">Dashboard</h3>
            </div>
        </div>

        <div class="row" style="margin-top:50px;">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                        <table class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="background-color:#636363;border:0!important;">
                            <h4 class=" panel-heading m-t-0 header-title" style="margin-bottom:10px;background-color: #555555;text-align:center;padding-top:10px;"><b>AVALIABLE ORDER</b></h4>
                            <thead>
                                <tr>
                                    <th class="boosterpayment" data-toggle="true" style="">ID</th>
                                    <th class="boosterpayment" data-toggle="true" style="">Server</th>
                                    <th class="boosterpayment">Description</th>
                                    <th class="boosterpayment"></th>
                                    <th class="boosterpayment" data-hide="phone" >Customer</th>
                                    <th class="boosterpayment">Pucharge&nbspDate</th>
                                    <th class="boosterpayment">Cash&nbspOut</th>
                                    <th class="boosterpayment" data-hide="phone, tablet" style="margin-left:10px">Status</th>
                                </tr>
                            </thead>
                            
                            <tbody style="background-color:#636363;">
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">50EUR</td>
                                    <td style="border:0px !important">6 days ago</td>
                                    <td style="border:0px !important">
                                    <a href="{{route('admin.adminAreaorder')}}" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#ed1c24;border-color:#ed1c24">Details</button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">UR115</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important">Bronze III- Silver II(86 LP)</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#ed1c24 !important;">Duo&nbspDivision</span>
                                    </td>

                                    <td style="border:0px !important">mkls</td>
                                    <td style="border:0px !important">50EUR</td>
                                    <td style="border:0px !important">5 days ago</td>
                                    <td style="border:0px !important">
                                    <a href="{{route('admin.adminAreaorder')}}" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#ed1c24">Details</button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">50EUR</td>
                                    <td style="border:0px !important">6 days ago</td>
                                    <td style="border:0px !important">
                                    <a href="{{route('admin.adminAreaorder')}}" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#ed1c24">Details</button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">50EUR</td>
                                    <td style="border:0px !important">6 days ago</td>
                                    <td style="border:0px !important">
                                        <a href="{{route('admin.adminAreaorder')}}" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#ed1c24">Details</button> -->
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                                <tr class="active" style="border:0 !important">
                                    <td colspan="6" style="border:0 !important">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0">
                                                
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot> -->
                        </table>


                        <!-- The Modal -->
                            <div class="modal fade" id="myModal" style="padding-top:50px;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="background-color:#636363;">

                                      <!-- Modal Header -->
                                      <div class="modal-header" style="background-color:#555555;border-bottom:0px;padding-left:30px;padding-right:30px;">
                                        <div class="sub-title panel-heading col-md-18 offset-4" style="text-align:center!important">APPLYING TO ORDER BNM2345</div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>

                                      <!-- Modal body -->
                                      <div class="modal-body" style="background-color:#636363;border-top:0px;">
                                        <div class="flex-container" style="margin: 10px;text-align: center;font-size:16px;">
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
                                                    <p style="text-align:left">Prefered&nbspRoles</p>
                                                    <p style="text-align:left">Prefered&nbspchampions</p>
                                                    <p style="text-align:left">Customer&nbspNote</p>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 seconddiv" style="margin: 6px 5px 10px 20px;text-align: center;font-size:16px;">
                                                    <p style="text-align:right">Platinium V-Diamond III(0LP)</p>
                                                    <p style="text-align:right">22&nbspEUR</p>
                                                    <p style="text-align:right">15&nbspEUR</p>
                                                    <p style="text-align:right">Server</p>
                                                    <p style="text-align:right">EUW</p>
                                                    <p style="text-align:right">
                                                        <img src="{{asset('images/roles/3.png')}}"  style="text-align:left;width:50px;height:50px">
                                                        <img src="{{asset('images/roles/4.png')}}" style="text-align:right;width:50px;height:50px;margin-left:10px" />
                                                        <img src="{{asset('images/roles/5.png')}}" style="text-align:right;width:50px;height:50px;margin-left:10px" />
                                                    </p>
                                                    
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 thirddiv" style="margin: 6px 5px 20px 10px;text-align: center;font-size:16px;">

                                                    <form>
                                                        <div class="rounded-circle champion center offeset-1" style="width:80px; height: 80px; border: 2px solid #88692c;margin-top:10px;margin-left:70px;">
                                                            <p class="sub-title panel-heading" style="margin-top:7px">60</p>
                                                        </div>
                                                        <p style="margin-top:10px">Starting Bid</p>
                                                        <p class="sub-title panel-heading" style="margin-top:20px">22 EUR</p>
                                                        <!-- <buton type="submit" class="btn btn-default" style="width:100px;background-color:#a67c33">APPLY BID</buton> -->
                                                        <a href="{{route('frontend.solo_boosting')}}" class="btn btn-default" style="width:100px;background-color:#a67c33;color:white">APPLY BID</a>
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
            </div>


            <div class="col-12">
                <div class="card-box" style="padding-top:30px;">
                    <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                        <table class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="background-color:#636363;border:0!important;">
                            <h4 class=" panel-heading m-t-0 header-title" style="margin-bottom:10px;background-color: #555555;text-align:center;padding-top:10px;"><b>PAUSED ORDER</b></h4>
                            <thead>
                                <tr>
                                    <th class="boosterpayment" data-toggle="true" style="">ID</th>
                                    <th class="boosterpayment" data-toggle="true" style="">Server</th>
                                    <th class="boosterpayment">Description</th>
                                    <th class="boosterpayment"></th>
                                    <th class="boosterpayment" data-hide="phone" >Customer</th>
                                    <th class="boosterpayment">Pucharge&nbspDate</th>
                                    <th class="boosterpayment">Cash&nbspOut</th>
                                    <th class="boosterpayment" data-hide="phone, tablet" style="margin-left:10px">Status</th>
                                </tr>
                            </thead>
                            
                            <tbody style="background-color:#636363;">
                                <tr>
                                    <td style="border:0px !important">UR115</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important">Bronze III- Silver II(86 LP)</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#ed1c24 !important;">Duo&nbspDivision</span>
                                    </td>

                                    <td style="border:0px !important">mkls</td>
                                    <td style="border:0px !important">150EUR</td>
                                    <td style="border:0px !important">7days ago</td>
                                    <td style="border:0px !important">
                                        <a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">US</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">250EUR</td>
                                    <td style="border:0px !important">8days ago</td>
                                    <td style="border:0px !important">
                                        <a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:0px !important">UR115</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important">Bronze III- Silver II(86 LP)</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#ed1c24 !important;">Duo&nbspDivision</span>
                                    </td>

                                    <td style="border:0px !important">mkls</td>
                                    <td style="border:0px !important">150EUR</td>
                                    <td style="border:0px !important">7days ago</td>
                                    <td style="border:0px !important">
                                        <a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">US</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">250EUR</td>
                                    <td style="border:0px !important">8days ago</td>
                                    <td style="border:0px !important">
                                        <a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card-box" style="padding-top:30px;">
                    <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                        <table id="datatable" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info" style="background-color:#636363;border:0!important;">
                            <h4 class=" panel-heading m-t-0 header-title" style="margin-bottom:10px;background-color: #555555;text-align:center;padding-top:10px;"><b>ACTIVE ORDER</b>
                            </h4>
                            <thead>
                                <tr>
                                    <th class="boosterpayment" data-toggle="true" style="">ID</th>
                                    <th class="boosterpayment" data-toggle="true" style="">Server</th>
                                    <th class="boosterpayment">Description</th>
                                    <th class="boosterpayment"></th>
                                    <th class="boosterpayment" data-hide="phone" >Customer</th>
                                    <th class="boosterpayment">Pucharge&nbspDate</th>
                                    <th class="boosterpayment">Cash&nbspOut</th>
                                    <th class="boosterpayment" data-hide="phone, tablet" style="margin-left:10px">Status</th>
                                </tr>
                            </thead>
                            
                            <tbody style="background-color:#636363;">
                                <tr>
                                    <td style="border:0px !important">UR115</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important">Bronze III- Silver II(86 LP)</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#ed1c24 !important;">Duo&nbspDivision</span>
                                    </td>

                                    <td style="border:0px !important">mkls</td>
                                    <td style="border:0px !important">150EUR</td>
                                    <td style="border:0px !important">7days ago</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a></td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">250EUR</td>
                                    <td style="border:0px !important">8days ago</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a></td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">UR115</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important">Bronze III- Silver II(86 LP)</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#ed1c24 !important;">Duo&nbspDivision</span>
                                    </td>

                                    <td style="border:0px !important">mkls</td>
                                    <td style="border:0px !important">150EUR</td>
                                    <td style="border:0px !important">7days ago</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a></td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important">EUW</td>
                                    <td style="border:0px !important;font-size:15px">Bronze IV- Silver I(86 LP)</td> 
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important">Solo&nbspDuo/Queue</span><span class="badge label-table badge-danger"  style="padding-left:20px;background-color:#0076a3 !important;">Solo&nbspDivision</span>
                                    </td>
                                    <td style="border:0px !important">ninja</td>
                                    <td style="border:0px !important">250EUR</td>
                                    <td style="border:0px !important">8days ago</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-primary"  style="font-size:14px;background-color:#ed1c24">Details</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="active" style="border:0 !important">
                                    <td colspan="6" style="border:0 !important">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0">
                                                
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="row" style="margin-top:60px">
                    <div class="col-sm-9" >
                        <div class="panel panel-default" style="background-color:#636363;padding-bottom:30px;">
                            <div class="panel-header" style="background-color:#555555">
                                <h4 class=" panel-heading m-t-0 header-title" style="border-top:6px solid #a67c33;margin-bottom:10px;background-color: #555555;text-align:center;">
                                    <b>RULES</b>
                                    <a href="">
                                        <img  src="{{asset('images/memberarea/pencil1.png')}}" style="width:20px;height:20px;float:right;margin-right:20px;"/>
                                    </a>
                                </h4>

                            </div>
                            <div class="panel-body" style="background-color:#636363">
                                <p style="padding-left:30px;padding-top:30px;font-weight:800">List of rules and penalties.</p>
                                <p style="padding-left:30px">To report any booster for breaking any of the nties, add @Marla, provide proof and you will be rewarded.</p>
                                <p style="padding-left:30px">List of things that YOU CAN'T do as a booster for theboostexpresscom.</p>
                                <strong style="padding-left:30px">Offenses that result in Permanent Ban and 6 Month Chargeback (monetary penalty).</strong>
                                <p style="padding-left:30px">1. YOU CAN’T attempt to ask the customer for a cheaper price or a privatejob. Customers that report boosters or privatejobs receive a  FREE BOOST. Customers will try and BAIT you.</p>

                                <p style="padding-left:30px">2. YOU CAN‘T use scripts or any third party program.</p>
                                <strong style="padding-left:30px">Offenses that result In Permanent Ban</strong>
                                <p style="padding-left:30px">3. YOU CANT attempt to send customers to other boosting websites</p>
                                <p style="padding-left:30px">4.YOU CAN‘T slander the name of theboostexpress and communicate false information about theboostexpres.</p>
                                <p style="padding-left:30px">5.YOU CAN’T stream any games while playing on a customer account or while DUO queuing with a customer.</p>
                                <p style="padding-left:30px">6. YOU CANT share customer account information with ANYONE.</p>
                                
                                <p style="padding-left:30px">7. YOU CAN‘T share your personal information such as surnmoner name, email. social media. skype. discord etc with any customer.</p>

                                <p style="padding-left:30px">8. YOU CAN’TfIame, trash talk or have negative attitude, with a customer account or In a game where a customer Is present.</p>


                                <p style="padding-left:30px">9. YOU CANT ﬂame or be rude to the customer.</p>

                                <strong style="padding-left:30px">Offenses that result In Monetary Penalty</strong>

                                <p style="padding-left:30px">10. YOU CAN‘T fail to use the proper VI’N or fail to use a VPN that works. Penalty ~20</p>

                                <p style="padding-left:30px">11. YOU CAN’T use customer BEIRP without customer permission. Penalty: -20</p>

                                <p style="padding-left:30px">12- YOU CANT dodge or abandon games, even if you were autoﬁlled, without customer permission. Penalty. -20</p>


                                <p style="padding-left:30px">13. YOU CAN‘T add the customer to your League of Legends friend list in any situation, you MUST invite the cost ner directly to your lobby if you are doing a DUO order. Penalty: 410</p>

                                <p style="padding-left:30px">14. YOU CANT chat with ANY customer account friends, no exception. Penalty. -20</p>

                                <p style="padding-left:30px">15. YOU CAN‘T ask the Customer to start the order later or tomorrow. Penalty. -10</p>


                                <p style="padding-left:30px">16. YOU CAN’T ask for payouts. It Is automated In our system to pay you every 2 weeks.</p>

                                <strong style="padding-left:30px">This will provide in the future</strong>

                                <p style="padding-left:30px">1. YOU MUST talk to the customer right after you get the order, introduce yourself and try to answer as many concerns the customer may have.</p>

                                <p style="padding-left:30px">2.  YOU MUST you must communicate very clearly to the customer if you are taking short or long brealc because they will be waiting to spectate the games.</p>
                                <p style="padding-left:30px">3. YOU MUST follow the customers prefered champions and roles.</p>
                                <p style="padding-left:30px">4. YOU MUST follow the customers directions and notes. {eg. ﬂash on F)</p>
                                <p style="padding-left:30px">5. YOU MUST state your time schedule CLEARLY (eg. time difference) for DUO queue.</p>
                                <p style="padding-left:30px">6. YOU MUST bevery friendly and professional with all of the customers, as we are a service provider.</p>
                                
                                <p style="padding-left:30px">7. YOU MUST constantly check the member’s chat every 45 minutes or after every game.</p>

                                <p style="padding-left:30px">8. YOU CAN’T flame, trash talk or have negative attitude, with a customer account or In a game where a customer is present.</p>

                                <p style="padding-left:30px">8. YOU MUST contact the booster support immediately, if you have any concerns about your order. (eg. customer's playing ranked, bugs and problems with website)</p>

                                <p style="padding-left:30px">9. YOU MUST stop the playing on the order if the customer hits the Pause button.</p>

                                <p style="padding-left:30px">10. YOU MUST play in ofﬂine mode when the customer hits the offline mode button.</p>
                                <p  class="test" style="">(https://ww.v.reddiLcom/r/l gueoliegends/comments/4fzr61lguIde_how_to_appear_of‘fiine/)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="panel panel-default" style="background-color:#636363;padding-bottom:30px;">
                            <div class="panel-header" style="background-color:#555555;">
                                <h4 class=" panel-heading m-t-0 header-title" style="border-top:6px solid #a67c33;margin-bottom:10px;background-color: #555555;text-align:center;">
                                    <b>NEWS</b>
                                    <a href="">
                                        <img href="" src="{{asset('images/memberarea/pencil1.png')}}" style="width:20px;height:20px;float:right;margin-right:20px;"/>
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body" style="background-color:#636363;margin-bottom:20px">
                                <p style="padding-left:30px;padding-top:30px;font-weight:800;top:30px;">GG Ap Beta Testing.</p>
                                <p style="padding-left:30px">Dear booster.</p>

                                <p style="padding-left:30px">All changes will be reverted.</p>
                                <p style="padding-left:30px">we will update you soon.</p>
                                <p style="padding-left:30px">The ﬁrst stage of testing was complete, to test our
                                    server handling over 200 connections, we will release a new app soon to fix some of the Issues that were occuring. for now everything is done as before.
                                </p>

                                <p style="padding-left:30px">Best regards,</p>
                                <p style="padding-left:30px">Zentus</p>
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


    <script src="{{asset('js/backend/jquery.dataTables.min.js')}}"></script> 
    <script src="{{asset('js/backend/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/backend/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/backend/dataTables.buttons.min.js')}}"></script>

   <!--  ======================data table================= -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
    <!-- ======================side bar================= -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>
</body>
</html>