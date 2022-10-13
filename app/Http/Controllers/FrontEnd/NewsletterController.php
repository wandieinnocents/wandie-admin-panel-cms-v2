<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    // return view
    public function index()
    {
        // return view('newsletter');
        // dd("adfaf");
        return view('frontend.pages_frontend.newsletters.create');
    }

    // store data
    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            // dd($request->email);
            return redirect('/')->with('success', 'Thanks For Your  Subscription');
            
        }
        return redirect('/')->with('failure', 'Sorry! You have already subscribed ');
            
    }

}
