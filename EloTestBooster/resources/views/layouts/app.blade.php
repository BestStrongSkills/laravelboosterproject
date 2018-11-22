<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('header')
</head>
<body>
<div id="app">
        <header>
            <div class="container">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<span style="font-size:18px;margin-left:10px;">CLOSE</span></a>
                    <a class="nav-link white-menu" href="{{route('backend.memberArea_solo')}}" >MEMBER SOLO</a></li>
                    <a class="nav-link white-menu" href="{{route('backend.memberArea_duo')}}" >MEMBER DUO</a></li>
                    <a class="nav-link white-menu" href="{{route('backend.memberArea_profile')}}">MEMBER PROFILE</a>
                    <a class="nav-link white-menu" href="{{route('backend.memberArea_review')}}" >REVIEW BOOSTER</a>

                    <a href="{{route('logout') }}" class="nav-link white-menu" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span> Log Out </span>
                    </a>
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
       
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/home/app.js') }}"></script>
    <script src="{{asset('js/backend/jquery-3.2.1.slim.min.js')}}"></script>
	<script src="{{asset('js/backend/jquery.popper.min.js')}}"></script>
    <script src="{{asset('js/eloboosting/bootstrap.min.js')}}"></script>
    @yield('footer')

</body>
</html>
