<header class="header">

    <!-- Header Top Start -->
    <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="top-info-wrap text-right">
                        <p>Welcome to Oomato market online shopping store</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-settings">
                        <ul class="nav align-items-center">
                            <li class="language">Store locations</i>
                            </li>
                            <li class="language">Track Your Order</i>
                            </li>
                            <li class="curreny-wrap">Us Dollar <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list curreny-list">
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#"> € EURO</a></li>
                                    <li><a href="#"> VND</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Header Top End -->

    <!-- haeader Mid Start -->
    <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-5">
                    <div class="logo-area">
                        @foreach($contact as $lgo)
                        <a href=""><img src="public/frontend/imgs/{{$lgo->logo}}" alt=""></a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="search-box-wrapper">
                        <div class="search-box-inner-wrap">
                            <form class="search-box-inner">
                                <div class="search-select-box">
                                    <select class="nice-select">
                                        <optgroup label="organic food">
                                            <option value="volvo">All</option>
                                            <option value="saab">watch</option>
                                            <option value="saab">air cooler</option>
                                            <option value="saab">audio</option>
                                            <option value="saab">speakers</option>
                                            <option value="saab">amplifires</option>
                                        </optgroup>
                                        <optgroup label="Fashion">
                                            <option value="mercedes">Womens tops</option>
                                            <option value="audi">Jeans</option>
                                            <option value="audi">Shirt</option>
                                            <option value="audi">Pant</option>
                                            <option value="audi">Watch</option>
                                            <option value="audi">Handbag</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="search-field-wrap">
                                    <input type="text" class="search-field" placeholder="Search product...">

                                    <div class="search-btn">
                                        <button><i class="fas fa-search"></i> search</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="customer-wrap green-bg">
                        <div class="single-costomer-box">
                            <div class="single-costomer">
                             <div class="favourite-12">
                                <a class="hi-icon hi-icon-mobile" href="" ><i class="far fa-heart"></i><span class="favourite">1</span></a>
                                <ul class="mini-cart">
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img alt="" src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html">
                                                <h4>Product Name 01</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                            </div>
                                            <a class="remove_from_cart" href="#"><i class="fas fa-times"></i></a>
                                        </div>
                                    </li>
                                    <hr>
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img alt="" src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html">
                                                <h4>Product Name 03</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                            </div>
                                            <a class="remove_from_cart" href="#"><i class="fas fa-times"></i></i></a>
                                        </div>
                                    </li>
                                    <li class="subtotal-box">
                                        <div class="subtotal-title">
                                            <h3>Sub-Total :</h3><span>$ 260.99</span>
                                        </div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="cart.html">Add to cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-costomer-box">
                        <div class="single-costomer">
                            <div class="cart-12">
                                <a class="hi-icon hi-icon-screen" href="" ><i class="fas fa-shopping-bag"></i>
                                 @if(Session::has("cart") != null)
                                 <span id="total-quanty-show" class="cart-2">{{Session::get('cart')->totalQuanty}}</span>
                                 @else
                                 <span id="total-quanty-show" class="cart-2">0</span>
                                 @endif
                             </a>
                             <div class="cart-hover">
                                <div id="chane-item-cart">
                                    @if(Session::has("cart") != null)
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach(Session::get('cart')->products as $item)
                                                <tr>
                                                    <td class="si-pic" style="width: 30%;"><img src="public/frontend/imgs/{{$item['productInfo']->img}}" alt=""></td>
                                                    <td class="si-text" style="width: 500%;" >
                                                        <div class="product-selected">
                                                            <p>${{$item['productInfo']->price}} x {{$item['quanty']}}</p>
                                                            <h6>{{$item['productInfo']->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close" style="width: 20%;text-align: right;">
                                                        <i data-id="{{$item['productInfo']->id}}" class="fas fa-times"></i>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>${{Session::get('cart')->totalPrice}}</h5>
                                        <input hidden id="total-quanty-cart"  type="number" value="{{Session::get('cart')->totalQuanty}}" >
                                    </div>
                                    @endif
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
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
<hr>
<!-- haeader Mid End -->

<!-- haeader bottom Start -->
<menu class="haeader-bottom-area bg-gren header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block wrap-menu">
                <div class="main-menu-area1 white_text">
                    <!--  Start Mainmenu Nav-->
                    <nav id="myDIV" class="main-navigation1">
                        <ul >
                            <li ><a class="main-navigation-a1 active" href="{{route('home')}}">Home</a>
                            </li>
                            <li><a class="hover"  href="{{route('product')}}">Vegetables</a>
                                <span class="Offer-1">Offer</span>
                                <div  data-v-570539a0 class="dropdown-holder sub-menu" >
                                    <div class="row" >
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Vegetables</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Avocados</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Frozen Vegetables</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Lettuce</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Onions</p></a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-toi-1520.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Summer Vegetables</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Juice</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Frozen Vegetables</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Lettuce</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Onions</p></a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Winter Vegetables</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fruits Snacks</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Dried Mixed Fruit</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Dried Lettuce</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh & Nut Gifts</p></a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-toi-1520.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5> Fresh Vegetables</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Gala Apples</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Berries</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Pineapples</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Shackes</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="hover" href="">Fruits</a>
                                <div data-v-570539a0 class=" dropdown-holder sub-menu" >
                                    <div class="row" >
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Fruits</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Avocados</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Lettuce</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Onions</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Summer Fruits</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Juice</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Frozen Vegetables</p> </a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Lettuce</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Onions</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Winter Fruits</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fruits Snacks</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Dried Mixed Fruit</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Dried Snacks</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh & Nut Gifts</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 dropdown-content">
                                            <ul>
                                                <li>
                                                    <img src="{{('public/frontend/imgs/hinh-anh-cu-ca-rot-2362.jpg')}}" alt="" >
                                                </li>
                                                <li>
                                                    <a href=""><h5>Fresh Vegetables</h5></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Fresh Gala Apples</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Berries</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Pineapples</p></a>
                                                </li>
                                                <li>
                                                    <a href=""><p>Snacks</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="hover"  href="#">Meats</a>
                            </li>
                            <li>
                                <a class="hover"  href="#">Drled Foods</a>
                                <span class="Hot-1">Hot</span>
                            </li>
                            <li >
                                <a class="hover"  href="#">Juices</a>
                                <span class="New-1">New</span>
                            </li>
                            <li >
                                <a class="hover" href="{{route('about')}}">pages</a>
                            </li>
                            <li >
                                <a class="hover"  href="{{route('blog')}}">Blog</a>
                            </li>
                            <li>
                                <a class="hover" href="{{route('contact_us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-costomer1">
                 @if(Auth::guard('userlogin')->check())
                 <button><i class="fas fa-user"></i><a href="">{{Auth::guard('userlogin')->user()->name}}</a></button>
                 <span><a href="{{route('logout')}}">1</a></span>
                 @else
                 <a href="{{route('singin')}}"><button class="btn dn-dk" >Login/Sign Up</button></a>
                 @endif

             </div>
         </div>


         <div class="col-6 col-md-5 d-block d-lg-none">
            <div class="logo"><a href="index.html"><img src="{{('public/frontend/imgs/logo.png')}}" alt=""></a></div>
        </div>


        <div class=" col-md-7 col-6 d-block d-lg-none">
            <div class="customer-wrap green-bg">

                <div class="single-costomer-box1">
                    <div class="single-costomer">
                        <p><a class="hi-icon hi-icon-screen" href="" ><i class="fas fa-shopping-bag"></i></a></p>
                    </div>
                </div>

                <div class="mobile-menu-btn d-block d-lg-none show-menu">
                    <div class="off-canvas-btn">
                        <a href="#"><img src="{{('public/frontend/imgs/bg-menu.png')}}" alt=""></a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</menu>
<!-- haeader bottom End -->


<!-- off-canvas menu start -->
<aside class="off-canvas-wrapper">
    <div class="off-canvas-inner-content">
        <div class="btn-close-off-canvas">
            <i class="fas fa-times"></i>
        </div>

        <div class="off-canvas-inner">

            <div class="search-box-offcanvas">
                <form>
                    <input type="text" placeholder="Search product...">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <!-- mobile menu start -->
            <div class="mobile-navigation">

                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="menu-item-has-children"><a href="">Vegetables</a>
                            <ul class="megamenu1 dropdown">
                                <li class="mega-title has-children"><a href="">Vegetables</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fresh Avocados</a>
                                        </li>
                                        <li>
                                            <a href="">Frozen Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Lettuce</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Onions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-title has-children"><a href="#">Summer Vegetables</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fresh Juic></a>
                                        </li>
                                        <li>
                                            <a href="">Frozen Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Lettuce</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Onions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-title has-children"><a href="#">Winter Vegetables</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fruits Snacks</a>
                                        </li>
                                        <li>
                                            <a href="">Dried Mixed Fruit</a>
                                        </li>
                                        <li>
                                            <a href="">Dried Lettuce</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh & Nut Gifts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-title has-children"><a href="#">Fresh Vegetables</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fresh Gala Apples</a>
                                        </li>
                                        <li>
                                            <a href="">Berries</a>
                                        </li>
                                        <li>
                                            <a href="">Pineapples</a>
                                        </li>
                                        <li>
                                            <a href="">Shackes</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Fruits</a>
                            <ul class="megamenu dropdown">
                                <li class="mega-title has-children"><a href="">Fruits</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fresh Avocados</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Lettuce</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Onions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-title has-children"><a href="#">Summer Vegetables</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fresh Juice</a>
                                        </li>
                                        <li>
                                            <a href="">Frozen Vegetables </a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Lettuce</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh Onions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-title has-children"><a href="#">Winter Fruits</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fruits Snacks</a>
                                        </li>
                                        <li>
                                            <a href="">Dried Mixed Fruit</a>
                                        </li>
                                        <li>
                                            <a href="">Dried Snacks</a>
                                        </li>
                                        <li>
                                            <a href="">Fresh & Nut Gifts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-title has-children"><a href="#">Fresh Vegetables</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Fresh Gala Apples</a>
                                        </li>
                                        <li>
                                            <a href="">Berries</a>
                                        </li>
                                        <li>
                                            <a href="">Pineapples</a>
                                        </li>
                                        <li>
                                            <a href="">Snacks</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a  href="#">Meats</a>

                        </li>
                        <li>
                            <a  href="#">Drled Foods</a>

                        </li>
                        <li >
                            <a  href="#">Juices</a>

                        </li>
                        <li >
                            <a href="#">pages</a>
                        </li>
                        <li >
                            <a  href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->


            <div class="header-top-settings offcanvas-curreny-lang-support">
                <h5>My Account</h5>
                <ul class="nav align-items-center">
                    <li class="curreny-wrap">Us Dollar <i class="fa fa-angle-down"></i>
                        <ul class="dropdown-list curreny-list">
                            <li><a href="#">$ USD</a></li>
                            <li><a href="#"> € EURO</a></li>
                            <li><a href="#"> VND</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- offcanvas widget area start -->
            <div class="single-costomer-box2">
                <div class="single-costomer2">
                    <button class="btn dn-dk" >Login/Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</aside>
</header>