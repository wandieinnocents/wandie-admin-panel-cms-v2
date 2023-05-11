<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductBrandFormRequest;
use App\Models\ProductBrands;
use Illuminate\Support\Str;
use App\Models\ProductCategory;


class ProductBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_brands = ProductBrands::all();
        $product_categories = ProductCategory::where('status','0')->get();
        return view('backend.pages_backend.product_brands.index', ['product_brands' => $product_brands , 'product_categories' => $product_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::where('status','0')->get();
        // dd($product_categories);
        return view('backend.pages_backend.product_brands.create',['product_categories' => $product_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductBrandFormRequest $request)
    {
       // pick validations from category form request
       $validatedData = $request->validated();
       $brand = new ProductBrands();
       $brand->name = $validatedData['name'];
       $brand->slug = Str::slug($validatedData['slug']);
       $brand->status = $request->status == true ? '1':'0';

       // save
    //    dd($brand);
       $brand->save();
       // redirect
       return redirect('/product_brands')->with('message','Brand added successfuly');

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
    public function update(ProductBrandFormRequest $request, $id)
    {
       // pick validations from category form request
       $validatedData = $request->validated();
       $brand = ProductBrands::findOrFail($id);
       $brand->name = $validatedData['name'];
       $brand->slug = Str::slug($validatedData['slug']);
       $brand->status = $request->status == true ? '1':'0';

       // save
    //    dd($brand);
       $brand->update();
       // redirect
       return redirect('/product_brands')->with('messageupdate','Brand Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = ProductBrands::findOrFail($id);
        $brand->delete();

        return redirect('/product_brands')->with('messagedelete', 'Product Brand is successfully deleted');
    }
}
