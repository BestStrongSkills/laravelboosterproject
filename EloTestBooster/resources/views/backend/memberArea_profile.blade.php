<!DOCTYPE html>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/backend/memberArea_profile.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
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
                <a class="nav-link white-menu" href="{{route('backend.memberArea_solo')}}" >MEMBER SOLO</a></li>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_duo')}}" >MEMBER DUO</a></li>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_profile')}}">MEMBER PROFILE</a>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_review')}}" >REVIEW BOOSTER</a>

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
                <h1 class="memberareaFont">Member's Area</h1>
                <h3 class="sub-title">Profile</h3>
            </div>

            <div class="col-sm-12" style="padding-top:60px">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-lg-3" style="padding-top:20px">
                        <div class="panel panel-default" style="background-color:#636363">
                            <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
                                <h5>PROFILE</h5>
                            </div>
                            <div class="panel-body">
                               
                                <img src="{{asset('images/champions/55.png')}}" class="rounded-circle champion center"  style="width:80px; height: 80px; border: 2px solid #88692c;margin-left:35%;margin-top:10px">

                                <h5 class="profileText">Celinos</h5>

                                <div class="form-group col-form-label text-md-center" style="padding-bottom:20px">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="background-color:#eb0912;color:white;">ChangePssword</button>
                                </div>
                            </div>

                                <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog" style="background-color:#636363;border-top:0px;">
                                    <div class="modal-content" style="background-color:#636363;border-top:0px;">

                                      <!-- Modal Header -->
                                        <div class="modal-header" style="background-color:#555555;border-bottom:0px;">
                                        <span style="margin-left:150px;"><h4 class="modal-title col-md-offset-3">My&nbspPassword</h4></span>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                          <!-- Modal body -->
                                            <div class="modal-body" style="background-color:#636363;border-top:0px;">
                                                <form class="form-horizontal" style="background-color:#636363;border-top:0px;border-color:#636363;">
                                                    <div class="form-group">
                                                        <label for="password" class="col-md-4 col-form-label text-md-left" style="color:white;border-color:#acacac">CurrentPassword</label>
                                                        <div class="col-md-6">
                                                            <input type="password" name="password" class="btn btn-primary" value="www123234"  placeholder="New Password" style="background-color:#acacac;color:white;border-color:#acacac;border:0!important" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-md-4 col-form-label text-md-left" style="color:white;border-color:#acacac">Password</label>
                                                        <div class="col-md-6">
                                                            <input type="password" name="password" class="btn btn-primary" value="" placeholder="New Password" style="background-color:#acacac;color:white;border-color:#acacac;border:0px!important"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer" style="background-color:#636363;border-top:0px;">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Submit</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="background-color:#636363;border-top:6px solid#a67c33!important">
                            <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px">
                                <h5>Active Order</h5>
                            </div>
                            <div class="input-group" style="padding:20px;padding-left: 15px !important;">
                               
                                <input class="form-control border-right-0" value="Search Booster"><!-- <i class="fa fa-search"></i> -->
                                <span class="input-group-addon bg-white border-left-0" style="background-color: #a59797!important"><img src="images/memberarea/search.png" class="img-responsive" alt="" style="width:30px;height:30px;float:left;right:10px;color:black"/></span>
                            </div>
                        </div>
                    </div>

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
                                        <th>ACTION&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                    </thead>
                                    <tbody style="border-top:2px solid #a67c33;">
                                        <tr>
                                            <td>1</td>
                                            <td style="font-size:13px">EUW</td>
                                            <td style="font-size:11px">Bronze III- Silver II(86LP)</td>
                                            <td>
                                                <span style="background-color:#f26522;font-size:10px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:5px;background-color:#ed1c24;font-size:10px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:13px">8 days ago</td>
                                            <td style="font-size:13px">105USD</td>
                                            <td style="font-size:13px">
                                                <a href="" class="btn btn-primary" style="background-color:#ed1c24;color:white;border:0px;border-color:#ed1c24">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td style="font-size:13px">CHINA</td>
                                            <td style="font-size:13px">Bronze IV- Silver I(86LP)</td>    
                                            <td>
                                                <span style="background-color:#f26522;font-size:10px">Solo&nbspDuo/Queue</span>
                                                <span style="margin-left:5px;background-color:#0076a3;font-size:10px">Duo&nbspDivision</span>
                                            </td>
                                            <td style="font-size:13px">7days ago</td>
                                            <td style="font-size:13px">98EUR</td>
                                            <td style="font-size:13px">
                                                <a href="" class="btn btn-primary" style="background-color:#ed1c24;color:white;border:0px;border-color:#ed1c24">Details</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="crad-box mt-5">
                            <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                                <table class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="background-color:#636363">
                                    <h5 class="sub-title panel-heading m-t-0 header-title" style="text-align:center;padding-top:20px">PUCHARGE HISTORY</h5>
                                        <thead>
                                            <th>ID</th>
                                            <th>SERVER</th>
                                            <th>DESCRIPTION</th>
                                            <th></th>
                                            <th>BOOSTER</th>
                                            <th>ORDER&nbspDURATION</th>
                                            
                                        </thead>
                                        <tbody style="border-top:2px solid #a67c33;">
                                            <tr>
                                                <td>1</td>
                                                <td style="font-size:14px;">EUW</td>
                                                <td style="font-size:14px;">Bronze IV- Silver I(86LP)</td>    
                                                <td>
                                                    <span style="background-color:#f26522;font-size:10px">Solo&nbspDuo/Queue</span>
                                                    <span style="margin-left:10px;background-color:#ed1c24;font-size:12px">Duo&nbspDivision</span>
                                                </td>
                                                <td style="font-size:14px;">MAXIX</td>
                                                <td style="font-size:14px;">8 days ago</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td style="font-size:14px;">CHINA</td>
                                                <td style="font-size:14px;">Bronze V- Silver III(86LP)</td>    
                                                <td>
                                                    <span style="background-color:#f26522;font-size:10px">Solo&nbspDuo/Queue</span>
                                                    <span style="margin-left:10px;background-color:#0076a3;font-size:12px">Duo&nbspDivision</span>
                                                </td>

                                                <td style="font-size:14px;">WILLIAM</td>
                                                <td style="font-size:14px;">7days ago</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
    <script src="{{asset('js/backend/dataTables.responsive.min.js')}}"></script>

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