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
}
