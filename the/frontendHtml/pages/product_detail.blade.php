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
  <div class="wap">


    <div class="detail">
     <div class="container">
       <div class="product-essential">
        <form action="#" method="post" id="product_addtocart_form">
          <div class="row">
            <div class="col-lg-6">
              <div class="product-detail">
                <div class="row">
                 <div class="col-lg-3 col-sm-3 col-3">
                  <div class="product-detail--small-img">
                   <img src="imgs/product-1.jpg" onclick="myFunction(this)">
                   <img src="imgs/product-1.jpg"onclick="myFunction(this)">
                   <img src="imgs/vegetables-1584999_1920.jpg"onclick="myFunction(this)">
                   <img src="imgs/product-1.jpg"onclick="myFunction(this)">
                 </div>
               </div>
               
               <div class="col-lg-9 col-sm-9 col-sm-9 col-9">
                <div class="img-contailner">
                  <img id="imagebox" src="imgs/product-1.jpg">
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="product-shop col-lg-6 col-sm-7 col-xs-12">

          <div class="product-name">
            <h1>Nectarine </h1>
          </div>
          <div class="ratings">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="shop-dg">5.0</span>
            <span>32 Review</span>
          </div>
          <p class="available">
            Availability: 
            <span class=" light-red">
              In Stock
            </span>
          </p>
          <p class="post-name">

            Marking a new standard in high-resolution digital SLR photography, the Canon EOS 5DS camera shatters the status quo with a new 50.6 Megapixel, full-frame CMOS sensor. Perfect for commercial and fine art photography, or any other application that calls for extremely high-resolution, the EOS 5DS is the ultimate combination of EOS performance and ultra-high megapixel capture
          </p>
          <div class="quantity">
            <div class="pro-qty">
              <input type="text" value="1">
            </div>
          </div>
          <a href="{{route('shopping_cart')}}"><button class="btn add-cart">ADD TO CART<i class="fas fa-plus text-center"></i></button></a>
          <div class="tage">
            <span>Tags</span>
            
            <button>Template</button>
            <button>Fresh</button>
            <button>Capsicum</button>
            
          </div>
        </div>
      </div>
    </form>

  </div>

  <div id="ative"class="w3-container">

    <div class="w3-bar">
      <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">London</button>
      <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Paris</button>
    </div>
    <div id="London" class="w3-container w3-border city">
     <h4>Product Description</h4>
     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt .cillum dolore eu fugiat nulla pariatu. Excepteur sint occaecat cupidatat non proident, sunt in culpa.sint occaecat cupidatat non proident, sunt in culpa.Duis aute irur
     e dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt .cillum dolore eu fugiat nulla pariatu.  </p>
     <h4>features</h4>
     <div class="Feat">

      <p><img src="imgs/tich.png">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <p><img src="imgs/tich.png">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <p><img src="imgs/tich.png">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <p><img src="imgs/tich.png">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>

  <div id="Paris" class="w3-container w3-border city" style="display:none">
    <div class="woocommerce-Reviews">
      <h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
      <ol class="commentlist">
        <li class="comment">
          <div>
            <img alt="" src="imgs/tải xuống.jpg" class="avatar avatar-60 photo">
            <div class="comment-text">
              <img src="imgs/danhgia.png">
              <p class="meta">
                <strong>John Doe</strong> 
                <span>–</span> April 19, 2018
              </p>
              <div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
              </div>
            </div>
          </div>
        </li><!-- #comment-## -->
        <li class="comment">
          <div>
            <img alt="" src="imgs/tải xuống.jpg" class="avatar avatar-60 photo">
            <div class="comment-text">
              <img src="imgs/danhgia.png">

              <p class="meta">
                <strong>Stephen Smith</strong> <span>–</span> June 02, 2018
              </p>
              <div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
        </li><!-- #comment-## -->
      </ol>
    </div>

    <div class="comment-respond">
      <span class="comment-reply-title">Add a review </span>      
      <form action="#" method="post" class="comment-form" novalidate="">
        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>

        <p class="comment-form-comment">
          <label>Your review <span class="required">*</span></label>
          <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
        </p>
        <p class="comment-form-author">
          <label for="author">Name <span class="required">*</span></label> 
          <input id="author" name="author" type="text" value="" size="30" required=""></p>
          <p class="comment-form-email">
            <label for="email">Email <span class="required">*</span></label> 
            <input id="email" name="email" type="email" value="" size="30" required=""></p>
            <p class="form-submit">
              <input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
            </p>
          </form>
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
                        <div class="owl-carousel owl-theme owl-sale">
                            
                            <div class="item-product">
                                <div class="img-product">
                                    <i class="far fa-heart"></i>
                                    <a href="">
                                        <img src="" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="des-product">
                                    <h3><a href=""></a></h3>
                                    <p>FRESH FRUIT</p>
                                    <span class="sale-price"></span>
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

  <div class="background">
    <div class="background-img" style="background-image: url({{('public/frontend/imgs/qqqqqqqqqqqqqqqqqqq.jpg')}});">
    </div>
    <div class="container background-1 button-about">
      <h3 class="color-img aaa">Join our Fvent & make help us to Farmer</h3>
      <p class="color-img ">over 25,0000 User and Farmer trust the MartPlace</p>
      <div class="sup-button-about">
        <button type="" class="sup-button-about-1">Join Now</button>
      </div>
    </div>
  </div>
<script>
 function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
};
function myFunction(smallImg){
  var fullImg = document.getElementById("imagebox");
  fullImg.src = smallImg.src;
}
</script>
@stop()