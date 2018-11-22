<!DOCTYPE html>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/backend/memberArea_solo.css')}}">
    <link rel="stylesheet" href="{{asset('secondfonts/big-stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <script defer src="{{asset('js/backend/all.js')}}"></script>

</head>
<body>
    <header>
        <div class="container">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<span style="font-size:18px;margin-left:10px;">CLOSE</span></a>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_solo')}}">MEMBER SOLO</a></li>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_duo')}}" >MEMBER DUO</a></li>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_profile')}}">MEMBER PROFILE</a>
                <a class="nav-link white-menu" href="{{route('backend.memberArea_review')}}" >REVIEW BOOSTER</a>

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
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle"/>
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
                <h3 class="sub-title">Review Booster</h3>
            </div>

            <div class="col-sm-4" >
                <form>
                    <div class="form-group" style="line-height:150px;">
                        <label for="name" class="col-md-12 col-sm-12 col-md-xs control-label">Rate&nbspBooster</label>

                        <div class="col-md-12 col-sm-12 col-md-xs col-form-label text-md-left">
                            <span class="col-md-12 col-form-label text-md-right" style="padding-left:20px;padding-right:81px;;text-align:right!important">Speed</span>
                            <img src="{{asset('images/coaching/star.png')}}" class="col-md-offset-6" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/whitestar.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/whitestar.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                        </div>

                        <div class="col-md-12 col-sm-12 col-md-xs col-form-label text-md-left">
                            <span class="col-md-10 col-form-label text-md-right" style="padding-left:20px">Communication</span>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25x;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                        </div>

                        <div class="col-md-12 col-sm-12 col-md-xs col-form-label text-md-left">
                            <span class="col-form-label text-md-right" style="padding-left:20px;padding-right:53px;">Game&nbspPlay</span>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive  text-md-right" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/star.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                            <img src="{{asset('images/coaching/whitestar.png')}}" class="img-responsive" alt="" style="width:25px;height:25px;"/>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-8" style="line-height:142px;">
                <form>
                    <div class="form-group">
                        <label for="notes">Notes to booster</label>
                        <textarea class="btn btn-primary col-md-12" rows="4" cols="50" id="notes" name="notes" style="background-color:#b7b7b7"></textarea>

                    </div>
                   
                     <div class="form-group">
                        <div class="text-md-right">
                            <button type="submit" class="btn btn-primary" style="width:200px;border-color:#a67c33;background-color:#a67c33;text-align:center;">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>

           
            <div class="col-sm-12 mt-5">
                <div class="row pt-5 pb-5">
                </div>
            </div>

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