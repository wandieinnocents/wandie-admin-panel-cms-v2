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
                            <li>All Categories</li>
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
                @foreach ($categories as $category )
                <div class="col-3">
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{ url('/all_product_categories/'.$category->slug) }}"><img src="{{ asset('uploads/product_category/'.$category->image) }}" alt=""
                                    style="width:208px; height:158px; object-fit:cover;"></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">{{ $category->name }}</a></h2>
                            </div>
                        </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--category product area end-->






@endsection
