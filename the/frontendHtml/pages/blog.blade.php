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

	
	<div class="container">
		<div class="title-page">
			<p>News</p>
			<h2>Latest Blog Post</h2>	
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{('public/frontend/./imgs/blog777777777777777777777.jpg')}}" alt="">
					<div class="txt">
						<p class="Blog-1">27 March 2018</p>
						<h4 class="Blog">Personalized and targetes conversations</h4>
						<p class="Blog-1 Post">
							<a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{('public/frontend/imgs/Hồng.jpg')}}" alt="">
					<div class="txt">
						<p class="Blog-1">27 March 2018</p>
						<h4 class="Blog">Personalized and targetes conversations</h4>
						<p class="Blog-1 Post">
							<a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{('public/frontend/imgs/blog5555555555555.jpg')}}" alt="">
					<div class="txt">
						<p class="Blog-1">27 March 2018</p>
						<h4 class="Blog">Personalized and targetes conversations</h4>
						<p class="Blog-1 Post">
							<a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{('public/frontend/imgs/blog666666666666666.jpg')}}" alt="">
					<div class="txt">
						<p class="Blog-1">27 March 2018</p>
						<h4 class="Blog">Personalized and targetes conversations</h4>
						<p class="Blog-1 Post">
							<a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{('public/frontend/imgs/blog2.jpg')}}" alt="">
					<div class="txt">
						<p class="Blog-1">27 March 2018</p>
						<h4 class="Blog">Personalized and targetes conversations</h4>
						<p class="Blog-1 Post">
							<a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{('public/frontend/imgs/tải xuống (2).jpg')}}" alt="">
					<div class="txt">
						<p class="Blog-1">27 March 2018</p>
						<h4 class="Blog">Personalized and targetes conversations</h4>
						<p class="Blog-1 Post">
							<a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination-buttom-login pagination row">
			<div class="col-lg-4 col-sm-4 col-xs-4 blog-button">
				<div class="button-blog-1">
					<button type="">Preview Page</button>
				</div>
			</div>
			<ul class="col-lg-4  col-sm-4 col-xs-4 page-numbers container">
				<li><a href=""  class="sup-page-number">1</a></li>
				<li><a href=""  class="sup-page-number">2</a></li>
				<li><a href=""  class="sup-page-number">3</a></li>
			</ul>
			<div class="col-lg-4  col-sm-4 col-xs-4 blog-button ">
				<div class="button-blog-1">
					<button type="">Next Page</button>
				</div>
			</div>
		</div>
	</div>
	@stop()