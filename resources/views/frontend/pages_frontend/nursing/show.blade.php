@extends('frontend.layouts_frontend.master')

@section('title')
    Course Details
@endsection

@section('content')
 <div class="main-content">
           <div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{ asset('assets/frontend/images/breadcrumbs/9.png') }}" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Course Details</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>Dental</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->
            
            <!-- Profile Section -->
            <section class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70"> 
                <div class="container">                   
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-5 md-mb-50">
                            <div class="inner-column mb-50 md-mb-0">
                                <div class="image">
                                    <img src="{{ asset($course->course_photo) }}" alt="" />
                                </div>
                               
                            </div>
                        </div>                      
                        <!-- Content Section -->
                        <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                            <div class="inner-column">
                                <h2>School : {{ $course->course_school_category	 }}</h2>
                                <h4>Course: {{ $course->course_name	 }}</h4>
                                <!-- Student List -->
                                <ul class="student-list">
                                    <li>Duration: {{ $course->course_years	 }}</li> <br>
                                    <li>Course Level: {{ $course->course_level	 }}</li><br>
                                    <li>Course Price: {{ $course->course_price_range	 }}</li><br>
                                    <li>Course Level: {{ $course->course_level	 }}</li>
                                </ul>
                                <h5>Course Description</h5>
                                <p>{{ $course->description }}</p>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            
        </div> 
@endsection
