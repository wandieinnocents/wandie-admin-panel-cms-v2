<?php

namespace App\Http\Controllers\Api\v1\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontEndContact;

class CustomerApiFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // validate data fields
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'description' => 'nullable',
            
        ]);

        // dd("storing dataa");
        $contact = new FrontEndContact();
        $contact->name         = $request->name;
        $contact->email        = $request->email;
        $contact->phone        = $request->phone;
        $contact->subject      = $request->subject;
        $contact->description  = $request->description;

        // send copy to email
       
        // \Mail::to('wandieinnocent2@gmail.com')->send(new \App\Mail\SupportMail($contact));
       
        // save to DB
        $contact->save();

         // response
         return [
            "status" => 200,
            "message" => "Feedback Added successfully",
            "data" => $contact
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
