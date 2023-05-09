
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
                                <li class="currency"><a href="#"><i class="fa fa-dollar"></i> US Dollar <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                               <li class="language"><a href="#"><i class="zmdi zmdi-dribbble"></i> English1 <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </li>
                                <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> My account <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>

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

                                    <li class="mega_items"><a href="/shop"><i class="zmdi zmdi-shopping-basket"></i> shop </a>

                                    </li>
                                    <li><a href="blog.html"><i class="zmdi zmdi-collection-music"></i> blog </a>

                                    </li>

                                    {{-- My account --}}
                                    <li><a href="#"><i class="zmdi zmdi-star"></i> My Account <i class="zmdi zmdi-caret-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="about.html">Checkout</a></li>
                                            <li><a href="services.html">My Account</a></li>
                                            <li><a href="portfolio.html">Shopping Cart</a></li>
                                            <li><a href="faq.html">Wishlist</a></li>

                                        </ul>
                                    </li>
                                    {{-- Contact Us --}}
                                    <li><a href="/contact"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
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
                                <li class="currency"><a href="#"><i class="fa fa-dollar"></i> US Dollar <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                               <li class="language"><a href="#"><i class="zmdi zmdi-dribbble"></i> English1 <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </li>
                                <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> My account <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>

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
                                        <a href="cart.html">View cart</a>
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>
                        <div id="menu" class="text-left ">
                             <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                        <li><a href="index-8.html">Home 8</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="portfolio.html">portfolio</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
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

