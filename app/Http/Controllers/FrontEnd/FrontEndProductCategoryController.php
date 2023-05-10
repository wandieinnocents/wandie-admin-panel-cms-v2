<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\ProductCategory;

class FrontEndProductCategoryController extends Controller
{
    public function categories(){
        $categories = ProductCategory::where('status','0')->get();
        // dd($categories);
        return view('frontend.pages_frontend.ecommerce.product_categories.all_product_categories',compact('categories'));
    }

    // get products in each category using slug
    public function products($category_slug ){
        $category = ProductCategory::where('slug',$category_slug)->first();
        if($category){

            // products () =  relationship in ProductCategory model
            $products = $category->products()->get();
            return view('frontend.pages_frontend.ecommerce.products.index',compact('products','category'));

        } else {
            return redirect->back();
        }

    }
}
