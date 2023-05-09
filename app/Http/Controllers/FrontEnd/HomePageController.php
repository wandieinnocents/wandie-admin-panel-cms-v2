<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderHome;


class HomePageController extends Controller
{
    public function index(){

        $sliders = SliderHome::all();
        return view('welcome',compact('sliders'));
    }
}
