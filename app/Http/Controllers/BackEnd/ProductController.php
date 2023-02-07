<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrands;
use App\Models\Product;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Str;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages_backend.products.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::all();
        $product_brands = ProductBrands::all();
        return view('backend.pages_backend.products.create',compact('product_categories','product_brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        // dd("store product");
        
       // pick validations 
       $validatedData = $request->validated();
       // check if the category exists
    //    $category = ProductCategory::findOrFail($validatedData['product_category_id']);
    //    $category->products()->create([

    //     $category->name = $validatedData['name'];

    //    ]);

       $product = new Product();
       $product->product_category_id = $validatedData['product_category_id'];
       $product->name = $validatedData['name'];
       $product->slug = Str::slug($validatedData['slug']);
       $product->brand = $validatedData['brand'];
       $product->small_description = $validatedData['small_description'];
       $product->description = $validatedData['description'];
       $product->original_price = $validatedData['original_price'];
       $product->selling_price = $validatedData['selling_price'];
       $product->quantity = $validatedData['quantity'];
       $product->selling_price = $validatedData['selling_price'];
       $product->selling_price = $validatedData['selling_price'];
       $product->selling_price = $validatedData['selling_price'];
       $product->trending = $request->trending == true ? '1':'0';
       $product->status = $request->status == true ? '1':'0';
       $product->meta_title = $validatedData['meta_title'];
       $product->meta_keywords = $validatedData['meta_keywords'];
       $product->meta_description = $validatedData['meta_description'];
       
       dd($product);
    //    $brand->save();
    //    return redirect('/products')->with('message','Product added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
