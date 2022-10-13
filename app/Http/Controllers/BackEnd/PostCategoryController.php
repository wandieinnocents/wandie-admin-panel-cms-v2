<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_categories = PostCategory::all();
        $count_postcategories = PostCategory::count();
        return view('backend.pages_backend.post_categories.index',compact('post_categories','count_postcategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.pages_backend.post_categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post_category = new PostCategory();
        $post_category->post_category_name = $request->post_category_name;
        $post_category->post_category_description = $request->post_category_description;
        $post_category->save();
        return redirect('/post_categories');
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
        $post_category = PostCategory::find($id);
        $post_category->post_category_name = $request->post_category_name;
        $post_category->post_category_description = $request->post_category_description;
        $post_category->save();
        return redirect('/post_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_category = PostCategory::findOrFail($id);
        $post_category->delete();
        return redirect('/post_categories')->with('success', 'Category is successfully deleted');
    }
}
