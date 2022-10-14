<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use Auth;

class AdminApiPostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  constructor  with roles and permissions
   

    public function index()
    {
        if(Post::count() > 0){
        $posts = Post::all();
        $post_categories = PostCategory::all();
        $count_posts = Post::count();

        // return
        return [
            "status" => 200,
            "Number of Posts" =>   $count_posts,
            "message" => "Posts Retrieved successfully",
            "data" => $posts
        ];
    }

    // if no record
    else { 
        //response
        return [
            "status" => 404,
            "message" => "Oops!, No Posts Found in Database ",
           
        ];
    
    }


        
        // return "we are in apis ow";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $post_categories =  PostCategory::all();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
 
        // validate data fields
        $validatedData = $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);
 
        // $post = Post::create($request->all());
        $post = new Post();
        $post->post_category_id  = $request->post_category_id;
        $post->post_title        = $request->post_title;
        $post->post_created_by   = "wandie";
        $post->post_description  = $request->post_description;

        // photo
        if($request->hasfile('post_photo')){
            $file               = $request->file('post_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/post_photos/',$filename);
            $post->post_photo   = url('uploads' . '/post_photos/'  . $filename);
        }

        // save post
        $post->save();

        // response
        return [
            "status" => 200,
            "message" => "Post Added successfully",
            "data" => $post
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
        if(Post::where("id", $id)->exists()){
        $post = Post::find($id);

        // return response
        return [
            "status" => 200,
            "message" => "Post Retrieved successfully",
            "data" =>$post
        ];
    }

     // if no record
     else { 

        return [
            "status" => 404,
            "message" => "Oops!, No Post Found ",
           
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
        
        if(Post::where("id", $id)->exists()){
        $post   = Post::find($id);
        $post->post_category_id = !empty($request->post_category_id)? $request->post_category_id: $post->post_category_id;
        $post->post_title = !empty($request->post_title)? $request->post_title: $post->post_title;
        $post->post_description = !empty($request->post_description)? $request->post_description: $post->post_description;
        $post->post_created_by = "wandie";

        // photo
        if($request->hasfile('post_photo')){
            $file               = $request->file('post_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/post_photos/',$filename);
            $post->post_photo   = url('uploads' . '/post_photos/'  . $filename);
        }

        // save post 
        $post->save();

        // response for success
        return [
            "status" => 200,
            "message" => "Post updated successfully",
            "data" => $post
           
        ];
    }
    // if no record by id found
    else { 

        // response for success
        return [
            "status" => 404,
            "message" => "Oops!, No Post Found ",
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
        if(Post::where("id", $id)->exists()){
        $post = Post::find($id);
        $post->delete();
        // response for success
        return [
            "status" => 200,
            "message" => "Post Deleted successfully",
            "data" => $post,
        ];
    }  
    
    // if no record
    else { 
        // response for success
        return [
            "status" => 404,
            "message" => "Oops!, No Post Found to Delete "
            
           
        ];
    
    }

    }
}
