<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ELO BOOSTING</title>
        <link rel="stylesheet" href="{{asset('css/frontend/contact_us.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
        <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/frontend/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('secondfonts/big-stylesheet.css')}}" rel="stylesheet">
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('css/frontend/bootstrap-responsive-tabs.css')}}" rel="stylesheet">

    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <!-- <i class="fa fa-arrow-left" aria-hidden="true"></i> -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span aria-hidden="true" style="font-size:20px;color:#a3721d">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCLOSE</span>
                    </a>
                </div>

                <ul class="list-unstyled components">
                    <p></p>
                    <li class="active">
                        <li class="nav-item"><a class="nav-link white-menu" href="{{route('index')}}" >Home</a></li>
                    </li>
                    <li class="nav-item"><a class="nav-link white-menu" href="{{route('frontend.elo_boosting')}}" >ELO&nbsp&nbspBOOSTING</a></li>
                    
                    <li class="nav-item"><a class="nav-link white-menu" href="{{route('frontend.coaching')}}" >COACHING</a></li>

                    <li class="nav-item">
                        <a class="nav-link white-menu" href="#" >DEMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.booster_application')}}" >BOOSTER&nbsp&nbspAPPLICATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.faq')}}" >FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.memberArea')}}" >MEMBER&nbsp&nbspAREA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-menu" href="{{route('frontend.contact_us')}}" >CONTACT&nbsp&nbspUS</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <header>
             		<div class="navbar-header float-left">
                        <a id="sidebarCollapse" class="nav-btn"><i class="fa fa-bars" aria-hidden="true"></i> MENU</a>
                    </div>
                    <nav class="navbar navbar-expand-md navbar-dark blue-bg float-left">
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item" style="color:white !important;padding-left:80px;">
                                    <a class="nav-link white-menu" href="{{route('index')}}" style="color:white !important;padding-top: 40px;">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.elo_boosting')}}" style="color:white !important;padding-top: 40px;">ELO&nbsp&nbspBOOSTING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.coaching')}}" style="color:white !important;padding-top: 40px;">COACHING</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="#" style="color:white !important;padding-top: 40px;">DEMO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.booster_application')}}" style="color:white !important;padding-top: 40px;">BOOSTER&nbsp&nbspAPPLICATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.faq')}}" style="color:white !important;padding-top: 40px;" >FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.memberArea')}}" style="color:white !important;padding-top: 40px;">MEMBER&nbsp&nbspAREA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-menu" href="{{route('frontend.contact_us')}}" style="color:white !important;padding-top: 40px;">CONTACT&nbsp&nbspUS</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <div class="bg-round-main">
                    <div class="container">
                        <div class="logo-align-center">
                            <img src="{{asset('images/eloboosting/Logo.png')}}" width="120px" />
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="bg-boosting">
                            <h1 class="boosting-heded">Contact Us</h1>
                        </div>
                    </div>

                	<div class="container">
                        <div class="row"  style="padding-top:20px">
                            <div class="col-md-8 col-sm-8 col-xs-8"  style="top:30px">
                            <form method="POST" action="{{route('contact_with_admin')}}">
                                {{ csrf_field() }}
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="p-20">
                                            <div class="form-group">
                                                <label class="applicationLavel" style="padding-bottom:30px">Your Name</label>
                                                <input type="text" placeholder=""  class="form-control" name="name" style="width:40%;background-color:#acacac">
                                            </div>

                                            <div class="form-group" style="padding-top:30px">
                                                <label class="applicationLavel" style="padding-bottom:30px">Your Email</label>
                                                <input type="text" placeholder="" class="form-control" name="email" style="width:40%;background-color:#acacac">
                                            </div>

                                            <div class="form-group" style="padding-top:30px">
                                                <label class="applicationLavel" style="padding-bottom:30px">Subject</label>
                                                <input type="text" placeholder="" name="subject" class="form-control" style="width:40%;background-color:#acacac">
                                            </div>

                                            <div class="form-group" style="padding-top:30px">
                                                
                                                <label class="applicationLavel" style="padding-bottom:30px">Message</label>
                                                <textarea class="form-control" rows="5" name="message" style="background-color:#acacac"></textarea>
                                            </div>

                                            <div  class="form-group">
                                                <!-- <label>&nbsp</label> -->
                                                <button type="submit"  class="btn btn-danger" style="background-color:#a67c33 !important;border-color:#a67c33;">Submit</button>
                                            </div>

                                            <div class="form-group">
                                                
                                                <label style="font-size:18px;color:white">Information</label><br>
                                                <label>If you have any questions fell free to contact us. We will reply to your email  with in next in 12 hours.</label>
                                            </div>

                                            <div class="form-group">
                                                
                                                <label style="font-size:18px;color:white">Email Address</label><br>
                                                <label>Support@theboostexpress.com.</label>
                                            </div>

                                            <div class="form-group">
                                            <label style="font-size:18px;color:white">Find Us Everywhere</label><br>
                                            <img src="{{asset('images/contact/fb.png')}}" class="img-responsive" alt="" style="width:50px;height:50px" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4"></div>
                        </div>
                    </div>
                </div>

                <hr style="border-color:#a67c33;margin-right:12%;margin-left:12%">
                <footer  id="colophon" class="footer" style="border:2px;border-color:white;">
                    <div class="footer-bottom" style="background-color:#000a14;border:2px;border-color:white! important;">
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
        <script src="{{asset('js/home/jquery.js')}}"></script>
        <script src="{{asset('js/eloboosting/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('js/eloboosting/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/eloboosting/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('js/eloboosting/jquery.bootstrap-responsive-tabs.min.js')}}"></script>
        <!-- ====================================Menu Control =================-->
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
