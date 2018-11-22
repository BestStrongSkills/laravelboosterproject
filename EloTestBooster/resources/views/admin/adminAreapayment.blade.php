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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
                <h3 class="sub-title">Balance</h3>
            </div>
        </div>

        <div class="row" style="margin-top:50px;">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
                        <table class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="background-color:#636363;border:0!important;">
                            <h4 class=" panel-heading m-t-0 header-title" style="margin-bottom:10px;background-color: #555555;text-align:center;padding-top:10px;">
                            </h4>
                            <thead>
                                <tr>
                                    <th class="boosterpayment" data-toggle="true" style="">Booster</th>
                                    <th class="boosterpayment" data-toggle="true" style="">Confirmed&nbspBalance</th>
                                    <th class="boosterpayment">Action</th>
                                    <th class="boosterpayment">Amount</th>
                                    <th class="boosterpayment" data-hide="phone" >Select&nbspCurrency</th>
                                </tr>
                            </thead>
                            
                            <tbody style="background-color:#636363;">
                                <tr>
                                    <td style="border:0px !important">Plinmin</td>
                                    <td style="border:0px !important">25USD/55EUR</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important;padding-left:20px;padding-right:20px;">PAID</span><span class="badge label-table badge-danger"  style="margin-left:20px;background-color:#ed1c24 !important;">PENALTY</span>
                                    </td>
                                    <td style="border:0px !important">Type&nbspAmount</td>
                                    <td style="border:0px !important">Select&nbspCountry</td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">Plinmin</td>
                                    <td style="border:0px !important">25USD/55EUR</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important;padding-left:20px;padding-right:20px;">PAID</span><span class="badge label-table badge-danger"  style="margin-left:20px;background-color:#ed1c24 !important;">PENALTY</span>
                                    </td>
                                    <td style="border:0px !important">Type&nbspAmount</td>
                                    <td style="border:0px !important">Select&nbspCountry</td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">Plinmin</td>
                                    <td style="border:0px !important">25USD/55EUR</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important;padding-left:20px;padding-right:20px;">PAID</span><span class="badge label-table badge-danger"  style="margin-left:20px;background-color:#ed1c24 !important;">PENALTY</span>
                                    </td>
                                    <td style="border:0px !important">Type&nbspAmount</td>
                                    <td style="border:0px !important">Select&nbspCountry</td>
                                </tr>
                                <tr>
                                    <td style="border:0px !important">Plinmin</td>
                                    <td style="border:0px !important">25USD/55EUR</td>
                                    <td style="border:0px !important">
                                        <span class="badge label-table badge-danger" style="background-color:#f26522!important;padding-left:20px;padding-right:20px;">PAID</span><span class="badge label-table badge-danger"  style="margin-left:20px;background-color:#ed1c24 !important;">PENALTY</span>
                                    </td>
                                    <td style="border:0px !important">Type&nbspAmount</td>
                                    <td style="border:0px !important">Select&nbspCountry</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="card-box" style="padding-top:50px;">
                    <div class="row">
                        <div class="col-md-6">
                           
                            <div class="panel panel-default" style="background-color: #555555;border-top:6px solid #a67c33!important;color:white;border-color:#555555;!important">
                                <!-- <div class="panel-heading"></div> -->
                                <div class="panel-body" style="padding-bottom: 20px;">

                                    <form class="form-horizontal" method="POST" action="">
                                        <div class="form-group mt-5">
                                            <label for="accountname" class="col-md-4 offset-2"> AccountName</label>
                                            <div class="col-md-6 offset-2">
                                                <input id="accountname" class="btn btn-primary" type="text"  name="accountname" placeholder="AccountName" style="background-color:#b7b7b7"  required autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="currency" class="col-md-4 offset-2" >Currency</label>

                                            <div class="col-md-6 offset-2">
                                                <input id="currency" type="text" class="btn btn-primary" name="currency" placeholder="Currency" style="background-color:#b7b7b7" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="amount" class="col-md-4 offset-2">Amount</label>

                                            <div class="col-md-6 offset-2">
                                                <input id="amount" type="text" class="btn btn-primary"  name="amount" placeholder="Amount" style="background-color:#b7b7b7" required>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="button" class="col-md-4 offset-2"></label>
                                            <div class="col-md-6 offset-2">
                                                <input type="submit" class="btn btn-primary" value="Add Funds" style="background-color:#ed1c24 !important;border-color:#ed1c24;"/>
                                                
                                            </div>
                                        </div>
                                    </form>
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