<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderHome;
use App\Http\Requests\SliderHomeFormRequest;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("home");
        $galleries = Gallery::all();
        $count_galleries = Gallery::count();
        $gallery_categories = GalleryCategory::all();
        return view('backend.pages_backend.sliderhome.index',compact('galleries','count_galleries','gallery_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.sliderhome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderHomeFormRequest $request)
    {
        // pick validations
       $validatedData = $request->validated();
       $slider = new SliderHome();
       $slider->title = $validatedData['title'];
       $slider->subtitle = $validatedData['subtitle'];
       $slider->link_one = $validatedData['link_one'];
       $slider->link_two = $validatedData['link_two'];
       $slider->link_three = $validatedData['link_three'];
       $slider->link_four = $validatedData['link_four'];
       $slider->description = $validatedData['description'];


       if($request->hasfile('photo')){
        $file               = $request->file('photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/slider_home/',$filename);
        $slider->photo   = url('uploads' . '/slider_home/'  . $filename);
    }

       $slider->save();
       return redirect('/home_sliders')->with('messagesave','Slider added successfuly');

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
