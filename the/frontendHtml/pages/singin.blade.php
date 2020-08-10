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

	<div class="wap-in">
		<div class="container">
			@if(Session('thanhcong'))
			<div class="alert alert-success">{{Session('thanhcong')}}</div>
			@endif
			
			@if(Session('thongBao'))
			<div class="alert alert-success">{{Session('thongBao')}}</div>
			@endif
			@if(Session('thongbao12'))
			<div class="alert alert-success">{{Session('thongbao12')}}</div>
			@endif
			<h1 class="Login">Login</h1>
			<p class="Login-track-your">To track your ofder please enter your Order ID in the box blew the "Track" buttion. This was given to your on your receipt and in confirmation email your should have recevied</p>
			<form action="{{route('singin')}}" method="post" class="form-login">
				@csrf
				
				<div class="form-group sup-login-form">
					<input type="text" name="email" required class="form-control sup-input-login" placeholder="User name" id="" >
					@error('email')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group sup-login-form">
					<input type="password" name="password" required class="form-control sup-input-login" placeholder="Password" id="" >
					@error('password')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				<div class="checkBox">
					<span  class="check-box-login " style="display: inline-block;"><input type="checkbox"> &nbsp;Remember me</sapn>
						<span><a href="">Forgot Password ?</a></span>
					</div>
					<button class="button-sign-1 btn-success btn" type="submit">Login</button>
					<div class="button-login">
						<div class="row sup-button-login">
							<div class="col-lg-6 col-sm-6 sup-button-login-1 Login-with Login-with-google">
								<div class="btn-login-1">
									<button class="" type="submit">Login with Google +</button>
								</div>
							</div> 
							<div class="col-lg-6 col-sm-6">
								<div class="login-3">
									<div class="btn-login-1 Login-with-Facebook">
										<button class="" type="submit">Login with Facebook</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<p class="have-an-acount">Don't have an acount |<a href="{{route('singup')}}" charset="Sign-up-login">Sign up</a></p>
				
			</div>
		</div>


		@stop()