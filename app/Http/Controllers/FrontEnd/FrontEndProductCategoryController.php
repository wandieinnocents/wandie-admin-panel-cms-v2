<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndProductCategoryController extends Controller
{
    public function categories(){
        return view('frontend.pages_frontend.ecommerce.product_categories.all_product_categories');
    }
}
