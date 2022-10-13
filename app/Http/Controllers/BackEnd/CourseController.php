<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $count_courses = Course::count();
        return view('backend.pages_backend.courses.index',compact('courses','count_courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.courses.create');

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
            
            'course_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            'requirements_document_one' => 'nullable|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            'requirements_document_two' => 'nullable|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            'requirements_document_three' => 'nullable|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',

            
        ]);

    $course = new Course();
    $course->course_school_category = $request->course_school_category;
    $course->course_name            = $request->course_name;
    $course->description            = $request->description;
    $course->course_level           = $request->course_level;
    $course->course_years           = $request->course_years;
    $course->course_price_range     = $request->course_price_range;

    // photo
    if($request->hasfile('course_photo')){
        $file                       = $request->file('course_photo');
        $extension                  = $file->getClientOriginalExtension();  //get image extension
        $filename                   = time() . '.' .$extension;
        $file->move('uploads/course_photos/',$filename);
        $course->course_photo   = url('uploads' . '/course_photos/'  . $filename);
    }

    // document one

        // resource attachment
        if($request->hasfile('requirements_document_one')){
            $file               = $request->file('requirements_document_one');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/requirements_attachments/',$filename);
            $course->requirements_document_one   = url('uploads' . '/requirements_attachments/'  . $filename);
        }


    // document 2
    if($request->hasfile('requirements_document_two')){
        $file               = $request->file('requirements_document_two');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/document_two_attachments/',$filename);
        $course->requirements_document_two   = url('uploads' . '/document_two_attachments/'  . $filename);
    }



    // document 3
    if($request->hasfile('requirements_document_three')){
        $file               = $request->file('requirements_document_three');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/requirements_document_three/',$filename);
        $course->requirements_document_three   = url('uploads' . '/document_three_attachments/'  . $filename);
    }

    // dd($course);
    // save
    $course->save();

    return redirect('/courses');
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
          
        // $validatedData = $request->validate([
            
        //     'course_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        // ]);

    $course = Course::find($id);
    $course->course_school_category = $request->course_school_category;
    $course->course_name            = $request->course_name;
    $course->description            = $request->description;
    $course->course_level           = $request->course_level;
    $course->course_years           = $request->course_years;
    $course->course_price_range     = $request->course_price_range;

    // photo
    if($request->hasfile('course_photo')){
        $file                       = $request->file('course_photo');
        $extension                  = $file->getClientOriginalExtension();  //get image extension
        $filename                   = time() . '.' .$extension;
        $file->move('uploads/course_photos/',$filename);
        $course->course_photo   = url('uploads' . '/course_photos/'  . $filename);
    }

    // document one

        // resource attachment
        if($request->hasfile('requirements_document_one')){
            $file               = $request->file('requirements_document_one');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/requirements_attachments/',$filename);
            $course->requirements_document_one   = url('uploads' . '/requirements_attachments/'  . $filename);
        }


    // document 2
    if($request->hasfile('requirements_document_two')){
        $file               = $request->file('requirements_document_two');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/document_two_attachments/',$filename);
        $course->requirements_document_two   = url('uploads' . '/document_two_attachments/'  . $filename);
    }



    // document 3
    if($request->hasfile('requirements_document_three')){
        $file               = $request->file('requirements_document_three');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/requirements_document_three/',$filename);
        $course->requirements_document_three   = url('uploads' . '/document_three_attachments/'  . $filename);
    }

    $course->save();

    return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect('/courses')->with('success', 'Course is successfully deleted');
    }
}
