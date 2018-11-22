<!DOCTYPE html>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/backend/boosterarea.css')}}">
    <!-- <link rel="stylesheet" href="css/backend/datatables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/backend/table.responsive.bootstrap.4.min.css"> -->
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
                <h3 class="sub-title">Profile</h3>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-sm-12 mt-5" >
                        <div class="panel panel-default" style="background-color:#636363;line-height:130px;">
                            <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
                                <h1 class="text-center" style="padding-top:10px"> Profile</h1>
                            </div>

                            <div class="panel-body">
                                <div class="flex-container" style="display: flex;flex-direction:column;padding-top:20px;padding-bottom:20px"> 

                                    <div style=" text-align:left;line-height:20px;font-size: 16px;padding:10px">

                                        <img src="{{asset('images/champions/51.png')}}" class="rounded-circle champion center"  style="width:80px; height: 80px; border: 2px solid #88692c;margin-left:35%;margin-top:10px">
                                        <h5 class="profileText" style="text-align:center">Celinos</h5>

                                        <span class="col-md-3">Speed&nbsp&nbsp</span><span class="col-md-3 offset-4" style="text-align:left">45213</span><br>
                                        <span class="col-md-2">Communication</span><span class="col-md-2 offset-1" style="text-align:left">AL829</span><br>
                                        <span class="col-md-2">GamePlay</span><span class="col-md-2 offset-3" style="text-align:left">AL829</span>


                                        <div class="form-group col-form-label text-md-center" style="padding-bottom:20px;padding-top:20px;">
                                            <button type="button" class="btn btn-default col-md-11" data-toggle="modal" data-target="#myModal" style="background-color:#eb0912;color:white;text-align:center">ChangePassword</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                        <input type="password" name"password" class="btn btn-primary" value="www123234"  placeholder="current Password" style="background-color:#acacac;color:white;" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 col-form-label text-md-left" style="color:white;border-color:#acacac">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" name"password" class="btn btn-primary" value="" placeholder="New Password" style="background-color:#acacac;color:white;"/>
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
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12 mt-5" >
                        <div class="flex-container" style="display: flex;flex-direction:column;">

                            <div class="panel panel-default" style="background-color:#636363;line-height:30px">
                                <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
                                    <h1 class="text-center" style="padding-top:10px">REVIEWS</h1>
                                </div>

                                <div class="panel-body">
                                    <div class="current-order" style="background-color:#636363;">
                                        <div class="ranks row">
                                            <div class="col-lg-9 col-sm-12" style="padding-left:30px;padding-top:30px;">

                                                <div style="padding-left:10px;padding-bottom:20px">
                                                    <span style="padding:16px">Order</span><span style="margin-left:70px">HF&nbsp374</span>
                                                </div>
                                                <span style="padding-left:26px;padding-top:20px">Speed</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:80px">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">Communication</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:12px" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">GamePlay</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:55px" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">Message</span> :
                                                <span style="margin-left:55px">
                                                    We didn't talk  much but it was done in 24 hours.
                                                    <!-- <span style="margin-left:5px;font-size:15px">I like how he played,&nbsppaming in laughs get a 5/5 from me.</span> -->
                                                </span><br>
                                            </div>
                                            
                                            <div class="col-lg-3 col-sm-12" style="padding-top:20px">
                                               <span style="text-align:right;">2018-03-18 19:53:29</span>
                                            </div>
                                        </div><hr style="background-color:#a67c33;border:2px solid#a67c33">


                                        <div class="ranks row">
                                            <div class="col-lg-9 col-sm-12" style="padding-left:30px;padding-top:30px;">

                                                <div style="padding-left:10px;padding-bottom:20px">
                                                    <span style="padding:16px">Order</span><span style="margin-left:70px">HF&nbsp374</span>
                                                </div>
                                                <span style="padding-left:26px;padding-top:20px">Speed</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:80px">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">Communication</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:12px" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">GamePlay</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:55px" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">Message</span> :
                                                <span style="margin-left:55px">I got more wonderful time from him.</span><br>
                                            </div>
                                            
                                            <div class="col-lg-3 col-sm-12" style="padding-top:20px">
                                               <span style="text-align:right;">2018-03-18 19:53:29</span>
                                            </div>
                                        </div><hr style="background-color:#a67c33;border:2px solid#a67c33">

                                        <div class="ranks row">
                                            <div class="col-lg-9 col-sm-12" style="padding-left:30px;padding-top:30px;">

                                                <div style="padding-left:10px;padding-bottom:20px">
                                                    <span style="padding:16px">Order</span><span style="margin-left:70px">HF&nbsp374</span>
                                                </div>
                                                <span style="padding-left:26px;padding-top:20px">Speed</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:80px">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;" >
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">Communication</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:12px" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">GamePlay</span>
                                                <span>
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;margin-left:55px" >
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                    <img src="{{asset('images/coaching/star.png')}}" style="width:30px;height:30px;">
                                                </span><br>

                                                <span style="padding-left:26px;padding-top:20px">Message</span> :
                                                <span style="margin-left:55px">No message</span><br>
                                            </div>
                                            
                                            <div class="col-lg-3 col-sm-12" style="padding-top:20px">
                                               <span style="text-align:right;">2018-03-18 19:53:29</span>
                                            </div>
                                        </div><hr style="background-color:#a67c33;border:2px solid#a67c33">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>

        
        
        <div class="row">
            <div class="col-sm-12">
                <footer  id="colophon" class="footer" style="border:2px;border-color:white;padding-top:80px">
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