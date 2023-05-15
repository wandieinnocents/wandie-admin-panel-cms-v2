<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrands;
use App\Models\Product;

class ProductSortController extends Controller
{
    // product sorting low to high
    public function price_low_to_high(){
       // display categories
       $categories = ProductCategory::where('status','0')->get();
       // display brands
       $product_brands = ProductBrands::where('status','0')->get();
       // fetch products
       $products = Product::orderBy('selling_price','asc')->get();
    //    return view
    return view('frontend.pages_frontend.ecommerce.sort_products.sort_price_low_to_high', [
        'categories' => $categories,
        'product_brands' => $product_brands,
        'products' => $products
    ]);

    }


    // product sorting high to low
    public function price_high_to_low(){

        // display categories
        $categories = ProductCategory::where('status','0')->get();
        // display brands
        $product_brands = ProductBrands::where('status','0')->get();
        // fetch products
        $products = Product::orderBy('selling_price','desc')->get();

     //    return view
     return view('frontend.pages_frontend.ecommerce.sort_products.sort_price_high_to_low', [
         'categories' => $categories,
         'product_brands' => $product_brands,
         'products' => $products
     ]);

     }

    // sort by new arrivals (latest)
    public function new_arrivals(){

        // display categories
        $categories = ProductCategory::where('status','0')->get();
        // display brands
        $product_brands = ProductBrands::where('status','0')->get();
        // fetch products
        $products = Product::orderBy('created_at','desc')->take(10)->get();
        // dd($products);

     //    return view
     return view('frontend.pages_frontend.ecommerce.sort_products.new_arrivals', [
         'categories' => $categories,
         'product_brands' => $product_brands,
         'products' => $products
     ]);

     }


}
