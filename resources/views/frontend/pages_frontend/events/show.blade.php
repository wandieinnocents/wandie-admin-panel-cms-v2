@extends('frontend.layouts_frontend.master')

@section('title')
    Event Details
@endsection

@section('content')
 <div class="main-content">
           <div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{ asset('assets/frontend/images/breadcrumbs/13.png') }}" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Event Details</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>Events</li>
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
                                    <img src="{{ asset($event->event_photo) }}" alt="" />
                                </div>
                               
                            </div>
                        </div>                      
                        <!-- Content Section -->
                        <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                            <div class="inner-column">
                                <h2>Event : {{ $event->event_name	 }}</h2>
                                <h4>Location: {{ $event->event_location	 }}</h4>
                                <ul class="student-list">
                                    <li>Start date: {{ $event->event_start_date	 }}</li> <br>
                                    <li>End Date: {{ $event->event_start_date	 }}</li><br>
                                </ul>
                                <h5>Event Description</h5>
                                <p>{{ $event->event_description }}</p>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            
        </div> 
@endsection
