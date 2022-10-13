<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $posts = Post::all();
        $post_categories = PostCategory::all();
        $count_posts = Post::count();
        $loggedinUser = Auth::user()->name;
        return view('backend.pages_backend.posts.index',compact('post_categories','count_posts','posts','loggedinUser'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post_categories =  PostCategory::all();
        $loggedinUser = Auth::user()->name;
       
        return view('backend.pages_backend.posts.create',compact('post_categories','loggedinUser'));

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
            
            'post_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

        $post = new Post();
        $post->post_category_id  = $request->post_category_id;
        $post->post_title        = $request->post_title;
        $post->post_created_by   = Auth::user()->name;
        $post->post_description  = $request->post_description;

        // photo
        if($request->hasfile('post_photo')){
            $file               = $request->file('post_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/post_photos/',$filename);
            $post->post_photo   = url('uploads' . '/post_photos/'  . $filename);
        }

        // else{
        //     $post->post_photo = '';
        // }
        $post->save();
        // dd($post);
        return redirect()->route('posts.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('backend.pages_backend.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.pages_backend.posts.edit',compact('post'));
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
        $post   = Post::find($id);
        $post->post_category_id  = $request->post_category_id;
        $post->post_title        = $request->post_title;
        $post->post_created_by   = Auth::user()->name;
        $post->post_description  = $request->post_description;

        // photo
        if($request->hasfile('post_photo')){
            $file               = $request->file('post_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/post_photos/',$filename);
            $post->post_photo   = url('uploads' . '/post_photos/'  . $filename);
        }

        // else{
        //     $post->post_photo = '';
        // }
        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
    
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}
