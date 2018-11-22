<!DOCTYPE html>
<html>
<head>
    <title>Solo Page</title>
    
    <link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/backend/boosterpayment.css')}}" type="text/css">
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
                <h3 class="sub-title">Balance</h3>
            </div>
        </div> 

        <div class="row" style="margin-top:50px;">
            <div class="col-12">
                <div class="card-box">

                    <strong class="text-muted m-b-30 font-20" style="color:white!important">
                        UpdatePayPalEmail &nbsp;&nbsp;:&nbsp;&nbsp;antondmitrievich@mail.com
                    </strong>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-sm-5">
                            <input type="text" name="account" class="col-md-10 btn btn-primary" style="margin-top:10px;background-color:#b7b7b7">
                        </div>
                        <div class="col-sm-2" style="float:right">
                            <button type="submit" class="btn btn-primary" style="float:left;margin-top:10px;background-color:#7db6d8!important">Save</button>
                        </div>
                        <div class="col-sm-5">
                            
                        </div>
                    </div>
                    <div class="clearfix" style="margin-top:20px"></div>

                    <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                        
                        <table id="datatable" class="table table-bordered dataTable no-footer table match-history" role="grid" aria-describedby="datatable_info" style="background-color:#636363;border:0!important;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:10px;background-color: #555555;text-align:center;padding-top:10px;"><b>PAYMENT HISTORY</b>
                            </h4>
                            <thead>
                                <tr>
                                    <th class="boosterpayment" data-toggle="true" style="">Order Id</th>
                                    <th class="boosterpayment">Service</th>
                                    <th class="boosterpayment" data-hide="phone" >Time Stamp</th>
                                    <th class="boosterpayment">Amount</th>
                                    <th class="boosterpayment">Currency</th>
                                    <th class="boosterpayment" data-hide="phone, tablet" style="margin-left:10px">Status</th>
                                </tr>
                            </thead>
                            
                            <tbody style="background-color:#636363;">
                                <tr>
                                    <td style="border:0px !important">UR115</td>

                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger">DUODIVISION</span><span style="padding-left:10px">Gold I -PlatnumIV(10LP)</span>
                                    </td>

                                    <td style="border:0px !important">20/02/2018</td>
                                    <td style="border:0px !important">50</td>
                                    <td style="border:0px !important">EUR</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-success"  style="font-size:14px;margin-left:35px;">active</button></td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important"><span class="badge label-table badge-success">SOLODIVISION</span><span style="padding-left:10px">Gold I -PlatnumIV(10LP)</span>
                                    </td>
                                    <td style="border:0px !important">20/02/2018</td>
                                    <td style="border:0px !important">50</td>
                                    <td style="border:0px !important">EUR</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-success"  style="font-size:14px;margin-left:35px;">active</button></td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important"><span class="badge label-table badge-success">SOLODIVISION</span><span style="padding-left:10px">Gold I -PlatnumIV(10LP)</span>
                                    </td>
                                    <td style="border:0px !important">20/02/2018</td>
                                    <td style="border:0px !important">50</td>
                                    <td style="border:0px !important">EUR</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-success"  style="font-size:14px;margin-left:35px;">active</button></td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important"><span class="badge label-table badge-danger">DUODIVISION</span><span style="padding-left:10px">Gold I -PlatnumIV(10LP)</span>
                                    </td>
                                    <td style="border:0px !important">20/02/2018</td>
                                    <td style="border:0px !important">50</td>
                                    <td style="border:0px !important">EUR</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-success"  style="font-size:14px;margin-left:35px;">active</button></td>
                                </tr>
                                 <tr>
                                    <td style="border:0px !important">FV259</td>
                                    <td style="border:0px !important"><span class="badge label-table badge-danger">DUODIVISION</span><span style="padding-left:10px">Gold I -PlatnumIV(10LP)</span>
                                    </td>
                                    <td style="border:0px !important">20/02/2018</td>
                                    <td style="border:0px !important">50</td>
                                    <td style="border:0px !important">EUR</td>
                                    <td style="border:0px !important"><a href="#" class="btn btn-success"  style="font-size:14px;margin-left:35px;">active</button></td>
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
        </div>

        
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

    <script src="{{asset('js/backend/jquery.dataTables.min.js')}}"></script> 
    <script src="{{asset('js/backend/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/backend/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/backend/dataTables.buttons.min.js')}}"></script>
    <!--  <script src="js/backend/buttons.bootstrap4.min.js"></script> -->
    
    <!-- ====================side bar========== -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>

    <!-- =============datatable=============== -->
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

</body>
</html>