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
  <section class="shopping-cart spad">

    <div class="container">
      <div class="row">
        <div class="col-lg-12" id="list-cart">

         <div class="cart-table">
          <table>
            <thead>
              <tr>
                <th style="with:20%;">Image</th>
                <th class="p-name" style="with:20%;">Product Name</th>
                <th style="with:10%;">Price</th>
                <th style="with:20%;">Quantity</th>
                <th style="with:10%;">Total</th>
                <th style="with:20%;">Delete</th>
                <th style="with:20%;">Edit</th>
              </tr>
              
            </thead>
            <tbody>
              @if(Session::has("cart") != null)
              @foreach(Session::get('cart')->products as $item)
              <tr>
                <td class="cart-pic first-row"><img src="public/frontend/imgs/{{$item['productInfo']->img}}" alt=""></td>
                <td class="cart-title first-row">
                  <h5>{{$item['productInfo']->name}}</h5>
                </td>
                <td class="p-price first-row">${{$item['productInfo']->price}}</td>
                <td class="qua-col first-row">
                  <div class="quantity">
                    <div class="pro-qty">
                      <input type="text" data-id="{{$item['productInfo']->id}}" id="quanty-item-{{$item['productInfo']->id}}" value="{{$item['quanty']}}">

                    </div>
                  </div>
                </td>
                  <td class="total-price first-row">${{$item['price']}}</td>
                <td class="close-td"><i class="fas fa-times" onclick="DeleteItemShopCart({{$item['productInfo']->id}});"></i></td>
                <td class="close-td"><i class="far fa-save"   onclick="SaveItemShopCart({{$item['productInfo']->id}});"></i></td>
              </tr>

              @endforeach
              @endif
              <tr class="sua-xoa">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="close-td del-all"><button class="btn btn-danger">xóa</button></td>
                <td class="close-td edit-all"><button class="btn btn-success">cập nhập</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="row">
          <div class="col-lg-4 offset-lg-8">
            <div class="proceed-checkout">
             @if(Session::has("cart") != null)
             <ul>
              <li class="subtotal">Subtotal <span>{{Session::get('cart')->totalQuanty}}</span></li>
              <li class="cart-total">Total <span>${{Session::get('cart')->totalPrice}}</span></li>


            </ul>
            @endif
            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</section>
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
@stop()