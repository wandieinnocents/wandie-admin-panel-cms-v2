@extends('frontend.layouts_frontend.master')

@section('title')
    Gallery
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title2.png') }});">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Projects</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Pages</a></li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="post-details">
                        <!--Cause Details-->
                        <div class="cause-details">
                            <div class="upper-box">
                                <div class="image-box">
                                    <figure>
                                        <img src="{{ asset($project->project_photo) }} " style="width: 100%; height:60%;">

                                    </figure>


                                </div>
                                
                            </div>
                            <div class="lower-box">

                                <div class="post-content">
                                    <h3>{{ $project->project_name }}</h3>
                                    <p>{{ $project->project_description }}
                                    </p>

                                </div>
                            </div>
                            {{-- <div class="share-post clearfix">
                                <div class="share-title">Share This</div>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div> --}}
                        </div>

                        <!--Comments Area-->


                    </div>

                </div>
                <!--End Content Side-->

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        
                     

                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-inner">
                                <h3>Categories</h3>
                                <div class="widget-content">
                                    <ul>@foreach($project_categories_fetch as $project_category)
                                        <li>
                                        
                                        <a class="clearfix" href="javascript::void()">
                                        {{ $project_category->project_category_name }} 
                                        {{-- <span class="count">93</span></a> --}}
                                        
                                        </li>
                                         @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>




                    </aside>
                </div>
                <!--End Sidebar Side-->
            </div>
        </div>
    </div>
@endsection
