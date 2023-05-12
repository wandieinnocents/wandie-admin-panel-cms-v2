<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrands;
use App\Models\Product;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Str;
use App\Models\productImage;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $product_categories = ProductCategory::all();
        $product_brands = ProductBrands::all();
        $count_products = Product::all()->count();
        return view('backend.pages_backend.products.index',compact('products','product_categories','product_brands','count_products'));

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

       // pick validations
       $validatedData = $request->validated();
       // create new product
       $product = new Product();
       $product->product_category_id = $validatedData['product_category_id'];
       $product->name = $validatedData['name'];
       $product->slug = Str::slug($validatedData['slug']);
       $product->brand_id = $validatedData['brand_id'];
       $product->small_description = $validatedData['small_description'];
       $product->description = $validatedData['description'];
       $product->original_price = $validatedData['original_price'];
       $product->selling_price = $validatedData['selling_price'];
       $product->quantity = $validatedData['quantity'];
       $product->trending = $request->trending == true ? '1':'0';
       $product->status = $request->status == true ? '1':'0';
       $product->meta_title = $validatedData['meta_title'];
       $product->meta_keywords = $validatedData['meta_keywords'];
       $product->meta_description = $validatedData['meta_description'];
       // image
       if($request->hasFile('image')){
        // delete oldpath on update
        $path = 'uploads/products/'.$product->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/products/', $filename);
        $product->image = $filename;

    }

    // multiple images
    // https://www.itsolutionstuff.com/post/laravel-9-multiple-image-upload-tutorialexample.html




    //   dd($brand_id);
       $product->save();
       return redirect('/products')->with('messagesave','Product added successfuly');
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
    public function update(ProductFormRequest $request, $id)
    {
          // pick validations
       $validatedData = $request->validated();
       $product = Product::findOrFail($id);
       $product->product_category_id = $validatedData['product_category_id'];
       $product->name = $validatedData['name'];
       $product->slug = Str::slug($validatedData['slug']);
       $product->brand_id = $validatedData['brand_id'];
       $product->small_description = $validatedData['small_description'];
       $product->description = $validatedData['description'];
       $product->original_price = $validatedData['original_price'];
       $product->selling_price = $validatedData['selling_price'];
       $product->quantity = $validatedData['quantity'];
       $product->trending = $request->trending == true ? '1':'0';
       $product->status = $request->status == true ? '1':'0';
       $product->meta_title = $validatedData['meta_title'];
       $product->meta_keywords = $validatedData['meta_keywords'];
       $product->meta_description = $validatedData['meta_description'];
       // image
       if($request->hasFile('image')){
        // delete oldpath on update
        $path = 'uploads/products/'.$product->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/products/', $filename);
        $product->image = $filename;

    }




    //   dd("image");
       $product->update();
       return redirect('/products')->with('messageupdate','Product Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('messagedelete', 'Product  is successfully deleted');
    }
}
