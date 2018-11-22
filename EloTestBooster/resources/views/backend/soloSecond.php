<!DOCTYPE html>
<html>
<head>
	<title>MemberArea Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend/memberArea_solo.css')}}">
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
					<h1 class="memberareaFont">Member's Area</h1>
					<h3 class="sub-title">Hello, Celinoes</h3>
				</div>
				<div class="col-sm-12">

						@if ($message = Session::get('success'))
						<div class=" custom-alerts alert alert-success fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							{!! $message !!}
						</div>

						<?php Session::forget('success');?>
						@endif

						@if ($message = Session::get('error'))
						<div class="custom-alerts alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							{!! $message !!}
						</div>

						<?php Session::forget('error');?>
						@endif
						
					<div class="order-details d-flex mt-5">
						<div class="order-image mr-5">
							<img src="{{asset('images/memberarea/poro.png')}}">
						</div>
						<div class="order-information">
							<div class="order-inspect d-flex">
								<div class="single-inspect">
									<span>Order Id</span>
									<strong>354334</strong>
								</div>
								<div class="single-inspect">
									<span>Order Status</span>
									<strong>In Hold</strong>
								</div>
								<div class="single-inspect">
									<span>User Name</span>
									<strong>{{ Auth::user()->name }}</strong>
								</div>
								
								<div class="single-inspect">
									<span>Server</span>

										@if(!empty($servers))
											<strong>{{  $servers->serverName }}</strong>
										@else
											<strong>None</strong>
										@endif
								</div>
								<div class="single-inspect">
									<span>Summoner Name</span>
										@if(!empty($summonernames))
											<strong>{{ $summonernames->summonerName }}</strong>
										@else
											<strong>None</strong>
										@endif
								</div>
							</div>
							<div class="order-status mt-3 d-flex">
								<div class="order-loader mr-3 d-sm-none d-md-block d-lg-block">
									<div class="lds-ripple"><div></div><div></div></div>
								</div>
								<div class="order-status-information">
									<h5>Order In Progress</h5>
									<p>Currently your Order Status will be On Hold. Please make your game account.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<form method="POST" action="{{route('solo_account')}}">
							{{ csrf_field() }}
						<input type="hidden" id="selectedImages"  name="selectedImages" required autofocus>
						<input type="hidden" id="selectedRoles"  name="selectedRoles" required autofocus>
						<div class="order-form form-row mt-5">
							<div class="form-group col-md-6 col-lg-3 col-sm-12">
								<label for="accountName">Account Name</label>
								<input type="text" name="accountName" id="accountName" class="btn btn-primary col-md-12" style="background-color:#b7b7b7;color:black" required autofocus>
							</div>
							<div class="form-group col-md-6 col-lg-3 col-sm-12">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="btn btn-primary col-md-12" style="background-color:#b7b7b7;color:black" required autofocus>
							</div>
							<div class="form-group col-md-6 col-lg-3 col-sm-12">
								<label for="suommerName">Summoner Name</label>
								<input type="text" name="summonerName" id="summonerName" class="btn btn-primary col-md-12" style="background-color:#b7b7b7;color:black" required autofocus>
							</div>

							<div class="form-group col-md-6 col-lg-3 col-sm-12">
								<label for="serverName">Server Name</label>
								<select name="serverName" id="serverName" class="btn btn-primary col-md-12" style="background-color:#b7b7b7;color:black" required autofocus>
									<option selected disabled>Select your option</option>
									<option >BR</option>
									<option >EUNE</option>
									<option >EUW</option>
									<option >LAS</option>
									<option >NA</option>
									<option >JP</option>
									<option >SEA</option>
									<option >KR</option>
									<option >CN</option>
								</select>
							</div>
							<div class="form-group col-md-12 col-lg-12">
								<label for="note">Notes to booster</label>
								
								<textarea class="btn btn-primary col-md-12" rows="4" cols="50" id="note" name="note" style="background-color:#b7b7b7;color:black" required autofocus></textarea>
							</div>

							<div class="col-md-6 col-lg-5 mt-3 champions-picker">

								<h5 class="mb-5">Preferred Champions</h5>
								<!-- The Modal -->
								<div class="modal fade" id="myModal" style="padding-top:50px;">
									<div class="modal-dialog modal-lg">
										<div class="modal-content" style="background-color:#636363;">
											<!-- Modal Header -->
											<div class="modal-header" style="background-color:#555555;border-bottom:0px;">
												<div class="sub-title panel-heading col-md-18 offset-5" style="text-align:center!important">CHAMPIONS</div>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body" style="background-color:#636363;border-top:0px;">
												<div class="row" id="champions-list">
											
													@foreach($images as $image)
													<ul class="champions">
														<li class="col-sm-1 col-lg-1">
															<img id="{{$image->id}}" name="{{$image->imagename}}" src="{{ url('/').'/images/champions/'.$image->imagename }}.png" class="rounded-circle" alt="" onclick="championImage({{$image->id}},{{$image->imagename}});"   style="width:55px;height:55px;"/>
														</li>
													</ul>
													@endforeach
												</div>
											</div>
											<!-- Modal footer -->
											<div class="modal-footer" style="background-color:#636363;border-top:0px;">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								
								<ul class="champions" id="selected-champions">
									<li class="new-picker d-flex align-items-center justify-content-center rounded-circle" style="width:55px;height:55px;margin-right:-20px!important">
										<i class="fa fa-plus" data-toggle="modal" data-target="#myModal"></i>
									</li>
								</ul>
							</div>
							
							<div class="col-md-6 col-lg-5 mt-3 roles-picker">
								<h5 class="mb-5">Preferred Roles</h5>
								<ul class="roles">
									@foreach($roleImages as $roleImage)
										<li class="roleChange" id="preferImage{{$roleImage->id}}">
											<img id="{{$roleImage->id}}" name="{{$roleImage->name}}" src="{{ url('/').'/images/roles/'.$roleImage->name }}.png" 
											class="rounded-circle" alt="" onclick="RoleSelection({{$roleImage->id}},{{$roleImage->name}});" />
										</li>
									@endforeach
								</ul>
							</div>
							<div class="col-md-6 col-lg-2 mt-5 champions-picker d-flex align-items-end">
								<button type="submit" class="btn btn-submit" style="position:absolute;">Save</button>
							</div>
						</div>
					<form>
				</div>

				<div class="col-sm-12 mt-5">
					<h1 class="text-center">Current Order</h1>
					<div class="current-order">
						<div class="ranks row offset-lg-2">
							<div class="starting-rank col-lg-3 col-sm-4 col-xs-4">
								@if(!empty($startingRanks))
									<img  src="{{ url('/').'/images/divisions/'.$startingRanks->starting_image_save }}.png" />
									<h5 class="offset-2">Starting Rank</h5>
									<em class="offset-2" style="font-size:14px;">{{  $startingRanks->member_starting_rank }}</em>
								@else
									<img  src="{{ asset('images/divisions/2_2.png')}}" />
									<h5 class="offset-2">Starting Rank</h5>
									<em class="offset-2" style="font-size:14px;">Platinum(DivisionII)</em>

								@endif
								
							</div>
							<div class="current-rank col-lg-3 col-sm-4">
									<img class="offset-2" src="{{ url('/').'/images/divisions/'.$startingRanks->starting_image_save }}.png" />
									<h5 class="offset-4">Current Rank</h5>
									<em class="offset-4" style="font-size:14px;">{{$startingRanks->member_starting_rank}}</em>
							</div>
							<div class="desired-rank col-lg-3 col-sm-4">
								@if(!empty($desiredRanks))
								<img class="offset-3" src="{{ url('/').'/images/divisions/'.$desiredRanks->desired_image_save }}.png" />
								<h5 class="offset-5">Desired Rank</h5>
								<em class="offset-5" style="font-size:14px;" style="font-size:14px;">{{ $desiredRanks->member_desired_rank }}</em>
								@else
								<img  src="{{ asset('images/divisions/1_2.png')}}" />
									<h5 class="offset-2">Desired Rank</h5>
									<em class="offset-2" style="font-size:14px;">Dragon(DivisionII)</em>

								@endif
							</div>
						</div>
						<div class="col-sm-12 d-flex justify-content-center">
							<div class="col-sm-3 d-flex justify-content-center">
								<ul class="current-order-helper">
								<?php
									for ($i=1;$i<=5;$i++)
									{
										if($i<=$small_starting_division)
										{?>
											<li><img src="{{ url('/').'/images/divisions/'.$small_starting_division.'_'.$i}}.png">
												<span>{{$startingRank_imageName.$i}}</span>
											</li>
										<?php } 
										
										elseif( $i>$small_starting_division)
										{?>
											<li class="disactive">
												<img src="{{ url('/').'/images/divisions/'.$small_starting_division.'_'.$i}}.png">
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
							<div class="col-sm-3 d-flex justify-content-center">
								<ul class="current-order-helper">
								<?php
									for ($i=1;$i<=5;$i++)
									{
										if($i<=$small_starting_division)
										{?>
											<li><img src="{{ url('/').'/images/divisions/'.$small_starting_division.'_'.$i}}.png">
												<span>{{$startingRank_imageName.$i}}</span>
											</li>
										<?php } 
										
										elseif( $i>$small_starting_division)
										{?>
											<li class="disactive">
												<img src="{{ url('/').'/images/divisions/'.$small_starting_division.'_'.$i}}.png">
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

							<div class="col-sm-3 d-flex justify-content-center">
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
					<div style="clear:both"></div>
				</div>

				<div class="col-sm-12 mt-5">
					<div class="row pt-5 pb-5">
						<div class="chatbox col-sm-12 col-md-9">
							<div class="chatbox-container d-block">
								<div class="chatbox-inner">
									<div class="chats">
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
									</div>
								</div>
								<div class="chatbox-footer">
									<div class="chatbox-input">
										<input type="text" name="msg" placeholder="Type and hit enter"/>
										<button>
											<i class="fa fa-comment-alt"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex flex-column mt-auto">
							<a class="btn btn-primary"  data-toggle="modal" data-target="#giftModal" style="margin-top:20px;background-color:#a67c33!important;border-color:#a67c33!important">Gift Booster</a>
							<button class="btn btn-primary mt-3" style="background-color:#acacac!important;border-color:#acacac!important;color:white">Offline Mode</button>
							<button class="btn btn-primary mt-3" style="background-color:#ed1c24!important;border-color:#ed1c24!important;color:white">Pause Order</button>
							<button class="btn btn-primary mt-3" style="background-color:#006600!important;border-color:#006600!important;color:white">Unpause Order</button>
							<a href="{{route('backend.memberArea_review')}}" class="btn btn-primary mt-3" style="background-color:#006600!important;border-color:#006600!important;color:white">Review Booster</a>
						</div>

								<!-- The Modal -->
								<div class="modal fade" id="giftModal" style="padding-top:50px;">
									<div class="modal-dialog modal-xs">
										<div class="modal-content" style="background-color:#636363;">
											<!-- Modal Header -->
											<div class="modal-header" style="background-color:#555555;border-bottom:0px;">
												<div class="sub-title panel-heading col-md-18 offset-4" style="text-align:center!important">Pay&nbspwith&nbspPaypal</div>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body" style="background-color:#636363;border-top:0px;">
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="panel panel-default">

															@if ($message = Session::get('success'))
															<div class="custom-alerts alert alert-success fade in">
																<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
																{!! $message !!}
															</div>

															<?php Session::forget('success');?>
															@endif

															@if ($message = Session::get('error'))
															<div class="custom-alerts alert alert-danger fade in">
																<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
																{!! $message !!}
															</div>

															<?php Session::forget('error');?>
															@endif
															<!-- <div class="panel-heading" style="height:40px;text-align:center;color:black;padding-top:10px">Pay&nbspwith&nbspPaypal</div> -->

															<div class="panel-body">
																<form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.gift_with_paypal') !!}" >
																	{{ csrf_field() }}
																	<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
																		<label for="amount" class="col-md-2 control-label offset-4">Amount</label>
																		<div class="col-md-9 offset-4">
																			<input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}">
																			@if ($errors->has('amount'))
																				<span class="help-block">
																					<strong>{{ $errors->first('amount') }}</strong>
																				</span>
																			@endif
																		</div>
																	</div>
																	
																	<div class="form-group">
																		<div class="col-md-3 offset-3"></div>
																		<div class="col-md-6 offset-5">
																			<button type="submit" class="btn btn-primary" style="background-color:#1073cb">Pay with Paypal</button>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Modal footer -->
											<div class="modal-footer" style="background-color:#636363;border-top:0px;">
												<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
											</div>
										</div>
									</div>
								</div>
					</div>
				</div>

				
				<div class="col-sm-12 mt-5">
					<h1 class="text-center text-uppercase">Match History</h1>
					<div class="row mt-5">
						<div class="table-responsive">
							<div class="col-sm-12">
								<table id="datatable" class="table table-bordered dataTable no-footer table match-history" id="datatable" class="" role="grid" aria-describedby="datatable_info" style="border:0 !important">
									<thead>
										<th>Champion</th>
										<th>Result</th>
										<th>K/D/A</th>
										<th>Gold</th>
										<th>Minions</th>
										<th>Items</th>
										<th>Spells</th>
										<th>Booster&nbspName</th>
									</thead>
									<tbody>
										<tr>
											<td><img src="{{asset('images/champions/1.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td>
												<strong>Celinoes</strong>
											</td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/3.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td>
												<strong>Celinoes</strong>
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{asset('images/champions/5.png')}}" class="rounded-circle champion">
											</td>
											<td>
												<strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td><strong>Celinoes</strong></td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong><p>6-July-2018</p></td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td><strong>Celinoes</strong></td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/1.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td>
												<strong>Celinoes</strong>
											</td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/3.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td>
												<strong>Celinoes</strong>
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{asset('images/champions/5.png')}}" class="rounded-circle champion">
											</td>
											<td>
												<strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td><strong>Celinoes</strong></td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong><p>6-July-2018</p></td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td><strong>Celinoes</strong></td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/1.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td>
												<strong>Celinoes</strong>
											</td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/3.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td>
												<strong>Celinoes</strong>
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{asset('images/champions/5.png')}}" class="rounded-circle champion">
											</td>
											<td>
												<strong class="win">WIN</strong>
												<p>6-July-2018</p>
											</td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td><strong>Celinoes</strong></td>
										</tr>
										<tr>
											<td><img src="{{asset('images/champions/7.png')}}" class="rounded-circle champion"></td>
											<td><strong class="win">WIN</strong><p>6-July-2018</p></td>
											<td>15/0/19</td>
											<td>16200</td>
											<td>234</td>
											<td>
												<div class="items">
													<img src="{{asset('images/items/Berserker_s_Greaves_item.png')}}"/>
													<img src="{{asset('images/items/Essence_Reaver_item.png')}}"/>
													<img src="{{asset('images/items/Runaan_s_Hurricane_item.png')}}"/>
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
													<img src="{{asset('images/items/Mortal_Reminder_item.png')}}"/>
												</div>
											</td>
											<td>
												<div class="spells">
													<img src="{{asset('images/items/Rabadon_s_Deathcap_item.png')}}"/>
													<img src="{{asset('images/items/Ninja_Tabi_item.png')}}"/>
												</div>
											</td>
											<td><strong>Celinoes</strong></td>
										</tr>
									</tbody>
									<tfoot>
										<tr class="active" style="border:0 !important;">
											<td colspan="6" style="border:0 !important">
												<div class="text-right" style="background-color:#acacac!important;">
													<ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0" style="background-color:#acacac!important;">
														
													</ul>
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
								<!-- <div class="row">
									<div class="col">
										<p>
											Total of <strong>37 match(es)</strong> have been played
										</p>
									</div>
									<div class="col d-flex justify-content-end">
										<nav aria-label="Page navigation example">
										<ul class="pagination">
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
												<span class="sr-only">Previous</span>
											</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
												<span class="sr-only">Next</span>
											</a>
											</li>
										</ul>
										</nav>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>

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
	

	<script src="js/backend/jquery.dataTables.min.js"></script> 
    <script src="js/backend/dataTables.bootstrap4.min.js"></script> 
    <!-- <script src="{{asset('js/backend/dataTables.responsive.min.js')}}"></script> -->
    <script src="{{asset('js/backend/dataTables.buttons.min.js')}}"></script>


    <!-- =============datatable=============== -->
    <script type="text/javascript">
		$(document).ready(function() 
		{
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

	<!-- ==================champions images================== -->
	<script>
		var preferdChampion = [];

		function championImage(id,imagename)
		{
			var found = preferdChampion.includes(imagename);

			if(!found)
			{
				$('#'+id).parent().parent().appendTo('#selected-champions').after(' ');
				preferdChampion.push(imagename);
				$('#selectedImages').val(preferdChampion);
			}	
			else
			{
				$('#'+id).parent().parent().prependTo('#champions-list').after(' ');
				var index = preferdChampion.indexOf(imagename);
				if (index > -1)
				{
					preferdChampion.splice(index, 1);
				}
			}
			
		}
	</script>
	
	<!-- ==================rolechange image's value getting================== -->
	<script>
		var preferdRole = [];
		function RoleSelection(id,imagename)
		{
			var found = preferdRole.includes(imagename);
			
			if(!found)
			{

				 $("#preferImage"+id).addClass('active');

				preferdRole.push(imagename);

				$('#selectedRoles').val(preferdRole);
			}
			else
			{
				$("#preferImage"+id).removeClass('active');
				var index = preferdRole.indexOf(imagename);
				if (index > -1)
				{
					preferdRole.splice(index, 1);
				}
			}
		}
	</script>
</body>
</html>