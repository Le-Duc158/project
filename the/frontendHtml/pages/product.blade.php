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
<div class="wrap-1">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-9 col-md-6 col-sm-12 product-de-1">
          <div class="Simplesearch">
            <input type="text" id="input" placeholder="Search your products">
            <button id="button">Search</button>
          </div>
          <div class="row product">
            <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12  get-item">
              <div class="pro1">
                <div class="img-pro">
                  <img src="{{('public/frontend/imgs/04.jpg')}}" alt="">
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
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 sirbar-1 ">

          <div class="sirbar" >
            <div class="category">
              <h4>Categories</h4>


              <ul class="menu-cate">
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI">TIME EDITION <span>21</span></a>
                </li>
              </ul>

            </div>
          </div>
          <div class="sirbar1">
            <div class="filter">
              <h4>Felter</h4>

              <ul class="menu-filter">
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMETIME EDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
                <li><a href="" title="ẤN BẢN THỜI ĐẠI"><i class="far fa-square"></i>TIMEEDITION <span>21</span></a></li>
              </ul>
            </div>
          </div>
          <div class="shop-sidebar shop-sidebar-12 mb-30">
            <h4 class="title">Price</h4>
            <!-- filter-price-content start -->
            <div class="filter-price-content">
              <form action="#" method="post">
                <div id="price-slider" class="price-slider"></div>
                <div class="filter-price-wapper">
                  <div class="filter-price-cont">
                    <div class="input-type1">
                      <input type="text" id="min-price" readonly="" />
                    </div>
                    <div class="input-type2">
                      <input type="text" id="max-price" readonly="" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- filter-price-content end -->
          </div>
          <div class="sirbar3" style="background-image: url({{('public/frontend/imgs/rau1.jpg')}};">

            <div class="shop-sidebar mb-30">
              <a href="" style="text-decoration: none;color: #4fc308;">
                <h3>Awesome total sale-50%</h3>
              </a>
              <p style="color: #fff;">Off for all cosmetics kaline form only $25!</p>
              <!-- filter-price-content end -->
              <button class="show-now-2">Shop now</button>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br>


  </div>
</div>
<div class="background">
    <div class="background-img" style="background-image: url({{('public/frontend/imgs/qqqqqqqqqqqqqqqqqqq.jpg')}};">
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