@extends('frontend.layouts_frontend.master')

@section('title')
    Shop
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
                            <li>Shopping </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_sidebar mt-50 mb-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->


                    {{-- LIST PRODUCTS --}}
                    <div class="new_product_area product_color_six mb-50">

                        <div class="row">

                            {{-- Fetch data --}}
                            @forelse ($products as  $product)
                                <div class="col-md-4">
                                    {{-- single product --}}
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a
                                                href="{{ url('/all_product_categories/' . $product->product_category->slug . '/' . $product->slug) }}"><img
                                                    src="{{ asset('assets/frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                {{-- check stock availability --}}
                                                @if ($product->quantity > 0)
                                                    <span class="label_sale">IN STOCK</span>
                                                @else
                                                    <span class="label_sale" style="background-color:red;">OUT OF STOCK</span>
                                                @endif
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h3><a
                                                        href="{{ url('/all_product_categories/' . $product->product_category->slug . '/' . $product->slug) }}">{{ $product->name }}</a>
                                                </h3>
                                                <h3><a
                                                        href="{{ url('/all_product_categories/' . $product->product_category->slug . '/' . $product->slug) }}">Brand : {{ $product->product_brand->name }}</a>
                                                </h3>

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
                                                <span class="current_price">{{ $product->selling_price }}</span>
                                                <span class="old_price">{{ $product->original_price }}</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist">
                                                        <i  class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li class="add_to_cart"><a href="{{ url('/shop' .'/' . $product->slug) }}" title="add to cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i> View Details</a>
                                                    </li>

                                                    <li class="compare"><a href="#" title="compare">
                                                        <i class="zmdi zmdi-swap"></i></a>
                                                    </li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    {{-- end single product --}}
                                </div>
                            @empty

                                <div class="col-md-12 text-center">
                                    <h2>No Products available </h2>
                                </div>
                            @endforelse

                            {{-- End fetch data --}}

                        </div>
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    {{-- shop sidebar --}}
                    @include('frontend.includes_frontend.sidebar_shop')
                    <!--sidebar widget end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->


    <!-- SHOP END -->
@endsection
