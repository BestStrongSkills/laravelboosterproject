<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ELO BOOSTING</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
        @yield('header')
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/frontend/style.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{asset('secondfonts/big-stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <!-- <i class="fa fa-bars" aria-hidden="true"></i>  a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> -->
                    <a href="javascript:void(0)" class="closebtn"><span aria-hidden="true" style="font-size:20px;color:#a3721d">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCLOSE</span>
                    </a>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <li class="nav-item"><a class="nav-link white-menu" href="{{route('index')}}" >Home</a></li>
                    </li>
                    <li class="nav-item"><a class="nav-link white-menu" href="{{route('frontend.elo_boosting')}}" >ELO BOOSTING</a></li>
                    <li class="nav-item"><a class="nav-link white-menu" href="{{route('frontend.coaching')}}" >COACHING</a></li>

                    <li class="nav-item">
                        <a class="nav-link white-menu" href="#" >DEMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.booster_application')}}" >BOOSTER APPLICATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.faq')}}" >FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.memberArea')}}" >MEMBER AREA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.contact_us')}}" >CONTACT US</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                
                 <header>
             		<div class="navbar-header float-left">
                        <a id="sidebarCollapse" class="nav-btn"><i class="fa fa-bars" aria-hidden="true"></i> MENU
                           <!-- <img src="images/menu-text.png" width="120px" />-->
                        </a>
                    </div>

                    <nav class="navbar navbar-expand-md navbar-dark blue-bg float-left">
                        <div class="collapse navbar-collapse" id="navbarCollapse" style="padding-right:30px">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item" style="color:white !important">
                                    <a class="nav-link white-menu" href="{{route('index')}}" style="color:white !important;padding-top: 10px;padding-left:80px !important">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.elo_boosting')}}" style="color:white !important;padding-top: 10px;">ELO&nbsp&nbspBOOSTING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.coaching')}}" style="color:white !important;padding-top: 10px;">COACHING</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="#" style="color:white !important;padding-top:10px;">DEMO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.booster_application')}}" style="color:white !important;padding-top:10px;">BOOSTER&nbsp&nbspAPPLICATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.faq')}}" style="color:white !important;padding-top: 10px;" >FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.memberArea')}}" style="color:white !important;padding-top:10px;">MEMBER&nbsp&nbspAREA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.contact_us')}}" style="color:white !important;padding-top:10px;">CONTACT&nbsp&nbspUS</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                @yield('content')
                <footer  id="colophon" class="footer" style="border:2px;border-color:white;">
                <div class="footer-bottom" style="background-color:#000a14;border:2px;border-color:white ! important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                        <img alt="" src="{{asset('images/homepage/logoo.png')}}" width="100px">
                                        <span class="text-bj">BOOST EXPRESS</span>	
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                        <ul class="social-networks" style="padding-top: 15px;">
                                            <li class="social-fb first"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="social-gg"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <!-- <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                            <li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="advertiseText">League of Legends is a registered trademark of Riot Games, Inc.</br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <div class="copyright">
                                    <address class="companytext">             
                                        &copy; 2018 @ the boostexpress, <a href="#">boosting</a> | <a href="#">coaching</a>  | contact us <a href="#"></a>    
                                    </address>
                                </div>   
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                <h4 class="footerMenu1" style="text-align:left;">BOOSTME</h4>
                                
                                <ul class="footerlist-unstyled">
                                    <li style="text-align:left;"><a href="#">enjoy climbing</a></li>
                                    <li style="text-align:left;"><a href="#">express feature</a></li>
                                    <li style="text-align:left;"><a href="#">boost express</a></li>
                                    <li style="text-align:left;"><a href="#">Solo Normal Wins</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                <h4 class="footerMenu1" style="text-align:left;">Pages</h4>
                                <ul class="footerlist-unstyled">
                                    <li style="text-align:left;"><a href="#">VPN&nbsp&nbsp&nbspSERVICE</a></li>
                                    <li style="text-align:left;"><a href="#">EASY TO INTERACT</a></li>
                                    <li style="text-align:left;"><a href="#">AWESOME PLAYERS</a></li>
                                </ul>
                            </div>
                        </div>    
                    </div>    
                </div>
            </footer>
            </div>
        </div>

        <div class="overlay"></div>


        <!-- jQuery CDN -->
        <script src="{{asset('js/eloboosting/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('js/eloboosting/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/eloboosting/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        @yield('footer')

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
        
    </body>
</html>