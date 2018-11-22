<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ELO BOOSTING</title>
        <link rel="stylesheet" href="{{asset('css/frontend/booster-application.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
        <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/frontend/style.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{asset('secondfonts/big-stylesheet.css')}}">
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

				<div class="container">
                	<div class="logo-align-center">
	                 	<img src="{{asset('images/eloboosting/Logo.png')}}" width="120px" />
                	</div>
                </div>
                
                <div class="container">
                	<div class="bg-boosting">
                        <h1 class="boosting-heded">BOOSTER APPLICATION</h1>
                        <h4 class="secondComment">WHAT YOU NEED TO KNOW</h4>
                	</div>
                </div>

                <div class="bg-round-main">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sold-left">
                                    <p class="applicationcontent" style="text-align:center;font-size:18px;color:white;padding:30px">
                                        We get numerous applications, so we're only capable of picking out the most determined and enthusiastic applicants. 
                                        When your application goes through, we may not contact you immediately however we keep your information and may contact you weeks later depending on how well grounded our current boosters are. 
                                        We ask for you to list the rate you will be happy to work for because keep in mind, there are people who are boosting in different countries and the living expenses there may be cheaper than where you currently live. 
                                        However listing a low rate will not guarantee that you will be hired and vice versa, writing down a high rate does not mean you won't be hired. 
                                        If you are currently ranked lower than Diamond 2 in solo queue, we advise you not to apply. 
                                        We are looking for someone who will show consistency when boosting. 
                                        The screenshots you are required to take are needed to prove that you are who you are. 
                                        There are platinum players who claim they are higher than diamond 2. 
                                        So we need confirmation that this is your rank by typing in ""Bean boozled"" and taking a screenshot 
                                        while clicking the tab button to show the score board which has all ten champions in the game visible. 
                                        Thus when you link the OP.GG link to your match, it will be very hard to fake all ten champions in a game.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-left:23px;margin-right:20px">
                            <div class="col-md-2 col-sm-2 col-xs-3"></div>
                                <form method="POST" action="{{route('boosterApplication')}}">
                                {{ csrf_field() }}
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="p-20">
                                                <div class="form-group">
                                                    <label class="applicationLavel">Name</label>
                                                    <input id="name" type="text" name="name" placeholder="Name"  class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="applicationLavel">Email</label>
                                                    <input type="text" id="email" name="email" placeholder="Email" class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="applicationLavel">Regions&nbspyou&nbspcan&nbspboost</label>
                                                    <input type="text" id="boosterAccess" name="boosterAccess" placeholder=""  class="form-control" required>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="p-20">
                                            <div class="form-group">
                                                <label class="applicationLavel">Summoner Name</label>
                                                <input type="text" id="summonername" name="summonername" placeholder=""  class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label class="applicationLavel">Skype/Discord</label>
                                                <input type="text" id="skype_discord" name="skype_discord" placeholder=""  class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label class="applicationLavel">Current&nbspsol&nbsprank</label>
                                                <input type="text" id="current_rank" name="current_rank" placeholder=""  class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="p-20">
                                            <div class="form-group">
                                                <label class="applicationLavel">Have you boosted before.</label>
                                                <input type="text" id="boosted_before" name="boosted_before" placeholder=""  class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="applicationLavel">Boosting hours your are willing to work per day.</label>
                                                <input type="text" id="willing" name="willing" placeholder=""  class="form-control" required>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="applicationLavel">Willing to boost via duo queue ?</label>
                                                <input type="text" id="queue" name="queue" placeholder=""  class="form-control" required>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="applicationLavel">Reasons as to why we should hire over the others . Be as honest as you would like.</label>
                                                <input type="text" id="otherHire" name="otherHire" placeholder="" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group m-b-0">
                                            <label class="applicationLavel">Attach&nbspthe&nbspscreenshot</label>
                                            <input type="file" id="file" name="file" placeholder=""  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-4"></div>

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group m-b-0">
                                            <label>&nbsp</label>
                                            <input type="submit" class="form-control" value="APPLY NOW" style="color:white;background-color:#a67c33;border-color:#a67c33">
                                        </div>
                                    </div>
                                </form>
                            <div class="col-md-3 col-sm-3 col-xs-3"></div>
                        </div>
                    </div>
                </div>

                <hr style="border-color:#a67c33;margin-right:12%;margin-left:12%">
                <footer  id="colophon" class="footer" style="border:2px;border-color:white;">
                    <div class="footer-bottom" style="background-color:#000a14;border:2px;border-color:white ! important;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                            <img alt="" src="{{asset('images/HomePage/logoo.png')}}" width="100px">
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
        
        <!-- <script type="text/javascript" src="{{asset('js/home/rangeslider.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/home/functions.js')}}"></script> -->


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


        <script type="text/javascript">
            var SITE_URL = "http://www.secondBoosterExpress.com/";
            </script>
        <script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

        <a class="scroll-to-top" style="bottom: -100px;"><i class="fa fa-chevron-up"></i></a>

        <style type="text/css">.border-top:before{ border-right-width: 674.5px; }</style>
        <style type="text/css">.border-top:after{ border-left-width: 674.5px; }</style>
        <loom-container id="lo-engage-ext-container">
        <loom-shadow data-reactroot="" class="resolved"></loom-shadow>
        </loom-container>
        <link rel="stylesheet" type="text/css" href="chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/css/content.css">
        <style type="text/css">.border-top:before{ border-right-width: 674.5px; }</style>
        <style type="text/css">.border-top:after{ border-left-width: 674.5px; }</style>
        
    </body>
</html>
