@extends('frontend.layouts_frontend.master')

@section('title')
   All product categories
@endsection

@section('content')



    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--category product area start-->
    <section class="category_product_area mt-30 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category_product_carousel category_column4 owl-carousel">
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/category/category1.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">television</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/category/category2.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">audio</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/category/category3.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">Camera</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/category/category4.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">lundry</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/category/category5.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">cooling</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="assets/frontend/img/category/category2.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">audio</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category product area end-->






@endsection
