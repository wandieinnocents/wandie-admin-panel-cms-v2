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
            {{-- <li> <a href="d">Sort by popularity </a> </li> --}}
            <li> <a href="{{ url('/new_arrivals') }}">Sort by New Arrivals </a> </li>
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




</aside>
