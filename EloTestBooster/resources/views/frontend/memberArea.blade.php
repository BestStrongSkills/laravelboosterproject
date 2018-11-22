@extends('layouts.frontend')
@section('header')
        <link href="{{asset('css/frontend/member_area.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/frontend/bootstrap-responsive-tabs.css')}}" rel="stylesheet">
@endsection

@section('content')

                <div class="bg-round-main">
                    <div class="container">
                        <div class="logo-align-center">
                            <img src="{{asset('images/eloboosting/Logo.png')}}" width="120px" />
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="bg-boosting">
                            <h1 class="boosting-heded">MEMBER'S AREA</h1>
                        </div>
                    </div>

                	<div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="sold-left">
                                    <div class="panel panel-default" style="padding:0px;background-color:#636363;border-color:#636363">
                                        <div class="panel-body" style="padding:0px;background-color:#636363;border-color:#636363">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color:#acacac;border-bottom:2px solid #787272">
                                                <li class="nav-item">
                                                    <a class="nav-link active" style="padding: 7px 160px !important" id="SoloDivisionBoosting-tab" data-toggle="tab" href="#SoloDivisionBoosting" role="tab" aria-controls="SoloDivisionBoosting" aria-selected="true">
                                                        <h5 class="tabText">Log&nbspIn</h5>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" style="padding: 7px 153px !important" id="SoloNetWin-tab" data-toggle="tab" href="#SoloNetWin" role="tab" aria-controls="SoloNetWin" aria-selected="false">
                                                        <h5 class="tabText">Register</h5>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent" style="background-color:#636363;padding-bottom:50px">
                                               
                                           

                                            @if ($message = Session::get('error'))
                                            <div class="custom-alerts alert alert-danger fade in">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="padding-left:20px;font-size:20px!important"></button>
                                                {!! $message !!}
                                            </div>

                                            <?php Session::forget('error');?>
                                            @endif
                                                <!-- ====================firstTab=================== -->
                                                
                                                <div class="tab-pane fade show active"  id="SoloDivisionBoosting" role="tabpanel" aria-labelledby="SoloDivisionBoosting-tab">
                                                    <div class="row" style="padding-top:50px">

                                                        <div class="col-md-8 col-md-offset-2">
                                                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <label for="email" class="col-md-3 control-label"></label>
                                                                    <div class="col-md-7">
                                                                        <input  type="email" name="email" placeholder="EMail" style="color:black!important" required autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="password" class="col-md-3 control-label"></label>
                                                                    <div class="col-md-7">
                                                                        <input  type="password"  name="password" placeholder="Password" style="color:black!important" required autofocus>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <div class="col-md-6 col-md-offset-4">
                                                                        <div class="checkbox">
                                                                            <label style="color:white !important;padding-left:0px!important;">
                                                                                <input type="checkbox" name="remember" style="margin-top:0 !important;height:25px !important;border-radius:2px"> Remember Me</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-md-7 col-md-offset-3">
                                                                        <button type="submit" class="btn btn-primary" style="background-color:#a67c33 !important;border-color:#a67c33;border-radius:4px">Log in</button>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-md-7 col-md-offset-3">
                                                                    <a class="btn btn-link" href="" style="color:white">Forgot Your Password?</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ====================secondTab=================== -->
                                                <div class="tab-pane fade" id="SoloNetWin" role="tabpanel" aria-labelledby="SoloNetWin-tab">
                                                    <div class="row" style="padding-top:50px">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                                                {{ csrf_field() }}

                                                                <div class="form-group">
                                                                    <label for="username" class="col-md-3 control-label"></label>

                                                                    <div class="col-md-7">
                                                                        <input id="name" type="text"  name="name" placeholder="Username" style="border-radius:4px"  required autofocus>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="email" class="col-md-3 control-label"></label>

                                                                    <div class="col-md-7">
                                                                        <input id="email" type="email"  name="email" placeholder="Email Address" style="border-radius:4px" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="password" class="col-md-3 control-label"></label>

                                                                    <div class="col-md-7">
                                                                        <input id="password" type="password"  name="password" placeholder="Password"  style="border-radius:4px" required>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="password-confirm" class="col-md-3 control-label" ></label>

                                                                    <div class="col-md-7">
                                                                        <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Confirm Password" style="border-radius:4px" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-md-7 col-md-offset-3">
                                                                        <button type="submit" class="btn btn-primary" style="background-color:#a67c33 !important;border-color:#a67c33;border-radius:4px">
                                                                            Register
                                                                        </button>
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
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border-color:#a67c33;margin-right:12%;margin-left:12%">

@endsection

@section('footer')
<!-- jQuery CDN -->
<script src="{{asset('js/home/jquery.js')}}"></script>
<script src="{{asset('js/eloboosting/jquery.bootstrap-responsive-tabs.min.js')}}"></script>
@endsection
        
        
