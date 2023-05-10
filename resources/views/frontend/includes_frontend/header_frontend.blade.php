
    <!--header area start-->
    <header class="header_area">
        <!--header top start-->
        <div class="header_top header_top_six">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                       <div class="welcome_text">
                           <p>Welcome to <span>Electronics Store</span> </p>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="top_right text-right">
                            <ul>
                                {{-- <li class="currency"><a href="#"><i class="fa fa-dollar"></i> US Dollar <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li> --}}
                               {{-- <li class="language"><a href="#"><i class="zmdi zmdi-dribbble"></i> English1 <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </li> --}}

                                {{-- Authenticated User or not --}}

                                 <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i>  {{ Auth::user()->name }} <i class="zmdi zmdi-caret-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="/checkout">Profile</a></li>
                                                <li><a href="/myaccount"> Orders</a></li>
                                                <li><a href="/cart"> Wishlist</a></li>
                                                <li><a href="/wishlist"> Cart</a></li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </li>

                                    @endguest



                                {{-- End authenticated User --}}



                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header top start-->


        <!--header center area start-->
        <div class="header_middle header_middle_six">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/frontend/img/logo/logo-3.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header_middle_inner">
                            <div class="search-container">
                               <form action="#">
                                   <div class="hover_category">
                                        <select class="select_option" name="select" id="categori">
                                            <option selected value="1">All Categories</option>
                                            <option value="2">Accessories</option>
                                            <option value="3">Accessories & More</option>
                                            <option value="4">Butters & Eggs</option>
                                            <option value="5">Camera & Video </option>
                                            <option value="6">Mornitors</option>
                                            <option value="7">Tablets</option>
                                            <option value="8">Laptops</option>
                                            <option value="9">Handbags</option>
                                            <option value="10">Headphone & Speaker</option>
                                            <option value="11">Herbs & botanicals</option>
                                            <option value="12">Vegetables</option>
                                            <option value="13">Shop</option>
                                            <option value="14">Laptops & Desktops</option>
                                            <option value="15">Watchs</option>
                                            <option value="16">Electronic</option>
                                        </select>
                                   </div>
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                                <!--mini cart-->
                                 <div class="mini_cart mini_cart_six">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{ asset('assets/frontend/img/s-product/product.jpg') }}" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Condimentum Watches</a>

                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$60.00</span>

                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{ asset('assets/frontend/img/s-product/product2.jpg') }}" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Officiis debitis</a>
                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$69.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header center area end-->



        <!--header middel start-->
        <div class="header_bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="main_menu header_position menu_six">
                            <nav>
                                <ul>

                                    <li class="active"><a  href="/"><i class="zmdi zmdi-home"></i> home </a>
                                    </li>
                                    <li><a href="/about"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                                    <li><a href="/about"><i class="zmdi zmdi-comments"></i>  Categories</a></li>
                                    <li><a href="/about"><i class="zmdi zmdi-comments"></i> Featured</a></li>


                                    <li class="mega_items"><a href="/shop"><i class="zmdi zmdi-shopping-basket"></i> shop </a>

                                    </li>


                                    {{-- Contact Us --}}
                                    <li><a href="/contact/create"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
                                    <li class="mega_items"><a href="/cart"><i class="zmdi zmdi-shopping-basket"></i> Cart (0) </a></li>
                                    <li class="mega_items"><a href="/wishlist"><i class="zmdi zmdi-shopping-basket"></i> Wishlist (0) </a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

    </header>
    <!--header area end-->

    <!--Offcanvas menu area start-->

    <div class="off_canvars_overlay">

    </div>

    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="welcome_text">
                           <p>Welcome to <span>Electronics Store</span> </p>
                       </div>

                        <div class="top_right">
                            <ul>
                                {{-- <li class="currency"><a href="#"><i class="fa fa-dollar"></i> US Dollar <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li> --}}
                               {{-- <li class="language"><a href="#"><i class="zmdi zmdi-dribbble"></i> English1 <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </li> --}}

                                {{-- Authenticated User or not --}}

                                 <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i>  {{ Auth::user()->name }} <i class="zmdi zmdi-caret-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="/checkout">Profile</a></li>
                                                <li><a href="/myaccount"> Orders</a></li>
                                                <li><a href="/cart"> Wishlist</a></li>
                                                <li><a href="/wishlist"> Cart</a></li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </li>

                                    @endguest



                                {{-- End authenticated User --}}


                            </ul>
                        </div>
                        <div class="search-container">
                           <form action="#">
                               <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                            <!--mini cart-->
                             <div class="mini_cart">
                                <div class="cart_item">
                                   <div class="cart_img">
                                       <a href="#"><img src="{{ asset('assets/frontend/img/s-product/product.jpg') }}" alt=""></a>
                                   </div>
                                    <div class="cart_info">
                                        <a href="#">Condimentum Watches</a>

                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$60.00</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                   <div class="cart_img">
                                       <a href="#"><img src="{{ asset('assets/frontend/img/s-product/product2.jpg') }}" alt=""></a>
                                   </div>
                                    <div class="cart_info">
                                        <a href="#">Officiis debitis</a>
                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$69.00</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>Subtotal:</span>
                                        <span class="price">$138.00</span>
                                    </div>
                                </div>

                                <div class="mini_cart_footer">
                                   <div class="cart_button">
                                        <a href="/cart">View cart</a>
                                        <a href="/checkout">Checkout</a>
                                    </div>
                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>



                        <div id="menu" class="text-left ">
                             <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="/">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop">Shop</a>

                                </li>


                                <li class="menu-item-has-children">
                                    <a href="/myaccount">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/about">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/contact/create"> Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@wanraninc.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Offcanvas menu area end-->

