@extends('frontend.layouts_frontend.master')

@section('title')
    Product Details
@endsection

@section('content')
    <!-- SHOP START -->
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Product Details </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details variable_product mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset('assets/frontend/img/product/productbig1.jpg') }}"
                                    data-zoom-image="{{ asset('assets/frontend/img/product/productbig1.jpg') }}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">


                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="{{ asset('assets/frontend/img/product/productbig1.jpg') }}"
                                        data-zoom-image="{{ asset('assets/frontend/img/product/productbig1.jpg') }}">
                                        <img src="{{ asset('assets/frontend/img/product/productbig1.jpg') }}"
                                            alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="{{ asset('assets/frontend/img/product/productbig2.jpg') }}"
                                        data-zoom-image="{{ asset('assets/frontend/img/product/productbig2.jpg') }}">
                                        <img src="{{ asset('assets/frontend/img/product/productbig2.jpg') }}"
                                            alt="zo-th-1" />
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1>{{ $product->name }} </h1>

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
                                <span class="current_price">{{ $product->selling_price }}</span>
                                <span class="old_price">{{ $product->original_price }}</span>

                            </div>

                            <div class="product_d_meta">
                                <span> <b>Category: </b> {{ $product->product_category->name }}
                                    | <b>Brand: </b> {{ $product->product_brand->name }}</span>

                            </div>
                            <div class="product_desc">
                                <p> {{ $product->small_description }} </p>
                            </div>
                            {{-- <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="product_variant size">
                                <label>size</label>
                                <select class="niceselect_option" id="color2" name="produc_color2">
                                    <option selected value="1"> size in option</option>
                                    <option value="2">s</option>
                                    <option value="3">m</option>
                                    <option value="4">l</option>
                                    <option value="5">xl</option>
                                    <option value="6">xxl</option>
                                </select>
                            </div> --}}
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i
                                                class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i
                                                class="zmdi zmdi-shopping-cart-plus"></i> add to wishlist</a></li>

                                    {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                    {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                </ul>
                            </div>
                        </form>



                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#info" role="tab"
                                        aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                        aria-selected="false">Specification</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p> {{ $product->description }} </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Brand</td>
                                                    <td> {{ $product->product_brand->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Category</td>
                                                    <td>{{ $product->product_category->name }}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </form>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->





    <!-- SHOP END -->
@endsection
