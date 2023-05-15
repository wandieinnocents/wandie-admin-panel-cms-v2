@extends('frontend.layouts_frontend.master')

@section('title')
    {{-- {{ $category->meta_title }} --}}
@endsection

@section('title')
    {{-- {{ $category->meta_keywords }} --}}
@endsection


@section('title')
    {{-- {{ $category->meta_description }} --}}
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
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->




    <div class="row">
        <div class="col-md-1">
            {{-- Hidden> --}}
        </div>

        {{-- FETCH PRODUCTS --}}
        <div class="col-md-7">
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
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i
                                                        class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i
                                                        class="zmdi zmdi-swap"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- end single product --}}
                        </div>
                    @empty

                        <div class="col-md-12 text-center">
                            <h2>No Products available for Category : {{ $category->name }} </h2>
                        </div>
                    @endforelse

                    {{-- End fetch data --}}

                </div>
            </div>
        </div>
        {{-- END FETCH PRODUCTS --}}

        <!--sidebar widget start-->
        <div class="col-md-3">

            {{-- shop sidebar --}}
            @include('frontend.includes_frontend.sidebar_shop')

        </div>
        <!--sidebar widget end-->

        <div class="col-md-1">
            {{-- Hidden --}}
        </div>
    </div>








    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img
                                                        src="{{ asset('assets/frontend/img/product/product37.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product24.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product25.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/frontend/img/product/product22.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                    role="tab" aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/frontend/img/product/productbig1.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/frontend/img/product/productbig2.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/frontend/img/product/productbig4.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/frontend/img/product/productbig5.jpg"
                                                        alt=""></a>
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
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum
                                            ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui
                                            nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
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
                                                <input min="0" max="100" step="2" value="1"
                                                    type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="google-plus"><a href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
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
