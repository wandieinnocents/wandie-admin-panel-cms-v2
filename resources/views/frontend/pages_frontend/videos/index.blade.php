@extends('frontend.layouts_frontend.master')
@section('title')
    Video Gallery
@endsection
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/frontend/images/breadcrumbs/9.png" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">IPI Video Gallery</h1>
        <ul>
                <li>
                    <a class="active" href="index2.html">IPI</a>
                </li>
                <li>Video Gallery</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Events Section Start -->
    <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row margin-0">
                {{-- start photos --}}


                <div class="row clearfix">
                    @foreach($videos as $video)
                        
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated animated" data-wow-delay="0ms"
                            style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                            <iframe width="500" height="300" src="{{ $video->video_url }}"
                                allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                webkitallowfullscreen="webkitallowfullscreen">
                            </iframe>
                            <div style="padding:15px;">
                                <h6>
                                    <center>{{ $video->video_title }}</center>
                                </h6>
                            </div>
                        </div>
                    </div>

                    @endforeach

                

                </div>
                {{-- end photos --}}

            </div>
        </div>
    </div>
    </div>
    <!-- Events Section End -->
@endsection
