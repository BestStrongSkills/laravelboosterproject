<!DOCTYPE html>
<html>
<head>
	<title>Duo Page</title>
	<link rel="stylesheet" href="{{asset('css/backend/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/table.responsive.bootstrap.4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend/memberArea_solo.css')}}">
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
				<h1 class="memberareaFont">Member's Area</h1>
				<h3 class="sub-title">Hello, Celinoes</h3>
			</div>
			<div class="col-sm-12">
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
								<strong>In Progress</strong>
							</div>
							<div class="single-inspect">
								<span>Server</span>
								<strong>EUW</strong>
							</div>
							<div class="single-inspect">
								<span>Summoner Name</span>
								<strong>Test Summoner</strong>
							</div>
						</div>
						<div class="order-status mt-3 d-flex">
							<div class="order-loader mr-3 d-sm-none d-md-block d-lg-block">
								<div class="lds-ripple"><div></div><div></div></div>
							</div>
							<div class="order-status-information">
								<h5>Order In Progress</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="order-form form-row mt-5">
					<div class="form-group col-md-6 col-lg-3 col-sm-12">
						<label for="suommerName">Summoner Name</label>
						<input type="text" name="suommerName" id="suommerName" class="btn btn-primary col-md-12" style="background-color:#b7b7b7">
					</div>
					<div class="form-group col-md-6 col-lg-3 col-sm-12">
						<label for="server">Server Name</label>
						<input type="text" name="server" id="server" class="btn btn-primary col-md-12" style="background-color:#b7b7b7">
					</div>
					<div class="form-group col-md-12 col-lg-12">
						<label for="notes">Notes to booster</label>
						<textarea class="btn btn-primary col-md-12" rows="4" cols="50" id="notes" name="notes" style="background-color:#b7b7b7"></textarea>

					</div>
					<div class="col-md-6 col-lg-5 mt-3 champions-picker">
						<h5 class="mb-5">Preferred Champions</h5>
						<ul class="champions">
							<li>
								<img src="{{asset('images/champions/54.png')}}" class="rounded-circle">
							</li>
							<li>
								<img src="{{asset('images/champions/3.png')}}" class="rounded-circle">
							</li>
							<li>
								<img src="{{asset('images/champions/5.png')}}" class="rounded-circle">
							</li>
							<li>
								<img src="{{asset('images/champions/7.png')}}" class="rounded-circle">
							</li>
							<!-- <li>
								<img src="{{asset('images/champions/1.png')}}" class="rounded-circle">
							</li> -->
							<li class="new-picker d-flex align-items-center justify-content-center rounded-circle">
								<i class="fa fa-plus"></i>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-5 mt-3 roles-picker">
						<h5 class="mb-5">Preferred Roles</h5>
						<ul class="roles">
							<li>
								<img src="{{asset('images/roles/top.png')}}" class="rounded-circle">
							</li>
							<li class='active'>
								<img src="{{asset('images/roles/jungle.png')}}" class="rounded-circle">
							</li>
							<li>
								<img src="{{asset('images/roles/bot.png')}}" class="rounded-circle">
							</li>
							<li>
								<img src="{{asset('images/roles/support.png')}}" class="rounded-circle">
							</li>
							<li>
								<img src="{{asset('images/roles/mid.png')}}" class="rounded-circle">
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-2 mt-3 champions-picker d-flex align-items-end">
						<button class="btn btn-submit">Save</button>
					</div>
				</div>
			</div>

			<div class="col-sm-12 mt-5">
				<h1 class="text-center">Current Order</h1>
				<div class="current-order">
					<div class="ranks row offset-lg-2">
						<div class="starting-rank col-lg-3 col-sm-4 col-xs-4">
							<img src="{{asset('images/Divisions/5_1.png')}}"/>
							<p class="text-center">
								<h5>Starting Rank</h5>
								<em>Bronze I</em>
							</p>
						</div>
						<div class="current-rank col-lg-3 col-sm-4">
							<img src="{{asset('images/Divisions/4_3.png')}}"/>
							<p class="text-center">
								<h5>Current Rank</h5>
								<em>Silver I</em>
							</p>
						</div>
						<div class="desired-rank col-lg-3 col-sm-4">
							<img src="{{asset('images/Divisions/3_1.png')}}"/>
							<p class="text-center">
								<h5>Desired Rank</h5>
								<em>Gold I</em>
							</p>
						</div>
					</div>
					<div class="col-sm-12 d-flex justify-content-center">
						<ul class="current-order-helper">
							<li>
								<img src="{{asset('images/Divisions/5_1.png')}}">
								<span>B1</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/5_1.png')}}">
								<span>B2</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/5_1.png')}}">
								<span>B3</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/5_1.png')}}">
								<span>B4</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/5_1.png')}}">
								<span>B5</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/5_1.png')}}">
								<span>B6</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/4_3.png')}}">
								<span>B6</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/4_3.png')}}">
								<span>B6</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/4_3.png')}}">
								<span>B6</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/4_3.png')}}">
								<span>B6</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/4_3.png')}}">
								<span>B6</span>
							</li>
							<li>
								<img src="{{asset('images/Divisions/4_3.png')}}">
								<span>B6</span>
							</li>
							<li class="disactive">
								<img src="{{asset('images/Divisions/3_3.png')}}">
								<span>G1</span>
							</li>
							<li class="disactive">
								<img src="{{asset('images/Divisions/3_3.png')}}">
								<span>G2</span>
							</li>
							<li class="disactive">
								<img src="{{asset('images/Divisions/3_3.png')}}">
								<span>G3</span>
							</li>
							<li class="disactive">
								<img src="{{asset('images/Divisions/3_3.png')}}">
								<span>G4</span>
							</li>
							<li class="disactive">
								<img src="{{asset('images/Divisions/3_3.png')}}">
								<span>G5</span>
							</li>
							<li class="disactive">
								<img src="{{asset('images/Divisions/3_3.png')}}">
								<span>G6</span>
							</li>
						</ul>
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
					<button class="btn btn-primary" style="margin-top:20px;background-color:#a67c33!important;border-color:#a67c33!important">Gift Booster</button>
						<button class="btn btn-primary mt-3" style="background-color:#acacac!important;border-color:#acacac!important;color:white">Offline Mode</button>
						<button class="btn btn-primary mt-3" style="background-color:#ed1c24!important;border-color:#ed1c24!important;color:white">Pause Order</button>
						<button class="btn btn-primary mt-3" style="background-color:#006600!important;border-color:#006600!important;color:white">Unpause Order</button>
						<button class="btn btn-primary mt-3" style="background-color:#006600!important;border-color:#006600!important;color:white">Review Booster</button>
					</div>
				</div>
			</div>

			<!-- <div class="col-sm-12 mt-5">
				<h1 class="text-center text-uppercase">Match History</h1>
				<div class="row mt-5">
					<div class="col-sm-12">
						<table class="table match-history">
							<thead>
								<th>Champion</th>
								<th>Result</th>
								<th>K/D/A</th>
								<th>Gold</th>
								<th>Minions</th>
								<th>Items</th>
								<th>Spells</th>
								<th>Booster Name</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<img src="images/champions/Janna.png" class="rounded-circle champion">
									</td>
									<td>
										<strong class="win">WIN</strong>
										<p>
											6-July-2018
										</p>
									</td>
									<td>
										15/0/19
									</td>
									<td>
										16200
									</td>
									<td>
										234
									</td>
									<td>
										<div class="items">
											<img src="images/items/Berserker_s_Greaves_item.png"/>
											<img src="images/items/Essence_Reaver_item.png"/>
											<img src="images/items/Runaan_s_Hurricane_item.png"/>
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
											<img src="images/items/Mortal_Reminder_item.png"/>
										</div>
									</td>
									<td>
										<div class="spells">
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
										</div>
									</td>
									<td>
										<strong>Celinoes</strong>
									</td>
								</tr>
								<tr>
									<td>
										<img src="images/champions/Kaisa.png" class="rounded-circle champion">
									</td>
									<td>
										<strong class="win">WIN</strong>
										<p>
											6-July-2018
										</p>
									</td>
									<td>
										15/0/19
									</td>
									<td>
										16200
									</td>
									<td>
										234
									</td>
									<td>
										<div class="items">
											<img src="images/items/Berserker_s_Greaves_item.png"/>
											<img src="images/items/Essence_Reaver_item.png"/>
											<img src="images/items/Runaan_s_Hurricane_item.png"/>
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
											<img src="images/items/Mortal_Reminder_item.png"/>
										</div>
									</td>
									<td>
										<div class="spells">
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
										</div>
									</td>
									<td>
										<strong>Celinoes</strong>
									</td>
								</tr>
								<tr>
									<td>
										<img src="images/champions/Lulu.png" class="rounded-circle champion">
									</td>
									<td><strong class="win">WIN</strong><p>6-July-2018</p></td>
									<td>15/0/19</td>
									<td>16200</td>
									<td>234</td>
									<td>
										<div class="items">
											<img src="images/items/Berserker_s_Greaves_item.png"/>
											<img src="images/items/Essence_Reaver_item.png"/>
											<img src="images/items/Runaan_s_Hurricane_item.png"/>
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
											<img src="images/items/Mortal_Reminder_item.png"/>
										</div>
									</td>
									<td>
										<div class="spells">
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
										</div>
									</td>
									<td>
										<strong>Celinoes</strong>
									</td>
								</tr>
								<tr>
									<td>
										<img src="images/champions/Swain.png" class="rounded-circle champion">
									</td>
									<td>
										<strong class="win">WIN</strong>
										<p>
											6-July-2018
										</p>
									</td>
									<td>
										15/0/19
									</td>
									<td>
										16200
									</td>
									<td>
										234
									</td>
									<td>
										<div class="items">
											<img src="images/items/Berserker_s_Greaves_item.png"/>
											<img src="images/items/Essence_Reaver_item.png"/>
											<img src="images/items/Runaan_s_Hurricane_item.png"/>
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
											<img src="images/items/Mortal_Reminder_item.png"/>
										</div>
									</td>
									<td>
										<div class="spells">
											<img src="images/items/Rabadon_s_Deathcap_item.png"/>
											<img src="images/items/Ninja_Tabi_item.png"/>
										</div>
									</td>
									<td>
										<strong>Celinoes</strong>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row">
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
						</div>
					</div>
				</div>
			</div> -->


			
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
    <!-- <script src="{{asset('js/backend/dataTables.buttons.min.js')}}"></script>-->


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


	<!-- ==================champions images================== -->
	<script>
		$(document).ready(function() 
		{
			$('#champions-list').on('click', 'img', function() 
			{
				$(this).parent().parent().appendTo('#selected-champions').after(' ');
			});

			$('#selected-champions').on('click', 'img', function() {
				$(this).parent().parent().prependTo('#champions-list').after(' ');
			});
		});
	</script>
</body>
</html>