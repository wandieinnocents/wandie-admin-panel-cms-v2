<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrands;

class FrontEndProductBrandController extends Controller
{
    public function show_products_by_brands($brand_slug){

        // display all brands
        $brands = ProductBrands::where('status','0')->get();
        // get brand  by slug
        $brand = ProductBrands::where('slug',$brand_slug)->first();
        // get the products //products (relationship with brand)
        $all_products_by_brand = $brand->products()->get();
        // dd($products);
         // display all categories
         $categories = ProductCategory::where('status','0')->get();

        // Get all brands
        $product_brands = ProductBrands::where('status','0')->get();


        return view('frontend.pages_frontend.ecommerce.products_per_brand.index',['all_products_by_brand' => $all_products_by_brand,'product_brands' => $product_brands ,'categories' => $categories]);


    }

}
