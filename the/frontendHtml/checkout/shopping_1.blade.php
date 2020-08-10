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
	<section class="checkout-section spad">
        <div class="container">
            <form action="{{route('shopping_1')}}" method="post" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class=" col-md-6 contact">
                                <p>Conact Information</p>
                            </div>
                            <div class=" col-md-6 arleady" >
                                <p>Arleady an account ?<a href="" class="Log_in_shipping">Log in</a></p>        
                            </div>

                        </div>

                        <h4>Biiling Details</h4>
                        <div class="row">

                            <div class="col-lg-12">
                                <label for="last">Name<span>*</span></label>
                                <input type="text" id="last" name="name" required >
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input type="text" id="cun" name="Country" required >
                            </div>
                            <div class="col-lg-12">
                                <label for="street">province / city<span>*</span></label>
                                <input type="text" name="city" id="street" class="street-first" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="town">District/District<span>*</span></label>
                                <input type="text" id="town" name="district">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Commune/Ward<span>*</span></label>
                                <input type="text" id="town" name="commune">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="text">Note</label>
                                <textarea name="note" class="shipping_notes" rows="5" style="width: 100%;outline: none;border: 2px solid #ebebeb;"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">

                                    <li><span style="width: 33%; float: left;">img</span><span style="width: 33%;text-align: center;float: left;">product</span> <span style="width: 33%;float: right;text-align: right;">Total</span></li>
                                    @if(Session::has("cart") != null)
                                    @foreach(Session::get('cart')->products as $item)
                                    <li class="fw-normal">
                                        <img src="public/frontend/imgs/{{$item['productInfo']->img}}" style="width: 100px; height: 100px; border: 1px solid #ccc;">
                                        <span style="width: 33%;padding-left: 25px">{{$item['productInfo']->name}} x {{$item['quanty']}}</span> 
                                        <span style="width: 33%;float: right;text-align: right;padding-top: 30px;">${{$item['productInfo']->price}}</span>
                                    </li>
                                    @endforeach
                                    @endif
                                    @if(Session::has("cart") != null)

                                    <li class="fw-normal">Subtotal <span>{{Session::get('cart')->totalQuanty}}</span></li>
                                    <li class="total-price">Total <span>${{Session::get('cart')->totalPrice}}</span></li>
                                    @else
                                    <div>không có sản phẩm</div>
                                    @endif

                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            COD
                                            <input type="checkbox" id="pc-check"  name="payment_method" value="COD">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" name="payment_method" value="ATM" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
	<!-- <div class="background button-shipping-Join-Now">
		<div class="background-img">
		</div>
		<div class="container background-1">
			<h3 class="color-img aaa">Join our Fvent & make help us to Farmer</h3>
			<p class="color-img ">over 25,0000 User and Farmer trust the MartPlace</p>
			<div class="button-shipping-1">
				<button type="">Join Now</button>
			</div>
		</div>
	</div> -->
	@stop()