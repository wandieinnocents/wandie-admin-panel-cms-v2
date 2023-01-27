<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCategoryFormRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Str;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::all();
        // dd($product_categories);
        return view('backend.pages_backend.product_categories.index',compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.product_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryFormRequest $request)
    {
        // pick validations from category form request
        $validatedData = $request->validated();
        $category = new ProductCategory();
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        
        // category image
        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/product_category/', $filename);
            $category->image = $filename;

        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keywords = $validatedData['meta_keywords'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1':'0';

        // save
        // dd($category);

        $category->save();
        // redirect
        return redirect('/product_categories')->with('message','Category added successfuly');

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
    public function update(ProductCategoryFormRequest $request, $id)
    {
        $validatedData = $request->validated();

        // find category by id
        $category = ProductCategory::findOrFail($id);
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        
        // category image
       

        if($request->hasFile('image')){
            // delete oldpath on update
            $path = 'uploads/product_category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/product_category/', $filename);
            $category->image = $filename;

        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keywords = $validatedData['meta_keywords'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1':'0';

        // save
        // dd($category);

        $category->update();
        return redirect('/product_categories')->with('message','Category Updated successfuly');
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
