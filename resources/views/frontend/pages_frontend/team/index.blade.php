@extends('frontend.layouts_frontend.master')

@section('title')
    Our Team
@endsection

@section('content')

	<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="assets/frontend/images/breadcrumbs/8.png" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">About Us</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>About Us</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->
			
			<!-- About Section End -->

            <!-- Team Section Start -->
            <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30">
                        <div class="sub-title blue">Staff</div>
                        <h2 class="title mb-0">Meet our Team of Expert Staff</h2>
                </div>
                    <div class="row">
					{{-- start team loop --}}
					@foreach($teams as $team)
						
					
                        <div class="col-lg-4 col-sm-6 mb-30">

                            <div class="team-item">
                                {{-- <img src="assets/frontend/images/team/1.jpg" alt=""> --}}
								@if ($team->team_photo)
                                        <a href="{!! asset($team->team_photo) !!}" target="_blank">
                                            <img 
                                                
                                                src="{{ asset($team->team_photo) }}" alt="preview"
                                                style="height:350px !important; width:350px !important; margin-left:20px; object-fit: cover;"
"
												>
                                        </a>
                                    @else
                                        <p class="text-danger">No Photo</p>
                                    @endif
								
                                <div class="content-part">
                                    <h4 class="name"><a href="javascript::void(0)">{{ $team->team_name }}</a></h4>
								    <span class="designation">{{ $team->team_role }}</span>
                                    {{-- <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>

					@endforeach
					{{-- end team loop --}}
                       
                       
                       
					
                    </div>
                </div>
            </div>
            <!-- Team Section End -->
    
@endsection
