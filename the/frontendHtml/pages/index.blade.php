@extends('frontend.main')
@section('content')
<div class="slider_area">
    <div class="slider_active owl-carousel">
     @foreach($banner as $bn)
     <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image: url(public/frontend/imgs/{{$bn->image}}); height: 599px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-9">
                    <div class="slider_text">
                        <p>Welcome to Oomato market</p>
                        <h3>Always best Fruits For everyone</h3>
                        <p>Anytime - Anywhere</p>
                        <a href="#" class="boxed-btn3"><button>Show now</button></a>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    @endforeach
</div>

</div>
<!-- ==========end bander======== -->
<main>
    <div class="fruit">

        <div class="container fruit-1">
            <div class="row slide">
                <div class="col-lg-2 col-md-12 slide-inner">
                    <div class="inner rotate"> Organic Fruit</div>
                </div>
                <div class="col-lg-10 col-md-12 slide-area">
                    <div class="sale-product container">
                        <div class="owl-carousel owl-theme owl-sale">
                            @foreach($product_new as $pro)
                            <div class="item-product">
                                <div class="img-product">
                                    <i class="far fa-heart"></i>
                                    <a href="">
                                        <img src="public/frontend/imgs/{{$pro->img}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="des-product">
                                    <h3><a href="">{{$pro->name}}</a></h3>
                                    <p>FRESH FRUIT</p>
                                    <span class="sale-price">${{$pro->price}}</span>
                                </div>
                                <div class="cart">
                                    <a onclick="AddCart({{$pro->id}})" href="javascript:"><button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="get-offer">
        <div class="container get-off-2">
            <div class="row get">
                <div class="col-lg-2 col-md-12  col-sm-12 col-xs-12 get-offer-rotate">
                    <div class="get-offer-inner rotate"> Get Offer Organic Fruit
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 get-offer-1">
                    <div class="get-offer-contain container">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 get-img ">
                                <?php $i=0; ?>
                                @foreach($banner_2 as $banner)
                                @if($i==0)
                                <div class="get-img-1" style="background-image: url(public/frontend/imgs/{{$banner->image}});">


                                    <div class="container get-1">
                                        <h3>fresh</h3>
                                        <p>Summer sale</p>
                                    </div>
                                    <div class="container get-2">
                                        <h2>40%</h2>
                                        <img src="{{('public/frontend/imgs/02_Home.png')}}" alt="">
                                        <span>OFF</span>
                                    </div>
                                </div>
                                @endif
                                <?php $i++ ?>
                                @endforeach
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 get-offer-item">
                                <div class="row">
                                    @foreach($product as $all)
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  get-item">
                                        <div class="pro1">
                                            <div class="img-pro">
                                                <img src="public/frontend/imgs/{{$all->img}}" alt="">
                                            </div>
                                            <div class="icon-love">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="text-pro">
                                                <a href=""><h4>Tomato</h4></a>
                                                <p>JUICES</p>
                                                <strong>$12</strong>
                                            </div>
                                            <div class="cart">
                                                <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <?php $i=0; ?>
                                       @foreach($banner_2 as $banner)
                                       @if($i==1)
                                       <div class="pre-order" style="background-image: url(public/frontend/imgs/{{$banner->image}});height: 250px;">

                                        <div class="container adc">
                                            <h2>PRE-ORDER</h2>
                                            <p>
                                                <span class="agb">50%</span>&nbsp;<span class="acg">OFF</span>
                                            </p>
                                            <P class="asd">FIRST ORDER</P>
                                        </div>
                                    </div>
                                    @endif
                                    <?php $i++ ?>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fruit">

    <div class="container fruit-1">
        <div class="row slide">
            <div class="col-lg-2 col-md-12 slide-inner">
                <div class="inner rotate"> Organic Fruit</div>
            </div>
            <div class="col-lg-10 col-md-12 slide-area">
                <div class="sale-product container">
                    <div class="list-products">
                        <div class="owl-carousel owl-theme owl-sale">
                          @foreach($product_nb as $nb)
                          <div class="item-product">
                            <div class="img-product">
                                <i class="far fa-heart"></i>
                                <a href="">
                                    <img src="public/frontend/imgs/{{$nb->img}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="des-product">
                                <h3><a href="">{{$nb->name}}</a></h3>
                                <p>FRESH FRUIT</p>
                                <span class="sale-price">${{$nb->price}}</span>
                            </div>                                        <div class="cart">
                                <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="only">
    <div class="only-contain container">
        <div class="row">
            <div class="col-lg-12 only-1">
                @foreach($banner_3 as $banner)
                <div class="only-sale" style="background-image: url(public/frontend/imgs/{{$banner->image}});">

                    <div class="container only-2">
                        <h2>Only this Spring !The Sale 50% </h2>
                        <h4>Awesome total sale 50%</h4>
                        <p>Off for all consmetics kaline only</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="fruit">

    <div class="container fruit-1">
        <div class="row slide">
            <div class="col-lg-2 col-md-12 slide-inner">
                <div class="inner-offer rotate"> On Offer</div>
            </div>
            <div class="col-lg-10 col-md-12 slide-area">
                <div class="sale-product container">
                    <div class="list-products">
                        <div class="owl-carousel owl-theme owl-sale">
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
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
<div class="fruit-fresh">

    <div class="container fruit-1">
        <div class="row slide">
            <div class="col-lg-2 col-md-12 slide-inner">
                <div class="inner-offer rotate rotate_1"> On Offer</div>
            </div>
            <div class="col-lg-10 col-md-12 slide-area">
                <div class="sale-product container">
                    <div class="list-products">
                        <div class="owl-carousel owl-theme owl-sale">
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-product">
                                    <div>
                                        <div class="img-product">
                                            <i class="far fa-heart"></i>
                                            <a href="">
                                                <img src="{{('public/frontend/imgs/product-1.jpg')}}" class="img-fluid" alt="">
                                            </a>

                                        </div>

                                        <div class="des-product">
                                            <h3><a href="">BELL PEPPER</a></h3>
                                            <p>FRESH FRUIT</p>
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button>
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
<div class="about-5">
    <div class="container ab-4">
     <div class="row binh_luan">
        <div class="col-lg-2 binh-luan-1">
            <div class="binh-luan-inner rotate">
             <h3>Testimoinals</h3>
         </div>
     </div>
     <div class="col-lg-10 binh-luan-2">
        <div class="container binhluan">
            <div class="row a12">
                <div class="col-lg-4 Jany_Andrawa ">
                 <div class="about_content-1">
                    <div class="row binh-luan-a">
                        <div class="col-md-6 sup-content-1">Jany Andrawa</div>
                            <!-- <div class="col-md-6 danh-gia-aaa">
                                <div class="stars">
                                    <form action="">
                                        <input class="star star-5" id="star-5" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1"></label>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                        <p>There are many variations of passages of Lorem Ip sum available, but the majority have suffered alte ration in Some form have lorem.There are many variations of passages of.</p>
                    </div>
                    <div class="triangle">
                     <div class="triangle-topleft"></div>
                 </div>
                 <img src="" alt="">
             </div>
             <div class="col-lg-4 Jany_Andrawa">
                 <div class="about_content-1">
                     <div class="row binh-luan-a">
                         <div class="col-md-6 sup-content-1">Jany Andrawa</div>
                         <!-- <div class="col-md-6 danh-gia-aaa">
                             <div class="stars">
                                 <form action="">
                                     <input class="star star-5" id="star-5-5" type="radio" name="star"/>
                                     <label class="star star-5" for="star-5-5"></label>
                                     <input class="star star-4" id="star-4-4" type="radio" name="star"/>
                                     <label class="star star-4" for="star-4-4"></label>
                                     <input class="star star-3" id="star-3-3" type="radio" name="star"/>
                                     <label class="star star-3" for="star-3-3"></label>
                                     <input class="star star-2" id="star-2-2" type="radio" name="star"/>
                                     <label class="star star-2" for="star-2-2"></label>
                                     <input class="star star-1" id="star-1-1" type="radio" name="star"/>
                                     <label class="star star-1" for="star-1-1"></label>
                                 </form>
                             </div>
                         </div> -->
                     </div>
                     <p>There are many variations of passages of Lorem Ip sum available, but the majority have suffered alte ration in Some form have lorem.There are many variations of passages of.</p>
                 </div>
                 <div class="triangle">
                     <div class="triangle-topleft"></div>
                 </div>
                 <img src="" alt="">
             </div>
             <div class="col-lg-4 Jany_Andrawa">
                 <div class="about_content-1">
                     <div class="row binh-luan-a">
                         <div class="col-md-6 sup-content-1">Jany Andrawa</div>
                         <!-- <div class="col-md-6 danh-gia-aaa">
                             <div class="stars">
                                 <form action="">
                                     <input class="star star-5" id="star-5-6" type="radio" name="star"/>
                                     <label class="star star-5" for="star-5-6"></label>
                                     <input class="star star-4" id="star-4-5" type="radio" name="star"/>
                                     <label class="star star-4" for="star-4-5"></label>
                                     <input class="star star-3" id="star-3-4" type="radio" name="star"/>
                                     <label class="star star-3" for="star-3-4"></label>
                                     <input class="star star-2" id="star-2-3" type="radio" name="star"/>
                                     <label class="star star-2" for="star-2-3"></label>
                                     <input class="star star-1" id="star-1-2" type="radio" name="star"/>
                                     <label class="star star-1" for="star-1-2"></label>
                                 </form>
                             </div>
                         </div> -->
                     </div>
                     <p>There are many variations of passages of Lorem Ip sum available, but the majority have suffered alte ration in Some form have lorem.There are many variations of passages of.</p>
                 </div>
                 <div class="triangle">
                     <div class="triangle-topleft"></div>
                 </div>
                 <img src="" alt="">
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</div>
<div class="blog-home">
    <div class="container blog-12"> 
        <div class="row blog-12345">
            <div class="col-lg-2 blog-123">
                <div class="blog-123-inner rotate">

                    <h2>Latest Blog Post</h2>   
                </div>
            </div>
            <div class="col-lg-10 blog-124">
                <div class="container blog-1234">
                    <div class="row a12">
                        <div class="col-lg-4 col-sm-4 a123">
                            <div class="img-total-bolg blog-a">
                                <img class="img-blog img-fluid" src="{{('public/frontend/imgs/blog-1.jpg')}}" alt="">
                                <div class="txt">
                                    <p class="Blog-1">27 March 2018</p>
                                    <h4 class="Blog">Personalized and targetes conversations</h4>
                                    <p class="Blog-1 Post">
                                        <a href="" title="">Read more <i class="fas fa-arrow-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 a123">
                            <div class="img-total-bolg blog-a">
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
                        <div class="col-lg-4 col-sm-4 a123">
                            <div class="img-total-bolg blog-a">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@stop()