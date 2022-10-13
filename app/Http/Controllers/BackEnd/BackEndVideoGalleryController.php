<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoGallery;

class BackEndVideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = VideoGallery::all();
        $count_videos = VideoGallery::count();
        // dd($galleries);

        // dd($videos);
        return view('backend.pages_backend.videos.index',compact('videos','count_videos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new VideoGallery();
        $video->video_title = $request->video_title;
        $video->video_url = $request->video_url;
        $video->video_description = $request->video_description;
        // photo
        if($request->hasfile('video_thumbnail')){
            $file               = $request->file('video_thumbnail');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/video_thumbnails/',$filename);
            $video->video_thumbnail   = url('uploads' . '/video_thumbnails/'  . $filename);
        }

        $video->save();

        return redirect('/video_galleries');
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
        $video_update = VideoGallery::find($id);
        $video_update->video_title = $request->video_title;
        $video_update->video_url = $request->video_url;
        $video_update->video_description = $request->video_description;
        // photo
        if($request->hasfile('video_thumbnail')){
            $file               = $request->file('video_thumbnail');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/video_thumbnails/',$filename);
            $video_update->video_thumbnail   = url('uploads' . '/video_thumbnails/'  . $filename);
        }

        $video_update->save();

        return redirect('/video_galleries');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = VideoGallery::findOrFail($id);
        $video->delete();

        return redirect('/video_galleries')->with('success', 'Video is successfully deleted');
    }
}
