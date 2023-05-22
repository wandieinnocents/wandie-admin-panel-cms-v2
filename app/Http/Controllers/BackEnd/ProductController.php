<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductBrands;
use App\Models\Product;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Str;
use App\Models\ProductImage;
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



        // return view
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
    //    check for product category id then add product
        $category = ProductCategory::findOrFail($validatedData['product_category_id']);

        $product =  $category->products()->create([
            'product_category_id'  => $validatedData['product_category_id'],
            'name'  => $validatedData['name'],
            'slug'  =>  Str::slug($validatedData['slug']),
            'brand_id'  => $validatedData['brand_id'],
            'small_description'  => $validatedData['small_description'],
            'description'  => $validatedData['description'],
            'original_price'  => $validatedData['original_price'],
            'selling_price'  => $validatedData['selling_price'],
            'quantity'  => $validatedData['quantity'],
            'trending'  => $request->trending == true ? '1':'0',
            'status'  => $request->status == true ? '1':'0',
            'meta_title'  => $validatedData['meta_title'],
            'meta_keywords'  => $validatedData['meta_keywords'],
            'meta_description'  => $validatedData['meta_description'],


        ]);

        // dd($product->id);




       // image
    //    if($request->hasFile('image')){
    //     // delete oldpath on update
    //     $path = 'uploads/products/'.$product->image;
    //     if(File::exists($path)){
    //         File::delete($path);
    //     }

    //     $file = $request->file('image');
    //     $ext = $file->getClientOriginalExtension();
    //     $filename = time().'.'.$ext;
    //     $file->move('uploads/products/', $filename);
    //     $product->image = $filename;

    // }

    // add multiple product images with relationship

    // create a unique name for image in loop
    $i = 1;
    if($request->hasFile('image')){
        $uploadPath = 'uploads/products/';
        // loop
        foreach($request->file('image') as $imageFile){
            $extension = $imageFile->getClientOriginalExtension();
            $filename = time().$i++.'.'.$extension;
            $imageFile->move($uploadPath, $filename); //
            $finalImagePathName = $uploadPath.$filename;

            // relationship with product image table
            $product->product_images()->create([
                'product_id' => $product->id,
                'image'      =>  $finalImagePathName
            ]);

        }

    }



    // multiple images
    // https://www.itsolutionstuff.com/post/laravel-9-multiple-image-upload-tutorialexample.html




    //   dd($product->id);
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


        // create a unique name for image in loop
    $i = 1;
    if($request->hasFile('image')){
        $uploadPath = 'uploads/products/';
        // loop
        foreach($request->file('image') as $imageFile){
            $extension = $imageFile->getClientOriginalExtension();
            $filename = time().$i++.'.'.$extension;
            $imageFile->move($uploadPath, $filename); //
            $finalImagePathName = $uploadPath.$filename;

            // relationship with product image table
            $product->product_images()->create([
                'product_id' => $product->id,
                'image'      =>  $finalImagePathName
            ]);

        }

    }


    //    // image
    //    if($request->hasFile('image')){
    //     // delete oldpath on update
    //     $path = 'uploads/products/'.$product->image;
    //     if(File::exists($path)){
    //         File::delete($path);
    //     }

    //     $file = $request->file('image');
    //     $ext = $file->getClientOriginalExtension();
    //     $filename = time().'.'.$ext;
    //     $file->move('uploads/products/', $filename);
    //     $product->image = $filename;

    // }




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

    //  delete product image

    public function deleteProductImage(int $product_image_id)
    {
        $productImage = ProductImage::findOrFail($product_image_id);

        if(File::exists($productImage->image)){
            File::delete($productImage->image);

        }

        $productImage->delete();

        return redirect('/products')->with('messagedelete', 'Product Image  is successfully deleted');
    }

    public function destroy($id)
    {
        // $product = Product::findOrFail($id);
        // $product->delete();

        // delete all images in product
        $product = Product::findOrFail($id);
        if($product->product_images){
            foreach($product->product_images as $image){
                if(File::exists($image->image)){
                    File::delete($image->image);
                }

            }

        }
        // delete product
        $product->delete();

        // redirect to products
        return redirect('/products')->with('messagedelete', 'Product   is successfully deleted with its images');
    }
}
