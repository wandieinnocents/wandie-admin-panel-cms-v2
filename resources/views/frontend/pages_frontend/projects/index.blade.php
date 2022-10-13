@extends('frontend.layouts_frontend.master')

@section('title')
    Projects
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
                    <li><a href="/">Home</a></li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <section class="causes-section causes-page load-more-section" data-load-number="3">
        <div class="auto-container">
            <div class="row clearfix">

                {{-- FETCH PROJECTS --}}
                @foreach ($projects as $project)
                    <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms"
                            style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="image-box">
                                <figure>
                                    <img src="{{ asset($project->project_photo) }} "
                                        style="max-width: 500px; height: 300px;">

                                </figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="our_projects/{{ $project->id }}">{{ $project->project_name }}</a></h3>
                                <div class="cause-title"><span
                                        class="badge badge-success">{{ $project->project_category_r->project_category_name }}</span>
                                </div>
                                <div class="text">{{ $project->project_description }}</div>
                            </div>
                            <div class="link-box"><a href="our_projects/{{ $project->id }}"
                                    class="theme-btn btn-style-two"><span class="btn-title">View Details</span></a></div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
