@extends('frontend.layouts_frontend.master')

@section('title')
    Home
@endsection

@section('content')

    <!--slider area start-->
    <section class="slider_section mb-50 mt-30">
        <div class="container">
            <div class="row">

                {{-- Start of categories --}}
                <div class="col-lg-3">

                        <div class="categories_menu categorie_six">
                             <div class="categories_title">
                                 <h2 class="categori_toggle">Categories</h2>
                             </div>
                             <div class="categories_menu_toggle">
                                 <ul>
                                     <li class="menu_item_children categorie_list"><a href="#"><span><i class="zmdi zmdi-desktop-mac"></i></span> Electronic <i class="fa fa-angle-right"></i></a>
                                         <ul class="categories_mega_menu">
                                             <li class="menu_item_children"><a href="#">Wheel Bearings</a>
                                                 <ul class="categorie_sub_menu">
                                                     <li><a href="#">Bower</a></li>
                                                     <li><a href="#">Flipbac</a></li>
                                                     <li><a href="#">Gary Fong</a></li>
                                                     <li><a href="#">GigaPan</a></li>
                                                 </ul>
                                             </li>
                                             <li class="menu_item_children"><a href="#">Wheel Rim Screws</a>
                                                 <ul class="categorie_sub_menu">
                                                     <li><a href="#">Accessories</a></li>
                                                     <li><a href="#">2-Stroke</a></li>
                                                     <li><a href="#">Handbag</a></li>
                                                     <li><a href="#">Clothing</a></li>
                                                 </ul>
                                             </li>
                                             <li class="menu_item_children last_child"><a href="#">Wheel Simulators</a>
                                                     <ul class="categorie_sub_menu">
                                                         <li><a href="#">Bags & Cases</a></li>
                                                         <li><a href="#">Binoculars & Scopes</a></li>
                                                         <li><a href="#">Film Photography</a></li>
                                                         <li><a href="#">Lighting & Studio</a></li>
                                                     </ul>
                                             </li>

                                         </ul>
                                     </li>
                                     <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-image"></i></span>  Fashion & Beauty <i class="fa fa-angle-right"></i></a>
                                         <ul class="categories_mega_menu column_3">
                                             <li class="menu_item_children"><a href="#">Chair</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Dining room</a></li>
                                                         <li><a href="#">bedroom</a></li>
                                                         <li><a href="#"> Home & Office</a></li>
                                                         <li><a href="#">living room</a></li>
                                                     </ul>
                                                 </div>
                                             </li>
                                             <li class="menu_item_children"><a href="#">Lighting</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Ceiling Lighting</a></li>
                                                         <li><a href="#">Wall Lighting</a></li>
                                                         <li><a href="#">Outdoor Lighting</a></li>
                                                         <li><a href="#">Smart Lighting</a></li>
                                                     </ul>
                                                 </div>
                                             </li>
                                             <li class="menu_item_children"><a href="#">Sofa</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Fabric Sofas</a></li>
                                                         <li><a href="#">Leather Sofas</a></li>
                                                         <li><a href="#">Corner Sofas</a></li>
                                                         <li><a href="#">Sofa Beds</a></li>
                                                     </ul>
                                                 </div>
                                             </li>
                                         </ul>
                                     </li>
                                     <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-camera"></i></span> Camera & Photo <i class="fa fa-angle-right"></i></a>
                                         <ul class="categories_mega_menu column_2">
                                             <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Driveshafts</a></li>
                                                         <li><a href="#">Spools</a></li>
                                                         <li><a href="#">Diesel </a></li>
                                                         <li><a href="#">Gasoline</a></li>
                                                     </ul>
                                                 </div>
                                             </li>
                                             <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Dolls for Girls</a></li>
                                                         <li><a href="#">Girls' Learning Toys</a></li>
                                                         <li><a href="#">Arts and Crafts for Girls</a></li>
                                                         <li><a href="#">Video Games for Girls</a></li>
                                                     </ul>
                                                 </div>
                                             </li>

                                         </ul>
                                     </li>
                                     <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-dribbble"></i></span> Sport & Outdoor <i class="fa fa-angle-right"></i></a>
                                         <ul class="categories_mega_menu column_2">
                                             <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Building</a></li>
                                                         <li><a href="#">Electronics</a></li>
                                                         <li><a href="#">action figures </a></li>
                                                         <li><a href="#">specialty & boutique toy</a></li>
                                                     </ul>
                                                 </div>
                                             </li>
                                             <li class="menu_item_children"><a href="#">Calculators</a>
                                                 <div class="categorie_sub_menu">
                                                     <ul>
                                                         <li><a href="#">Dolls for Girls</a></li>
                                                         <li><a href="#">Girls' Learning Toys</a></li>
                                                         <li><a href="#">Arts and Crafts for Girls</a></li>
                                                         <li><a href="#">Video Games for Girls</a></li>
                                                     </ul>
                                                 </div>
                                             </li>

                                         </ul>
                                     </li>
                                     <li><a href="#"><span><i class="zmdi zmdi-tv"></i></span> TV & Audio</a></li>
                                     <li><a href="#"><span><i class="zmdi zmdi-tv-list"></i></span> home funiture</a></li>
                                     <li><a href="#"><span><i class="zmdi zmdi-cake"></i></span> toys for kids</a></li>
                                     <li><a href="#"><span><i class="zmdi zmdi-memory"></i></span> Memory Cards</a></li>
                                     <li><a href="#"><span><i class="zmdi zmdi-case-download"></i></span> Living Room</a></li>
                                     <li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>
                                     <li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>
                                     <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                                 </ul>
                             </div>
                         </div>


                </div>
                {{-- End of categories --}}

                {{-- Start of slider --}}
                <div class="col-lg-6 col-md-12 ">
                    <div class="slider_area slider_six owl-carousel">
                        <div class="single_slider" data-bgimg="assets/frontend/img/slider/slider11.jpg">
                            <div class="slider_content slider_content_six content_position_left">
                                <h1>  <span>products </span> Gear VR</h1>
                                <span>Virtual reality though </span>
                                <h2><span>From </span> $99 <span>00 </span></h2>
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="assets/frontend/img/slider/slider12.jpg">
                            <div class="slider_content slider_content_six content_position_center">
                                <h1>  <span>products </span> Gear VR</h1>
                                <span>Virtual reality though </span>
                                <h2><span>From </span> $99 <span>00 </span></h2>
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of slider --}}

                {{-- Start of ads --}}
                <div class="col-lg-3">
                    <div class="sidebar_banner_six">
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/bg/banner18.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/bg/banner19.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of ads --}}
            </div>
        </div>

    </section>
    <!--slider area end-->



      <!--new product area start-->
    <section class="new_product_area mb-50">
        <div class="container">
            <div class="new_product_three_container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="section_title section_title_two">
                            <h2>New Products</h2>
                        </div>
                        <div class="product_carousel product_column3 owl-carousel">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/frontend/img/product/product26.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/frontend/img/product/product27.jpg" alt=""></a>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/frontend/img/product/product28.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/frontend/img/product/product26.jpg" alt=""></a>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Epicuri per</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/frontend/img/product/product27.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Itaque earum</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="deals_sidebar_product">
                            <div class="section_title section_title_two">
                                <h2>Hot deals</h2>
                            </div>
                            <div class="deals_product_column1 owl-carousel">
                                <div class="deals_product_list">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product1.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Impulse Duffle</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="product_timing_six">
                                            <div data-countdown="2030/12/15"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals_product_list">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Impulse Duffle</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="product_timing_six">
                                            <div data-countdown="2030/12/15"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals_product_list">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Impulse Duffle</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="product_timing_six">
                                            <div data-countdown="2030/12/15"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--new product area end-->

    <!--banner area start-->
    <div class="banner_area banner_column2 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/frontend/img/bg/banner20.jpg" alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/frontend/img/bg/banner21.jpg" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--home section five start-->
    <section class="home_section_five">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="home_section_sidebar_six">
                        <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Computers  Accessories</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product4.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product6.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->


                    </div>



                </div>



                <div class="col-lg-3 col-md-12">
                   <div class="home_section_left_sidebar">
                        <!--small product area start-->
                        <div class="small_product_area mb-50">
                            <div class="section_title section_title_two">
                                <h2>BEST SELLERS</h2>
                            </div>
                            <div class="small_product_wrapper small_product_six">
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product3.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam lobortis</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Donec eu libero</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product5.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Auctor gravida enim</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product6.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product7.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Cras neque metus</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product8.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product3.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/frontend/img/s-product/product5.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--small product area end-->



                    </div>
                </div>
            </div>



            <!--new product area start-->
            <div class="new_product_area product_color_six mb-50">
                <div class="section_title section_title_two">
                    <h2>Camera, Audio & Video</h2>
                </div>
                <div class="product_carousel product_column4 owl-carousel">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/frontend/img/product/product18.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="quick_button">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_name">
                                <h3><a href="product-details.html">Aliquam Watches</a></h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                </ul>
                            </div>
                             <div class="price_box">
                                <span class="current_price">$65.00</span>
                                <span class="old_price">$70.00</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                   <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/frontend/img/product/product19.jpg" alt=""></a>
                            <div class="quick_button">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_name">
                                <h3><a href="product-details.html">Condimentum Watches</a></h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                </ul>
                            </div>
                             <div class="price_box">
                                <span class="current_price">$65.00</span>
                                <span class="old_price">$70.00</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                   <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/frontend/img/product/product17.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="quick_button">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_name">
                                <h3><a href="product-details.html">Headphone ipsum</a></h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                </ul>
                            </div>
                             <div class="price_box">
                                <span class="current_price">$65.00</span>
                                <span class="old_price">$70.00</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                   <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/frontend/img/product/product27.jpg" alt=""></a>
                            <div class="quick_button">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_name">
                                <h3><a href="product-details.html">Epicuri per</a></h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                </ul>
                            </div>
                             <div class="price_box">
                                <span class="current_price">$65.00</span>
                                <span class="old_price">$70.00</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                   <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="assets/frontend/img/product/product28.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="quick_button">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_name">
                                <h3><a href="product-details.html">Itaque earum</a></h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                </ul>
                            </div>
                             <div class="price_box">
                                <span class="current_price">$65.00</span>
                                <span class="old_price">$70.00</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                   <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--new product area end-->


        </div>
    </section>
    <!--home section five end-->





    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product37.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product24.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product25.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product22.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/frontend/img/product/productbig1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/frontend/img/product/productbig2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/frontend/img/product/productbig4.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/frontend/img/product/productbig5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- modal area end-->





@endsection
