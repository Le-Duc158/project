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
		<div class="row">
			<div class="Get-in-touch col-md-6">
				<p class="sup-get">Get in touch</p>
				<h4>Try not to dither to contact with as for any sort of information</h4>
				<p class="sup-get">Call us for immediate bolster this number</p>
				<p class="sup-get">+91 988 8265 101</p>
				<p class="sup-get">Drop a message fell free now</p>
				<p class="sup-get">Info@youremail.com</p>
			</div>
			<div class="col-md-6">	
				<div class=" textarea-contact button-contact">
					<label >Email Address*</label>
					<input class="input-contact" type="text" name="Email">   
					<label >Subject*</label>
					<input class="input-contact" type="text" name="Subject"> 
					<label >Message*</label>
					<input class="input-contact" type="text" name="Subject"> 
					<div class="sup-button-contact">
						<button type="">Send Message</button>
					</div>
				</div>                
			</div>
		</div>	
	</div>
	<div>
		<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6576008138995!2d105.78126221503865!3d21.046381985988862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3b4220c2bd%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1591688726437!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%"></iframe>
	</div>
	<form>
		<div class="form-group">
			<input type="range" class="form-control-range" id="formControlRange">
		</div>
	</form>
	@stop()