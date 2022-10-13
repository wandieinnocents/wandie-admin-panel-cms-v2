<header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area dark-parimary-bg">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:info.ipim@gmail.com">info.ipim@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                       Maya - Nakirebe along Kampala - Masaka Road
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-right">
                                <ul class="topbar-right">
                                    <!-- <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a href="login.html">Login</a>/<a href="register.html">Register</a>
                                    </li> -->
                                    <li class="btn-part">
                                        <a class="apply-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSew5o5TV6xKQyVTgYFfiSwWbrwDpgs_oi_EMRpXIV_mC0HMyw/viewform">Apply Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                              <div class="logo-cat-wrap">
                                  <div class="logo-part">
                                      <a href="/">
                                          <!-- <img src="assets/frontend/images/logo-dark.png" alt=""> -->
                                          <img src="{{ asset('assets/frontend/images/pre-logo.png') }}" alt="">
                                          {{-- <h2>IPI</h2> --}}
                        
                                      </a>
                                  </div>
                              </div>
                            </div>

                            <div class="col-lg-10 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                      <div class="mobile-menu">
                                          <a class="rs-menu-toggle">
                                              <i class="fa fa-bars"></i>
                                          </a>
                                      </div>
                                      <nav class="rs-menu">
                                         <ul class="nav-menu">
                                            <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"> <a href="/">Home</a></li>
                                             <li class="menu-item-has-children">
                                                 <a href="#">School</a>
                                                 <ul class="sub-menu">
                                                    <li class="{{ Request::path() ==  'programs' ? 'active' : ''  }}"><a href="{{ url('about') }}" >About</a> </li>
                                                     <li><a href="/our_team">Staff</a> </li>
                                                     {{-- <li><a href="/our_faqs">FAQ</a> </li> --}}
                                                      <li><a href="/our_events">Events</a></li>
                                                     <li><a href="/join_volunteers/create">Volunteer</a> </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Courses</a>
                                                 <ul class="sub-menu">
                                                     <li><a href="/paramedical">International Paramedical Institute</a> </li>
                                                     <li><a href="/nursing">International School of Nursing</a> </li>
                                                     
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                <a href="#">Gallery</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/pictures">Photos</a> </li>
                                                    <li><a href="/video_gallery">Videos</a> </li>
                                                </ul>
                                            </li>

                                             <li class="menu-item-has-children">
                                                 <a href="/articles">Blog</a>
                                                 <ul class="sub-menu">
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="/contact/create">Contact</a>
                                                 <!-- <ul class="sub-menu">
                                                    <li><a href="contact.html">Contact One</a> </li>
                                                    <li><a href="contact2.html">Contact Two</a> </li>
                                                    <li><a href="contact3.html">Contact Three</a> </li>
                                                    <li><a href="contact4.html">Contact Four</a> </li>
                                                 </ul> -->
                                             </li>
                                             <li class="menu-item-has-children">
                                                <!-- <a href="#">Donate</a> -->
                                                <a class="apply-btn"  onclick="makePayment()">Payments</a>
                                                {{-- <a class="apply-btn" href="/donate/create">Payments</a> --}}
                                            </li>
                                         </ul> <!-- //.nav-menu -->
                                      </nav>                                         
                                    </div> <!-- //.main-menu -->                                
                                </div>
                            </div>

                            <!-- <div class="col-lg-2 text-right">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="icon-bar cart-inner no-border mini-cart-active">
                                            <a class="cart-icon">
                                                
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                            <div class="woocommerce-mini-cart text-left">
                                                <div class="cart-bottom-part">
                                                    <ul class="cart-icon-product-list">
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="cart.html">Law Book</a><br>
                                                                <span class="quantity">1 × $30.00</span>
                                                            </div>
                                                            <div class="product-image">
                                                                <a href="cart.html"><img src="assets/frontend/images/shop/1.jpg" alt="Product Image"></a>
                                                            </div>
                                                        </li>
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="cart.html">Spirit Level</a><br>
                                                                <span class="quantity">1 × $30.00</span>
                                                            </div>
                                                            <div class="product-image">
                                                                <a href="cart.html"><img src="assets/frontend/images/shop/2.jpg" alt="Product Image"></a>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <div class="total-price text-center">
                                                        <span class="subtotal">Subtotal:</span>
                                                        <span class="current-price">$85.00</span>
                                                    </div>

                                                    <div class="cart-btn text-center">
                                                        <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                                        <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                    </ul>
                                    <span>
                                        <a id="nav-expander" class="nav-expander style3">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </a>
                                    </span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Menu End --> 

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="/"><img src="{{ asset('assets/frontend/images/logo-dark.png') }}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('assets/frontend/images/gallery/1.jpg') }}"><img src="{{ asset('assets/frontend/images/gallery/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('assets/frontend/images/gallery/2.jpg') }}"><img src="{{ asset('assets/frontend/images/gallery/2.jpg') }}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('assets/frontend/images/gallery/3.jpg') }}"><img src="{{ asset('assets/frontend/images/gallery/3.jpg') }}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('assets/frontend/images/gallery/4.jpg') }}"><img src="{{ asset('assets/frontend/images/gallery/4.jpg') }}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('assets/frontend/images/gallery/5.jpg') }}"><img src="{{ asset('assets/frontend/images/gallery/5.jpg') }}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('assets/frontend/images/gallery/6.jpg') }}"><img src="{{ asset('assets/frontend/images/gallery/6.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="assets/frontend/images/map.jpg" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>