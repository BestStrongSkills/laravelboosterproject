@extends('layouts.frontend')
@section('header')
 <link rel="stylesheet" href="{{asset('css/frontend/eloboosting.css')}}" type="text/css">
    
<link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

				<div class="container">
                	<div class="logo-align-center">
	                 	<img src="{{asset('images/eloboosting/Logo.png')}}" width="120px" />
                	</div>
                </div>
                
                <div class="container">
                	<div class="bg-boosting">
                        <h1 class="boosting-heded">ELO BOOSTING</h1>
                	</div>
                </div>

				
                <div class="bg-round-main">
                	<div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 left-space">
                                <div class="sold-left">
                                    <h1>SOLO <span><img src="{{asset('images/eloboosting/border-bottom.png')}}" /></span></h1>
                                    <h4>BOOSTING</h4>
                                    <p>With this option one of our boosters <br />will Log in and play on youraccount.</p>
                                    
                                </div>
                                
                                <div class="inner-lef-had">
                                    <img src="{{asset('images/eloboosting/UnrankedFrist.png')}}" width="140" />
                                    <div class="full-width"><a href="{{route('frontend.solo_boosting')}}"><h5>DIVISION BOOSTING</h5></a></div>
                                    <p>With this option one of our <br>
                                    boosters will Log in and play <br>
                                    on youraccount.</p>
                                </div>
                                
                                <div class="inner-lef-had">
                                    <img src="images/eloboosting/UnrankedBadge.png" width="140" />
                                    <div class="full-width"><a href="{{route('frontend.solo_boosting')}}"><h5>placement matches</h5></a></div>
                                    <p>With this option one of our <br>
                                    boosters will Log in and play <br>
                                    on youraccount.</p>
                                </div>
                                
                                    <div class="inner-lef-had">
                                    <img src="{{asset('images/eloboosting/Unrankedthree.png')}}" width="90" />
                                    <div class="full-width"><a href="{{route('frontend.solo_boosting')}}"><h5>NORMAL MATCHES</h5></a></div>
                                    <p>With this option one of our <br>
                                    boosters will Log in and play <br>
                                    on youraccount.</p>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6 right-space">
                                <div class="sold-right">
                                    <h1>DUO <span><img src="{{asset('images/eloboosting/left-border-bottom.png')}}" /></span></h1>
                                    <h4>BOOSTING</h4>
                                    <p>With this option one of our boosters <br />will Log in and play on youraccount.</p>
                                </div>
                                
                                <div class="inner-right-had">
                                    <img src="{{asset('images/eloboosting/UnrankedFrist.png')}}" width="140" />
                                    <div class="full-width"><a href="{{route('frontend.duo_boosting')}}"><h5>DIVISION BOOSTING</h5></a></div>
                                    <p>With this option one of our <br>
                                    boosters will Log in and play <br>
                                    on youraccount.</p>
                                </div>
                                
                                <div class="inner-right-had">
                                    <img src="{{asset('images/eloboosting/UnrankedBadge.png')}}" width="140" />
                                    <div class="full-width"><a href="{{route('frontend.duo_boosting')}}"><h5>placement matches</h5></a></div>
                                    <p>With this option one of our <br>
                                    boosters will Log in and play <br>
                                    on youraccount.</p>
                                </div>
                                
                                    <div class="inner-right-had">
                                    <img src="{{asset('images/eloboosting/Unrankedthree.png')}}" width="90" />
                                    <div class="full-width"><a href="{{route('frontend.duo_boosting')}}"><h5>NORMAL MATCHES</h5></a></div>
                                    <p>With this option one of our <br>
                                    boosters will Log in and play <br>
                                    on youraccount.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border-color:#a67c33;margin-right:12%;margin-left:12%">
@endsection
                
@section('footer')

@endsection
