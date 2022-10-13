<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_events = Event::count();
        $events = Event::all();
        // dd($events );
        return view('backend.pages_backend.events.index',compact('count_events','events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.events.create');
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
            
            'event_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

    $event = new Event();
    $event->event_name          = $request->event_name;
    $event->event_location      = $request->event_location;
    $event->event_start_date    = $request->event_start_date;
    $event->event_end_date      = $request->event_end_date;
    $event->event_description   = $request->event_description;

    // photo
    if($request->hasfile('event_photo')){
        $file               = $request->file('event_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/event_photos/',$filename);
        $event->event_photo   = url('uploads' . '/event_photos/'  . $filename);
    }

    // else{
    //     $event->event_photo = '';
    // }
    // dd($event);
    $event->save();
    return redirect('/events');

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
            
        //     'event_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        // ]);

    $event = Event::find($id);
    $event->event_name          = $request->event_name;
    $event->event_location      = $request->event_location;
    $event->event_start_date    = $request->event_start_date;
    $event->event_end_date      = $request->event_end_date;
    $event->event_description   = $request->event_description;

    // photo
    if($request->hasfile('event_photo')){
        $file               = $request->file('event_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/event_photos/',$filename);
        $event->event_photo   = url('uploads' . '/event_photos/'  . $filename);
    }

    // else{
    //     $event->event_photo = '';
    // }
    // dd($event);
    $event->save();
    return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event is successfully deleted');
    }
}
