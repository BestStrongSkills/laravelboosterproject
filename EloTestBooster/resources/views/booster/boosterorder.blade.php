<!DOCTYPE html>
<html>
<head>
	<title>Solo Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend/boosterarea.css')}}">
	<link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
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
				<h3 class="sub-title">Order</h3>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-sm-12 mt-5" >
						<div class="panel panel-default" style="background-color:#636363;line-height: 130px;">
		                    <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
		                        <h1 class="text-center" style="padding-top:10px"> Order Information</h1></div>
		                    <div class="panel-body">
		                    	
			                    <div class="flex-container" style="display: flex;flex-direction: column;padding-top:20px;padding-bottom:20px"> 
		                    		<div style=" text-align:left;line-height:20px;font-size: 16px;padding:10px">
		                    			<span style="text-align:left">Order ID</span>
										<span style="text-align:right;margin-left:20px">{{ $order_id->id }}</span>
		                    		</div>

		                    		<div style=" text-align:left;line-height:20px;font-size:16px;padding:10px">
		                    			<span>Server</span>
										<span style="text-align:right;margin-left:37px">
											@if(!empty($servers))
												<strong>{{  $servers->serverName }}</strong>
											@else
												<strong>None</strong>
											@endif
										</span>
		                    		</div>

		                    		<div style="text-align:left;line-height:20px;font-size: 16px;padding:10px;">
			                    		<span>Task</span><span style="text-align:right;margin-left:20px">
											<span style="text-align:right;margin-left:32px;background-color:#0076a3;font-size:13px;">SOLO DIVISION</span>
											<span style="margin-left:10px;font-size:14px;">{{$description->totalData}}</span>
		                    		</div>

		                    		<div style=" text-align:left;line-height:20px;font-size:16px;padding:10px;">
		                    			<span>Cash&nbspOut</span>
										<span style="text-align:right;margin-left:15px;margin-right:15px">{{$cashout->amount}}$</span>
		                    		</div>
			                    </div>
			                   
		                    </div>
		                </div>
		            </div>

		            <div class="col-sm-12 mt-4" >
						<div class="flex-container" style="display: flex;flex-direction: column;">
							<div class="panel panel-default" style="background-color:#636363;line-height: 130px;">
			                    <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
			                        <h1 class="text-center" style="padding-top:10px"> ACCOUNT Information</h1></div>
			                    <div class="panel-body">
			                    	<div class="flex-container" style="display: flex;flex-direction: column;padding-top:20px;padding-bottom:20px"> 
			                    		@foreach($gameAccounts as $gameAccount)
										<div style=" text-align:left;line-height:20px;font-size: 16px;padding:10px">
			                    			<span style="text-align:left">Account name</span>
											<span style="text-align:right;margin-left:35px">{{$gameAccount->accountName}}</span>
			                    		</div>

			                    		<div style=" text-align:left;line-height:20px;font-size:16px;padding:10px">
			                    			<span>Password</span><span style="text-align:right;margin-left:75px;">{{$gameAccount->password}}</span>
			                    		</div>

			                    		<div style="text-align:left;line-height:20px;font-size: 16px;padding:10px;">
				                    		<span>Summoner name</span><span style="text-align:right;margin-left:20px">{{$gameAccount->summonerName}}</span>
			                    		</div>

			                    		<div style=" text-align:left;line-height:20px;font-size:16px;padding:10px;">
			                    			<span>Summoner ID</span><span style="text-align:right;margin-left:45px;margin-right:15px">23435345</span>
			                    		</div>
									    @endforeach
				                    </div>
			                    </div>
			                </div>
			            </div>
		            </div>


		            <div class="col-sm-12 mt-4" >
						<div class="flex-container" style="display: flex;flex-direction: column;">
							<div class="panel panel-default" style="background-color:#636363;line-height: 130px;">
			                    <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
			                        <h1 class="text-center" style="padding-top:10px"> USABLE ROLES</h1></div>
			                    <div class="panel-body">
			                    	<div class="flex-container" style="display: flex;flex-direction: column;"> 
			                    		
			                    		<div style=" text-align:left;line-height:20px;font-size: 16px;padding:10px">
											@foreach($gameRoles as $gameRole)
											<img src="{{ url('/').'/images/roles/'.$gameRole}}.png" style="text-align:left;width:100px;height:100px"/>
											@endforeach
			                    			
			                    		</div>

			                    		<div style=" text-align:left;line-height: 30px;font-size:16px;padding:10px">
			                    			<!-- <span style="text-align:right;margin-left:40px;">Top</span>
			                    			<span style="text-align:right;margin-left:70px;">Jungle</span>
			                    			<span style="text-align:right;margin-left:55px;">Support</span> -->
			                    		</div>
				                    </div>
			                    </div>
			                </div>
			            </div>
		            </div>


		            <div class="col-sm-12 mt-4" >
						<div class="flex-container" style="display: flex;flex-direction: column;">
							<div class="panel panel-default" style="background-color:#636363;line-height: 150px;">
			                    <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
			                        <h1 class="text-center" style="padding-top:10px"> USABLE CHAMPIONS</h1></div>
			                    <div class="panel-body">
			                    	<div class="flex-container" style="display: flex;flex-direction: column;"> 
			                    		<div style=" text-align:left;line-height:30px;font-size: 16px;padding:10px;height:140px">
											@foreach($gameImages as $gameImage)
											<img src="{{ url('/').'/images/champions/'.$gameImage}}.png" style="text-align:left;width:50px;height:50px;margin-bottom:10px;margin-left:10px;">
											@endforeach
			                    		</div>
				                    </div>
			                    </div>
			                </div>
			            </div>
		            </div>


		            <div class="col-sm-12 mt-4" >
						<div class="flex-container" style="display: flex;flex-direction: column;">
							<div class="panel panel-default" style="background-color:#636363;line-height: 150px;">
			                    <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
			                        <h1 class="text-center" style="padding-top:10px"> CUSTOMER NOTES</h1></div>
			                    <div class="panel-body">
			                    	<div class="flex-container" style="display: flex;flex-direction: column;"> 
			                    		<div style=" text-align: center;line-height:35px;font-size: 20px;height:120px">
			                    			<p style="padding:10px;font-size:16px;">{{$note->note}}</p>
			                    		</div>
				                    </div>
			                    </div>
			                </div>
			            </div>
		            </div>
				</div>
				
			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-12 mt-5" >
						<div class="flex-container" style="display: flex;flex-direction:column;">
							<div class="panel panel-default" style="background-color:#636363;">
			                    <div class="panel-heading" style="background-color:#555555;text-align:center;height:60px;border-top: 6px solid#a67c33!important;">
			                        <h1 class="text-center" style="padding-top:10px">Current Order</h1></div>
			                    <div class="panel-body">
									<div class="current-order" style="background-color:#636363;">
										<div class="ranks row">
											<div class="starting-rank col-lg-3 col-sm-4 col-xs-4">
												@if(!empty($startingRanks))
													<img  src="{{ url('/').'/images/divisions/'.$startingRanks->starting_image_save }}.png" />
													<p class="text-center">
														<h5 style="padding-left:30px">Starting Rank</h5>
														<em style="padding-left:30px;text-align:center !important">{{ $startingRanks->member_starting_rank }}</em>
														<p style="padding-left:70px;font-size:15px">97 LP</p>
													</p>
												@else
													<img src="{{asset('images/divisions/4_3.png')}}"/>
													<p class="text-center">
														<h5 style="padding-left:37px">Starting&nbspRank</h5>
														<em style="padding-left:38px;text-align:center !important">Bronze II</em>
														<p style="padding-left:70px;font-size:15px">97 LP</p>
													</p>
												@endif
											</div>

											<div class="current-rank col-lg-3 col-sm-4 offset-lg-1" >
												<img  src="{{ url('/').'/images/divisions/'.$startingRanks->starting_image_save }}.png" />
												<p class="text-center">
													<h5 style="padding-left:30px">Current&nbspRank</h5>
													<em style="padding-left:42px">{{ $startingRanks->member_starting_rank }}</em>
													<p style="padding-left:70px;font-size:15px">14 LP</p>
												</p>
											</div>

											<div class="desired-rank col-lg-3 col-sm-4 offset-lg-1">
												@if(!empty($desiredRanks))
													<img  src="{{ url('/').'/images/divisions/'.$desiredRanks->desired_image_save }}.png" />
													<p class="text-center">
														<h5 style="padding-left:40px">Desired Rank</h5>
														<em style="padding-left:40px">{{ $desiredRanks->member_desired_rank }}</em>
														<p style="padding-left:70px;font-size:15px">0 LP</p>
													</p>
												@else
												<img src="{{asset('images/divisions/3_1.png')}}"/>
												<p class="text-center">
													<h5 style="padding-left:20px">Desired Rank</h5>
													<em style="padding-left:60px"> Gold I</em>
													<p style="padding-left:70px;font-size:15px">0 LP</p>
												</p>
												@endif
											</div>
										</div>

										<div class="col-sm-12 d-flex justify-content-center" style="background-color:#636363;padding-bottom:80px;">
											<div class="col-sm-4 d-flex justify-content-center">
												<ul class="current-order-helper">
												<?php
													for ($i=1;$i<=5;$i++)
													{
														if($i<=$small_starting_division)
														{?>
															<li><img src="{{ url('/').'/images/divisions/'.$small_starting_image.'_'.$i}}.png">
																<span>{{$startingRank_imageName.$i}}</span>
															</li>
														<?php } 
														
														elseif( $i>$small_starting_division)
														{?>
															<li class="disactive">
																<img src="{{ url('/').'/images/divisions/'.$small_starting_image.'_'.$i}}.png">
																<span>{{$startingRank_imageName.$i}}</span>
															</li>
														<?php
														} 
														else
														{
															break;
														}
														?>
													<?php } ?>
												</ul>
											</div>
											<div class="col-sm-4 d-flex justify-content-center">
												<ul class="current-order-helper">
												<?php
													for ($i=1;$i<=5;$i++)
													{
														if($i<=$small_starting_division)
														{?>
															<li><img src="{{ url('/').'/images/divisions/'.$small_starting_image.'_'.$i}}.png">
																<span>{{$startingRank_imageName.$i}}</span>
															</li>
														<?php } 
														
														elseif( $i>$small_starting_division)
														{?>
															<li class="disactive">
																<img src="{{ url('/').'/images/divisions/'.$small_starting_image.'_'.$i}}.png">
																<span>{{$startingRank_imageName.$i}}</span>
															</li>
														<?php
														} 
														else
														{
															break;
														}
														?>
													<?php } ?>
												</ul>
											</div>

											<div class="col-sm-4 d-flex justify-content-center">
												<ul class="current-order-helper">
												<?php
													for ($i=1;$i<=5;$i++)
													{?>
														<li class="disactive"><img src="{{ url('/').'/images/divisions/'.$small_desired_image.'_'.$i}}.png">
														<span>{{$smalldesiredImageName.$i}}</span>
														</li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 mt-5">
						<div class="flex-container" style="display: flex;flex-direction: column;">
							<div class="row pt-2 pb-3">
								<div class="chatbox col-sm-12 col-md-12">
									<div class="chatbox-container d-block">
										<div class="chatbox-inner" style="max-height: 625px;">
											<div class="panel-header" style="color:black">Chats</div><hr>
											<div class="chats">

												<chat-messages :messages="messages"></chat-messages>
												<!-- <div class="chat_from d-flex flex-column">
													<div class="chat-info">
														<strong>Booster</strong>
														<me>10 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor 
													</div>
												</div>
												<div class="chat_me d-flex flex-column justify-content-end">
													<div class="chat-info d-flex justify-content-end">
														<strong>Me</strong>
														<me>3 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex justify-content-end">
														Lorem ipsum dolor sit amet
													</div>
												</div>
												<div class="chat_from d-flex flex-column">
													<div class="chat-info">
														<strong>Booster</strong>
														<me>10 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor 
													</div>
												</div>
												<div class="chat_me d-flex flex-column justify-content-end">
													<div class="chat-info d-flex justify-content-end">
														<strong>Me</strong>
														<me>3 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex justify-content-end">
														Lorem ipsum dolor sit amet
													</div>
												</div>
												<div class="chat_from d-flex flex-column">
													<div class="chat-info">
														<strong>Booster</strong>
														<me>10 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor 
													</div>
												</div>
												<div class="chat_me d-flex flex-column justify-content-end">
													<div class="chat-info d-flex justify-content-end">
														<strong>Me</strong>
														<me>3 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex justify-content-end">
														Lorem ipsum dolor sit amet
													</div>
												</div>
												<div class="chat_from d-flex flex-column">
													<div class="chat-info">
														<strong>Booster</strong>
														<me>10 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor 
													</div>
												</div>
												<div class="chat_me d-flex flex-column justify-content-end">
													<div class="chat-info d-flex justify-content-end">
														<strong>Me</strong>
														<me>3 seconds ago</me>
													</div>
													<div class="chat_wrapper d-flex justify-content-end">
														Lorem ipsum dolor sit amet
													</div>
												</div> -->
											</div>
										</div>
										<div class="chatbox-footer">
											<chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
											<!-- <div class="chatbox-input">
												<input type="text" name="msg" placeholder="Type and hit enter"/>
												<button>
													<i class="fa fa-comment-alt"></i>
												</button>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="row">
			<div class="col-12 mt-5">
	            <div class="card-box">
	                <div class="table-responsive" style="background-color: #555555;border-top:6px solid #a67c33;color:white;">
	                    <table id="datatable" class="table table-bordered dataTable no-footer table match-history" role="grid" aria-describedby="datatable_info">
	                    	<h4 class="sub-title panel-heading m-t-0 header-title" style="text-align:center;padding-top:20px">Match Histoy</h4>
								
								<div class="row" style="margin-top:20px;">
									<div class="col-sm-3 col-md-3 col-xs-3 matchKey" >
										<input type="text" name="account"  class="btn btn-primary" id="matchID" placeholder="Please enter Match ID">
									</div>
									<div class="col-sm-3 col-md-3 col-xs-3" style="float:left">
										<button type="submit" class="btn btn-primary" id="Btnsave">Add Match</button>
									</div>
									<div class="col-sm-6 col-md-6 col-xs-6"></div>
								</div>
								<div class="clearfix" style="margin-top:20px"></div>

							<thead>
	                            <tr>
	                                <th class="boosterpayment">Champion</th>
	                                <th data-toggle="true" class="boosterpayment">Result</th>
	                                <th class="boosterpayment" data-hide>K/D/A</th>
	                                <th class="boosterpayment">Gold</th>
	                                <th class="boosterpayment" data-hide="phone">Minions</th>
	                                <th class="boosterpayment" data-hide="phone, tablet">Items</th>
	                                <th class="boosterpayment" data-hide="phone, tablet">Spells</th>
	                                <th class="boosterpayment" data-hide="phone, tablet">Booster&nbspName</th>
	                            </tr>
	                        </thead>
	                        
	                        <tbody>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion" alt="" style="height:60px:width:60px;" />
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td  style="border:0px !important">20/10/15</td>
	                            <td  style="border:0px !important">8745</td>
	                            <td  style="border:0px !important">350</td>
	                            <td  style="border:0px !important">
	                                <img src="{{asset('images/items/1.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/2.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3802.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/39.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                 <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerSnowball.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerSmite.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="border:0px !important;padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">Celinois</span> -->
	                            	<span style="">Celinois</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/8.png')}}"  class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">20/10/15</td>
	                            <td style="border:0px !important">8130</td>
	                            <td style="border:0px !important">312</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/7.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/8.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/9.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/10.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3814.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                </td>
	                            
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerTeleport.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            <img src="{{asset('images/spells/SummonerPoroThrow.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                           
	                            <td style="border:0px !important;padding-top:20px;">
	                            	<span >Booster</span>
	                            </td>
	                            
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/6.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="border:0px !important;text-align:center;" style="">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">35/13/5</td>
	                            <td style="border:0px !important">8010</td>
	                            <td style="border:0px !important">125</td>
	                            <td style="border:0px !important"><img src="{{asset('images/items/1419.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1414.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/16.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerMana.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="padding-top:20px;border:0px !important">
	                            	<span>Tomas</span>
	                            	<!-- <span class="badge label-table badge-danger">Booster</span> -->
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/45.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">10/8/20</td>
	                            <td style="border:0px !important">7500</td>
	                            <td style="border:0px !important">140</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/21.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/22.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/23.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/24.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerDot.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important" style="padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">active</span> -->
	                            	<span style="">Mandela</span>
	                            </td>
							</tr>
							




							<tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion" alt="" style="height:60px:width:60px;" />
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td  style="border:0px !important">20/10/15</td>
	                            <td  style="border:0px !important">8745</td>
	                            <td  style="border:0px !important">350</td>
	                            <td  style="border:0px !important">
	                                <img src="{{asset('images/items/1.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/2.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3802.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/39.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                 <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerSnowball.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerSmite.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="border:0px !important;padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">Celinois</span> -->
	                            	<span style="">Celinois</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/8.png')}}"  class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">20/10/15</td>
	                            <td style="border:0px !important">8130</td>
	                            <td style="border:0px !important">312</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/7.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/8.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/9.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/10.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3814.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                </td>
	                            
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerTeleport.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            <img src="{{asset('images/spells/SummonerPoroThrow.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                           
	                            <td style="border:0px !important;padding-top:20px;">
	                            	<span >Booster</span>
	                            </td>
	                            
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/6.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="border:0px !important;text-align:center;" style="">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">35/13/5</td>
	                            <td style="border:0px !important">8010</td>
	                            <td style="border:0px !important">125</td>
	                            <td style="border:0px !important"><img src="{{asset('images/items/1419.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1414.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/16.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerMana.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="padding-top:20px;border:0px !important">
	                            	<span>Tomas</span>
	                            	<!-- <span class="badge label-table badge-danger">Booster</span> -->
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/45.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">10/8/20</td>
	                            <td style="border:0px !important">7500</td>
	                            <td style="border:0px !important">140</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/21.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/22.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/23.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/24.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerDot.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important" style="padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">active</span> -->
	                            	<span style="">Mandela</span>
	                            </td>
							</tr>
							


							<tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion" alt="" style="height:60px:width:60px;" />
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td  style="border:0px !important">20/10/15</td>
	                            <td  style="border:0px !important">8745</td>
	                            <td  style="border:0px !important">350</td>
	                            <td  style="border:0px !important">
	                                <img src="{{asset('images/items/1.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/2.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3802.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/39.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                 <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerSnowball.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerSmite.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="border:0px !important;padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">Celinois</span> -->
	                            	<span style="">Celinois</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/8.png')}}"  class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">20/10/15</td>
	                            <td style="border:0px !important">8130</td>
	                            <td style="border:0px !important">312</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/7.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/8.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/9.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/10.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3814.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                </td>
	                            
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerTeleport.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            <img src="{{asset('images/spells/SummonerPoroThrow.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                           
	                            <td style="border:0px !important;padding-top:20px;">
	                            	<span >Booster</span>
	                            </td>
	                            
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/6.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="border:0px !important;text-align:center;" style="">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">35/13/5</td>
	                            <td style="border:0px !important">8010</td>
	                            <td style="border:0px !important">125</td>
	                            <td style="border:0px !important"><img src="{{asset('images/items/1419.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1414.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/16.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerMana.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="padding-top:20px;border:0px !important">
	                            	<span>Tomas</span>
	                            	<!-- <span class="badge label-table badge-danger">Booster</span> -->
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/45.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">10/8/20</td>
	                            <td style="border:0px !important">7500</td>
	                            <td style="border:0px !important">140</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/21.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/22.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/23.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/24.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerDot.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important" style="padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">active</span> -->
	                            	<span style="">Mandela</span>
	                            </td>
							</tr>
							



							<tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion" alt="" style="height:60px:width:60px;" />
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td  style="border:0px !important">20/10/15</td>
	                            <td  style="border:0px !important">8745</td>
	                            <td  style="border:0px !important">350</td>
	                            <td  style="border:0px !important">
	                                <img src="{{asset('images/items/1.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/2.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3802.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/39.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                 <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerSnowball.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerSmite.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="border:0px !important;padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">Celinois</span> -->
	                            	<span style="">Celinois</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/8.png')}}"  class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">20/10/15</td>
	                            <td style="border:0px !important">8130</td>
	                            <td style="border:0px !important">312</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/7.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/8.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/9.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/10.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3814.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                </td>
	                            
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerTeleport.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            <img src="{{asset('images/spells/SummonerPoroThrow.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                           
	                            <td style="border:0px !important;padding-top:20px;">
	                            	<span >Booster</span>
	                            </td>
	                            
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/6.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="border:0px !important;text-align:center;" style="">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">35/13/5</td>
	                            <td style="border:0px !important">8010</td>
	                            <td style="border:0px !important">125</td>
	                            <td style="border:0px !important"><img src="{{asset('images/items/1419.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1414.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/16.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerMana.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="padding-top:20px;border:0px !important">
	                            	<span>Tomas</span>
	                            	<!-- <span class="badge label-table badge-danger">Booster</span> -->
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/45.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">10/8/20</td>
	                            <td style="border:0px !important">7500</td>
	                            <td style="border:0px !important">140</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/21.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/22.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/23.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/24.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerDot.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important" style="padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">active</span> -->
	                            	<span style="">Mandela</span>
	                            </td>
							</tr>
							






							<tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion" alt="" style="height:60px:width:60px;" />
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td  style="border:0px !important">20/10/15</td>
	                            <td  style="border:0px !important">8745</td>
	                            <td  style="border:0px !important">350</td>
	                            <td  style="border:0px !important">
	                                <img src="{{asset('images/items/1.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/2.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3802.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/39.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                 <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerSnowball.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerSmite.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="border:0px !important;padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">Celinois</span> -->
	                            	<span style="">Celinois</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/8.png')}}"  class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">20/10/15</td>
	                            <td style="border:0px !important">8130</td>
	                            <td style="border:0px !important">312</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/7.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/8.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/9.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/10.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/3814.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                </td>
	                            
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerTeleport.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            <img src="{{asset('images/spells/SummonerPoroThrow.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                           
	                            <td style="border:0px !important;padding-top:20px;">
	                            	<span >Booster</span>
	                            </td>
	                            
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/6.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="border:0px !important;text-align:center;" style="">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">35/13/5</td>
	                            <td style="border:0px !important">8010</td>
	                            <td style="border:0px !important">125</td>
	                            <td style="border:0px !important"><img src="{{asset('images/items/1419.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1414.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/16.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1416.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerMana.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td  style="padding-top:20px;border:0px !important">
	                            	<span>Tomas</span>
	                            	<!-- <span class="badge label-table badge-danger">Booster</span> -->
	                            </td>
	                        </tr>
	                        <tr>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/champions/45.png')}}" class="rounded-circle champion" alt="work-thumbnail" style="height:60px:width:60px;"/>
	                            </td>
	                            <td style="text-align:center;border:0px !important;">
	                            	<strong class="win">WIN</strong><p style="font-size:13px;">6-July-2018</p>
	                            </td>
	                            <td style="border:0px !important">10/8/20</td>
	                            <td style="border:0px !important">7500</td>
	                            <td style="border:0px !important">140</td>
	                            <td style="border:0px !important">
	                            	<img src="{{asset('images/items/21.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/22.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/23.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/24.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/items/1413.png')}}" class="img-responsive" alt="" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                
	                            </td>
	                            <td style="border:0px !important">
	                                <img src="{{asset('images/spells/SummonerDot.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                                <img src="{{asset('images/spells/SummonerHeal.png')}}" class="img-responsive" alt="Responsive image" style="width:30px;height:30px;margin:0 auto;margin-top:10px"/>
	                            </td>
	                            <td style="border:0px !important" style="padding-top:20px;">
	                            	<!-- <span class="badge label-table badge-success">active</span> -->
	                            	<span style="">Mandela</span>
	                            </td>
	                        </tr>

	                        </tbody>
	                        <tfoot>
	                        <tr class="active">
	                            <td colspan="7" style="border:0px !important;">
	                                <div class="text-right">
	                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0" style="background-color:white;color:black">
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

    <!-- =============side bar=============== -->
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