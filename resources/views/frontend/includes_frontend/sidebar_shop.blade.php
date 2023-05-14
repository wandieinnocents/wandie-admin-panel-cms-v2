<aside class="sidebar_widget">


    {{-- categories --}}
    <div class="widget_list widget_categories">
        <h2>categories</h2>
        <ul>
            @forelse($categories  as $product_category)
                <li>
                    @if ($product_category)
                        <a
                            href="{{ url('/all_product_categories/' . $product_category->slug) }}">{{ $product_category->name }}</a>
                    @else
                        <div class="col-md-12 text-center">
                            <h3>No Category</h3>
                        </div>
                    @endif
                </li>

            @empty
                <div class="col-md-12 text-center">
                    <h3>No Categories</h3>
                </div>
            @endforelse



        </ul>
    </div>

    {{-- old brands --}}
    <div class="widget_list widget_categories">
        <h2>Brands</h2>
        <ul>
            @forelse($product_brands  as $brand)
                <li>
                    @if ($brand)
                        <a href="{{ url('/products_by_brand/' . $brand->slug) }}">{{ $brand->name }} </a>
                    @else
                        <div class="col-md-12 text-center">
                            <h3>No Category</h3>
                        </div>
                    @endif
                </li>

            @empty
                <div class="col-md-12 text-center">
                    <h3>No Categories</h3>
                </div>
            @endforelse



        </ul>
    </div>

    {{-- new brands --}}
    <div class="widget_list widget_categories">
        <h2>PRICE FILTER</h2>
        <ul>
            {{-- <li> <a href="d">Sort by popularity </a> </li>
            <li> <a href="d">Sort by New Arrivals </a> </li> --}}
            <li> <a href="{{ url('/price_low_to_high') }}">Sort by price : Low to High </a> </li>
            <li> <a href="{{ url('/price_high_to_low') }}">Sort by price : High to Low </a> </li>
            {{-- <li> <a href="d">Sort by Product Names : A-Z </a> </li>
            <li> <a href="d">Sort by Product names : Z-A </a> </li> --}}
        </ul>
    </div>


    <div class="widget_list widget_filter">
        <h2>Filter by price</h2>
        <form action="#">
            <div id="slider-range"></div>
            <button type="submit">Filter</button>
            <input type="text" name="text" id="amount" />

        </form>





    </div>


    <div class="widget_list">
        <h2>Manufacturer</h2>
        <ul>
            <li>
                <a href="#">Brake Parts <span>(6)</span></a>
            </li>
            <li>
                <a href="#">Accessories <span>(10)</span></a>
            </li>
            <li>
                <a href="#">Engine Parts <span>(4)</span></a>
            </li>
            <li>
                <a href="#">hermes <span>(10)</span></a>
            </li>
            <li>
                <a href="#">louis vuitton <span>(8)</span></a>
            </li>

        </ul>
    </div>
    <div class="widget_list">
        <h2>Select By Color</h2>
        <ul>
            <li>
                <a href="#">Black <span>(6)</span></a>
            </li>
            <li>
                <a href="#"> Blue <span>(8)</span></a>
            </li>
            <li>
                <a href="#">Brown <span>(10)</span></a>
            </li>
            <li>
                <a href="#"> Green <span>(6)</span></a>
            </li>
            <li>
                <a href="#">Pink <span>(4)</span></a>
            </li>

        </ul>
    </div>
    <div class="widget_list recent_product">
        <h2>Top Rated Products</h2>
        <div class="recent_product_container">
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Natus erro</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product2.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Nemo enim</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product3.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Consequuntur magni</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product4.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Cras neque</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product5.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Endurance2</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product6.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Crown Summit1</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product7.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Compete Hoodie3</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product3.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Crown Summit1</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product4.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Crown Summit1</a></h3>
                    <div class="price_box">
                        <span class="current_price">$65.00</span>
                        <span class="old_price">$70.00</span>
                    </div>
                </div>
            </div>
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product5.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Crown Summit1</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product6.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Crown Summit1</a></h3>
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
            <div class="recent_product_list">
                <div class="recent_product_thumb">
                    <a href="product-details.html"><img src="assets/frontend/img/s-product/product7.jpg"
                            alt=""></a>
                </div>
                <div class="recent_product_content">
                    <h3><a href="product-details.html">Crown Summit1</a></h3>
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

</aside>
