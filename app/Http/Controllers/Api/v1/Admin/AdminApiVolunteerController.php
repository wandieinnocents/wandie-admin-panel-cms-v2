<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteer;

class AdminApiVolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("admin voluntter index");
        if(Volunteer::count() > 0){
            $volunteers = Volunteer::all();
            $count_volunteers= Volunteer::count();
    
            // return
            return [
                "status" => 200,
                "Number of Volunteers" =>   $count_volunteers,
                "message" => "Volunteers Retrieved successfully",
                "data" => $volunteers
            ];
        }
    
        // if no record
        else { 
            //response
            return [
                "status" => 404,
                "message" => "Oops!, No Volunteer Found in Database ",
               
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
        //
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
        if(Volunteer::where("id", $id)->exists()){
            $post = Volunteer::find($id);
    
            // return response
            return [
                "status" => 200,
                "message" => "Single Volunteer Retrieved successfully",
                "data" =>$post
            ];
        }
    
         // if no record
         else { 
    
            return [
                "status" => 404,
                "message" => "Oops!, No Volunteer Found ",
               
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
        
        // find id
        if(Volunteer::where("id", $id)->exists()){
            $volunteer = Volunteer::find($id);
            $volunteer->delete();
            // response for success
            return [
                "status" => 200,
                "message" => "Post Deleted successfully",
                "data" => $volunteer,
            ];
        }  
        
        // if no record
        else { 
            // response for success
            return [
                "status" => 404,
                "message" => "Oops!, No Volunteer Found to Delete "
                
               
            ];
        
        }
    }
}
