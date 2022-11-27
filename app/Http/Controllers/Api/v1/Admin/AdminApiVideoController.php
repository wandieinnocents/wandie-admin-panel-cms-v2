<?php
namespace App\Http\Controllers\Api\v1\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoGallery;
class AdminApiVideoController extends Controller
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
        if(VideoGallery::count() > 0){
            $videos = VideoGallery::all();
            $count_videos = VideoGallery::count();
            // return
            return [
                "status" => 200,
                "Number of Videos" =>   $count_videos,
                "message" => "Videos Retrieved successfully",
                "data" => $videos
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
         // response
         return [
            "status" => 200,
            "message" => "Video Added successfully",
            "data" => $video
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
        // find video id
        if(VideoGallery::where("id", $id)->exists()){
        $video = VideoGallery::find($id);
        // return response
        return [
            "status" => 200,
            "message" => "Video Retrieved successfully",
            "data" =>$video
        ];
    }
     // if no record
     else { 
        return [
            "status" => 404,
            "message" => "Oops!, No video Found ",
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
        if(VideoGallery::where("id", $id)->exists()){
            // update video
            $video   = VideoGallery::find($id);
            $video->video_title = !empty($request->video_title)? $request->video_title: $video->video_title;
            $video->video_url = !empty($request->video_url)? $request->video_url: $video->video_url;
            $video->video_description = !empty($request->video_description)? $request->video_description: $video->video_description;
            // video thumbnail
            if($request->hasfile('video_thumbnail')){
                $file               = $request->file('video_thumbnail');
                $extension          = $file->getClientOriginalExtension();  //get image extension
                $filename           = time() . '.' .$extension;
                $file->move('uploads/video_thumbnails/',$filename);
                $video_update->video_thumbnail   = url('uploads' . '/video_thumbnails/'  . $filename);
            }
            // save video 
            $video->save();
            // response for success
            return [
                "status" => 200,
                "message" => "Video updated successfully",
                "data" => $video
            ];
        }
        // if no record by id found
        else { 
            // response for success
            return [
                "status" => 404,
                "message" => "Oops!, No Video Found ",
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
        if(VideoGallery::where("id", $id)->exists()){
        $video = VideoGallery::find($id);
        $video->delete();
        // response for success
        return [
            "status" => 200,
            "message" => "Video Deleted successfully",
            "data" => $video,
        ];
    }  
    // if no record
    else { 
        // response for success
        return [
            "status" => 404,
            "message" => "Oops!, No Video Found to Delete "
        ];
    }
    }
}
