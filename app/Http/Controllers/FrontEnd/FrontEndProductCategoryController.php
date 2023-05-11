<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrands;
use App\Models\Product;


class FrontEndProductCategoryController extends Controller
{
    public function categories(){
        $categories = ProductCategory::where('status','0')->get();
        // dd($categories);
        return view('frontend.pages_frontend.ecommerce.product_categories.all_product_categories',compact('categories'));
    }



    // get products in each category using slug
    public function products($category_slug ){

        // display all categories
        $categories = ProductCategory::where('status','0')->get();
        // get category per product using category_slug
        $category = ProductCategory::where('slug',$category_slug)->first();
        // get the products //products (relationship with product category)
        $products = $category->products()->get();

        // Get all brands
       // display all categories
       $product_brands = ProductBrands::where('status','0')->get();

        // return view to display products per category
            return view('frontend.pages_frontend.ecommerce.products_per_category.index',['products' => $products, 'categories' => $categories,'category' => $category , 'product_brands' => $product_brands ]);


    }

    public function brands($brand_slug){

        $product_brands = ProductBrands::where('status','0')->get();
        $products_available  = Product::where('brand','sony')->get();
        // dd( $products_available);
        // copy from products to brands


        return view('frontend.pages_frontend.ecommerce.products_per_brand.index',['products_available' => $products_available ,'product_brands' => $product_brands]);


    }







}
