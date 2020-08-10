	@extends('frontend.main')
	@section('content')
	<div class="mother-nav-bar ">
		<div class="container nav-bar">
			<nav class="navbar row">
				<div class="col-lg-6 col-sm-6   sup-navbar ">
					<ul class="sup-navbar-1">
						<li><a class="sup-navbar-blog-1" class="" href="">FAQ</a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-6  sup-navbar text-right">
					<ul class="sup-navbar-blog-2">
						<li class=""><a class="" href="">Home <i class="fas fa-angle-right "></i></a></li>
						<li ><a class="" href="" style="">FAQ</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<div class="container Recovery-Password">
		<h1 class="">Recovery Password</h1>
		<p class="Login-track-your">To track your ofder please enter your Order ID in the box blew the "Track" buttion. This was given to your on your receipt and in confirmation email your should have recevied</p>
		<form  class="Recovery-Password">
			<div class="form-group input-Recovery-Password">
				<input type="text" class="form-control sup-input-login" placeholder="Email" id="email" >
			</div>
			<div class="button-login">
				<div class="sup-button-Recovery-Password">
					<button class="button-Login-1">Recovery Password</button>
				</div>
			</div>
		</form>
	</div>


	@stop()