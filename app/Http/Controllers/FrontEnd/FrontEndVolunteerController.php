<?php
namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteer;
class FrontEndVolunteerController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "frontend volunteer";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages_frontend.volunteers.create'); 
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
            'volunteer_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
        ]);

        $volunteer = new Volunteer();
        $volunteer->volunteer_name      = $request->volunteer_name;
        $volunteer->volunteer_dob       = $request->volunteer_dob;
        $volunteer->volunteer_address    = $request->volunteer_address;
        $volunteer->volunteer_phone    = $request->volunteer_phone;
        $volunteer->volunteer_email    = $request->volunteer_email;
        $volunteer->volunteer_level_of_education    = $request->volunteer_level_of_education;
        $volunteer->volunteer_reason_to_join    = $request->volunteer_reason_to_join;
        // photo
        if($request->hasfile('volunteer_photo')){
            $file               = $request->file('volunteer_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/volunteer_photos/',$filename);
            $volunteer->volunteer_photo   = url('uploads' . '/volunteer_photos/'  . $filename);
        }
    // dd($volunteer->volunteer_photo) ;
    //    else{
    //     $volunteer->volunteer_photo  = '';
    // }
    // dd("dd");
        $volunteer->save();
        return redirect()->back()->with('message', 'Thank you for Submitting your Volunteer  Request! We shall contact you.');;
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
