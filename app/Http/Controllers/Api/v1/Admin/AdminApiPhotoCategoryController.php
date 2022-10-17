<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;

class AdminApiPhotoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(GalleryCategory::count() > 0){
        $photo_categories = GalleryCategory::all();
        $photo_categories_count   = GalleryCategory::count();
        // return
        return [
            "status" => 200,
            "Number of Posts" =>   $photo_categories_count,
            "message" => "Photo Categories Retrieved successfully",
            "data" => $photo_categories
        ];
    }

    // if no record
    else { 
        //response
        return [
            "status" => 404,
            "message" => "Oops!, No Photo Categories Found in Database ",
           
        ];
    
    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery_category = new GalleryCategory();
        $gallery_category->gallery_category_name = $request->gallery_category_name;
        $gallery_category->gallery_category_description = $request->gallery_category_description;
        $gallery_category->save();

         // response
         return [
            "status" => 200,
            "message" => "Photo Category Added successfully",
            "data" => $gallery_category
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // find post id
         if(GalleryCategory::where("id", $id)->exists()){
            $photo_category = GalleryCategory::find($id);
    
            // return response
            return [
                "status" => 200,
                "message" => "Photo Category Retrieved successfully",
                "data" =>$photo_category
            ];
        }
    
         // if no record
         else { 
    
            return [
                "status" => 404,
                "message" => "Oops!, No Photo Category Found ",
               
            ];
        
        }
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
        if(GalleryCategory::where("id", $id)->exists()){
            $photo_category   = GalleryCategory::find($id);
            $photo_category->gallery_category_name = !empty($request->gallery_category_name)? $request->gallery_category_name: $photo_category->gallery_category_name;
            $photo_category->gallery_category_description = !empty($request->gallery_category_description)? $request->gallery_category_description: $photo_category->gallery_category_description;
    
           
    
            // save post 
            $photo_category->save();
    
            // response for success
            return [
                "status" => 200,
                "message" => "Photo Category updated successfully",
                "data" => $photo_category
               
            ];
        }
        // if no record by id found
        else { 
    
            // response for success
            return [
                "status" => 404,
                "message" => "Oops!, No Photo Category Found ",
                // "data" => $post
               
            ];
        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // find id
       if(GalleryCategory::where("id", $id)->exists()){
        $photo_category = GalleryCategory::find($id);
        $photo_category->delete();
        // response for success
        return [
            "status" => 200,
            "message" => "Photo Category Deleted successfully",
            "data" => $photo_category,
        ];
    }  
    
    // if no record
    else { 
        // response for success
        return [
            "status" => 404,
            "message" => "Oops!, No Photo Category Found to Delete "
            
           
        ];
    
    }

    
    }
}
