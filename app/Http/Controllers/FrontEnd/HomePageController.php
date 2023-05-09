<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderHome;
use App\Models\AdvertisementBanner;



class HomePageController extends Controller
{
    public function index(){

        $sliders = SliderHome::all();
        $banneradverts_sliderarea = AdvertisementBanner::orderBy('created_at', 'desc')->paginate(2);
        $banners_innerpage = AdvertisementBanner::orderBy('created_at', 'desc')->paginate(4);
        return view('welcome',compact('sliders','banneradverts_sliderarea','banners_innerpage'));
    }
}
