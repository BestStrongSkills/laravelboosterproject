<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Boost Express</title>
    <!-- meta data tags & loading css files -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link type="{{asset('image/x-icon')}}" href="images/favicon.ico" rel="icon">
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/frontend/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/revolution/extralayers.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/revolution/settings.css')}}" rel="stylesheet" type="text/css"/>


</head>
<body class="home fixed-header">
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header header-v1">
			<!-- the menu -->
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<nav id="site-navigation" class="main-navigation">
                                <button class="menu-toggle">
                                    <i class="fa fa-bars" style="color:#a47c34;"></i><span style="color:#a47c34;font-weight:600;font-size:18px">Menu</span>
                                </button>
								<div class="menu-onepage-applanding-container">
									<ul id="menu-onepage-applanding" class="mega-menu" style="padding-top:120px">
										<li class="menu-item current-menu-parent menu-item-has-children page_item_has_children" >
											<a href="{{route('index')}}" style="font-size:14px !important">Home</a>
											<span aria-expanded="true" role="menubar" data-toggle="dropdown" class="dropdown-toggle caret"><i class="fa fa-chevron-down"></i></span>
										</li>
										<li class="menu-item current">
                                            <a href="{{route('frontend.elo_boosting')}}" style="font-size:14px">elgo boosting</a>
                                        </li>
										<li class="menu-item">
                                            <a href="{{route('frontend.coaching')}}" style="font-size:14px!important">coaching</a>
                                        </li>
										<li class="menu-item">
                                            <a href="{{route('frontend.demo')}}" style="font-size:14px!important">demo</a>
                                        </li>
										<li class="menu-item">
											<a href="{{route('frontend.booster_application')}}" style="font-size:14px!important">booster application</a>
                                        </li>
										<li class="menu-item">
											<a href="{{route('frontend.faq')}}" style="font-size:14px!important">faq</a>
										</li>
										<li class="menu-item">
                                            <a href="{{route('frontend.memberArea')}}" style="font-size:14px!important">member area</a>
                                        </li>
										<li class="menu-item">
                                            <a href="{{route('frontend.contact_us')}}" style="font-size:14px!important">contact us
                                            </a>
                                        </li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>    
			</div>
		</header >
        
        <div id="main" class="wrapper">
            <div id="primary" class="content-area">
                <div class="container">
                    <header>
                        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:#000a14 !important;padding-top:70px">
                            <!-- <a class="navbar-brand" href="#" style="margin-left:-110px;padding-top:3px">MENU</a> -->
                            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" 
                            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">MENU</span>
                            </button> -->
                            
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('index')}}" style="padding-left:65px;padding-right:30px">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('frontend.elo_boosting')}}" style="color:white;padding-left:20px;padding-right:20px">ELO&nbsp&nbspBOOSTING</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('frontend.coaching')}}" style="color:white;padding-left:20px;padding-right:20px">COACHING</a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link" href="#" style="padding-left:20px;padding-right:20px">DEMO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('frontend.booster_application')}}" style="color:white;padding-left:20px;padding-right:20px">BOOSTER&nbsp&nbspAPPLICATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('frontend.faq')}}" style="color:white;padding-left:20px;padding-right:20px">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('frontend.memberArea')}}" style="color:white;padding-left:20px;padding-right:20px">MEMBER&nbsp&nbspAREA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('frontend.contact_us')}}" style="color:white;padding-left:20px;padding-right:20px">CONTACT&nbsp&nbspUS</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>

                    <div class="logo">
                    
                    </div>
                    <div class="welcome">
                        <h2><a href="{{route('index')}}">WELCOME TO THE</a></h2>
                        <h1><a href="{{route('index')}}">BOOST EXPRESS</a></h1>
                    </div>
                    <div class="boot">
                        <div class="col-md-6 col-sm-12">
                            <div class="boott">
                                <h1><a href="{{route('frontend.elo_boosting')}}">BOOST</a></h1>
                                <h3><a  href="{{route('frontend.elo_boosting')}}">ME</a></h3>
                                <img src="images/homepage/Banner-right.png" class="img-responsive">
                            </div>
                    
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="boott">
                                <h1><a  href="{{route('frontend.coaching')}}">COACH</a></h1>
                                <h3><a href="{{route('frontend.coaching')}}">ME</a></h3>
                                <img src="{{asset('images/homepage/Banner-right.png')}}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                
                
                    <div class="Divisions">
                        <img src="{{asset('images/homepage/Divisions.png')}}" class="img-responsive">
                    </div>
                
                    <div class="enjoy">
                        <div class="col-md-3 col-sm-12">
                            <img src="{{asset('images/homepage/left.png')}}" class="img-responsive">
                    
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h1><a href="#">ENJOY CLIMBING</a></h1>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <img src="{{asset('images/homepage/right.png')}}" class="img-responsive">
                        </div>
                    </div>
                    <div class="text">
                        <p>
                        we would line to guide your journey to the elo you feel comfortable in. we
                        know that its's hard to improve when you are put into low mmr game and even harder
                        to climb out. game are not fun and competitive.with theboostexpress we will provide a
                        very comfortable learning environment with all the necessary tools required to improbe 
                        at your hand.starting from advice.tips and tricks that correspond with your role, champion
                        pool and personal playstyle to in-depth ayalysis of your own gameplay.remember that our cacches 
                        are just excellent players, they are excellent teachers, that why they
                        whant to coach you.oiur coaches want you to improve, so ayways feel free to tals to them as your mentor.
                        </p>
                    </div>
                </div>
            </div>	
            <div class="mainaa-abck">
                <div class="container">
                    <div class="BackgroundOriandKha">
                        <img src="{{asset('images/homepage/BackgroundOriandKha.jpg')}}" class="img-responsive">
                    </div>
                    <div class="BoostExpress">
                        <h1><a href="#">Boost Express Features</a></h1>
                    </div>
                    <div class="Bannerrrr">
                        <img src="{{asset('images/homepage/Banner-right.png')}}" class="img-responsive">
                    </div>
                    <div class="man-a">
                        <a href="#"><img src="{{asset('images/homepage/1.png')}}" class="img-responsive"></a>
                        <h1>VPN SERVICE</h1>
                        <p>its is mandatory for our boosters to use a virtual private
                        network (VPn) whilw working on your account this will minimise the risk of 
                        getting penalized by riot by adding a layes of protection for your account.</p>
                    </div>
                    <div class="three-img">
                        <div class="col-md-4 col-sm-6">
                            <div class="secondimg ">
                                <a href="#"><img src="{{asset('images/homepage/2.png')}}" class="img-responsive sbd-mh"></a>
                                    <h1><a href="#">EASY TO INTERACT</a></h1>
                                    <p><a href="#">its is mandatory for our boosters to use a virtual private
                                    network (VPn) whilw working on your account this will minimise the risk of 
                                    getting penalized by riot by adding a layes of protection for your account.</a>
                                    </p>
                                </div>
                            </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="button-mg">
                                <img src="images/homepage/button-img.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="thredimg secondimg">
                                <a href="#"><img src="{{asset('images/homepage/3.png')}}" class="img-responsive sbd-mh"></a>
                                <h1>AWESOME PLAYERS</h1>
                                <p>its is mandatory for our boosters to use a virtual private
                                network (VPn) whilw working on your account this will minimise the risk of 
                                getting penalized by riot by adding a layes of protection for your account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="finve">
                        <div class="col-md-6 col-sm-6">
                            <div class="thredimg secondimg">
                                <img src="{{asset('images/homepage/4.png')}}" class="img-responsive sbd-mhkk">
                                <h1><a href="#">CHOOSE YOUR CHAMPIONS AND ROLES</a></h1>
                                <p>its is mandatory for our boosters to use a virtual private
                                network (VPn) whilw working on your account this will minimise the risk of 
                                getting penalized by riot by adding a layes of protection for your account.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="thredimg secondimg">
                            <img src="{{asset('images/homepage/5.png')}}" class="img-responsive sbd-mhkk">
                            <h1><a href="#">HELPING YOUR EXPAND YOUR KNOWLEDGE OF THE GAME</a></h1>
                            <p>its is mandatory for our boosters to use a virtual private
                            network (VPn) whilw working on your account this will minimise the risk of 
                            getting penalized by </p>
                        </div>
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
	<!--- define script files -->
	<script type="text/javascript" src="{{asset('js/home/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/isotope.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/imagesloaded.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/custom-carousel.js')}}"></script>
    
	<script type="text/javascript" src="{{asset('js/home/revolution/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/jquery.themepunch.revolution.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.video.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
    
	<script type="text/javascript" src="{{asset('js/home/customs-slider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/jquery.fancybox.pack.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/cascade-slider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/jquery.scrollbar.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/scrollReveal.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/jquery.nav.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/rangeslider.js')}}"></script>
    

    <script type="text/javascript">
	   var SITE_URL = "http://www.BoosterExpress2.com/";
    </script>
    
	<script type="text/javascript" src="{{asset('js/home/functions.js')}}"></script>
	<a class="scroll-to-top" style="bottom: -100px;"><i class="fa fa-chevron-up"></i></a>
	<style type="text/css">.border-top:before{ border-right-width: 674.5px; }</style>
	<style type="text/css">.border-top:after{ border-left-width: 674.5px; }</style>
	<loom-container id="lo-engage-ext-container">
	   <loom-shadow data-reactroot="" class="resolved"></loom-shadow>
	</loom-container>
	<style type="text/css">.border-top:before{ border-right-width: 674.5px; }</style>
	<style type="text/css">.border-top:after{ border-left-width: 674.5px; }</style>
</body>
</html>

