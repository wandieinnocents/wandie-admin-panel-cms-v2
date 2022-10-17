<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryCategory;

class AdminApiPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gallery::count() > 0){
            $photos = Gallery::all();
            $count_photos = Gallery::count();
            $photo_categories = GalleryCategory::all();
            $photo_categories_count = GalleryCategory::count();
            // return
            return [
                "status" => 200,
                "Number of Photos" =>   $count_photos,
                "Number of Photo categories" =>   $photo_categories_count,
                "message" => "Photos Retrieved successfully",
                "data" => $photos
            ];
        }
    
        // if no record
        else { 
            //response
            return [
                "status" => 404,
                "message" => "Oops!, No Photos Found in Database ",
               
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
          
        $validatedData = $request->validate([
            
            'gallery_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

        $photo = new Gallery();
        $photo->gallery_category_id = $request->gallery_category_id;
        $photo->gallery_name = $request->gallery_name;
        $photo->gallery_description = $request->gallery_description;

        // photo
        if($request->hasfile('gallery_photo')){
            $file               = $request->file('gallery_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/gallery_photos/',$filename);
            $photo->gallery_photo   = url('uploads' . '/gallery_photos/'  . $filename);
        }

        else{
            // return $request;
            $photo->gallery_photo = '';
        }

        // dd($gallery);
        $photo->save();

        // response
        return [
            "status" => 200,
            "message" => "Photo  Added successfully",
            "data" => $photo
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
        if(Gallery::where("id", $id)->exists()){
            $photo   = Gallery::find($id);
            $photo->gallery_category_id = !empty($request->gallery_category_id)? $request->gallery_category_id: $photo->gallery_category_id;
            $photo->gallery_name = !empty($request->gallery_name)? $request->gallery_name: $photo->gallery_name;
            $photo->gallery_description = !empty($request->gallery_description)? $request->gallery_description: $photo->gallery_description;
    
            // photo
        if($request->hasfile('gallery_photo')){
            $file               = $request->file('gallery_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/gallery_photos/',$filename);
            $photo->gallery_photo   = url('uploads' . '/gallery_photos/'  . $filename);
        }

    
            // save post 
            $photo->save();
    
            // response for success
            return [
                "status" => 200,
                "message" => "Photo updated successfully",
                "data" => $photo
               
            ];
        }
        // if no record by id found
        else { 
    
            // response for success
            return [
                "status" => 404,
                "message" => "Oops!, No Photo Found ",
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
       if(Gallery::where("id", $id)->exists()){
        $photo = Gallery::find($id);
        $photo->delete();
        // response for success
        return [
            "status" => 200,
            "message" => "Photo  Deleted successfully",
            "data" => $photo,
        ];
    }  
    
    // if no record
    else { 
        // response for success
        return [
            "status" => 404,
            "message" => "Oops!, No Photo  Found to Delete "
            
           
        ];
    
    }

    
    
    }
}
