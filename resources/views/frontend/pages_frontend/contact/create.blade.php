@extends('frontend.layouts_frontend.master')

@section('title')
    Contact Us
@endsection

@section('content')

 <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/frontend/images/breadcrumbs/6.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title">Contact </h1>
                    <ul>
                        <li>
                            <a class="active" href="index2.html">Home</a>
                        </li>
                        <li>Contact </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row contact-address-section">
        				<div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
        					<div class="contact-info contact-address">
        						<div class="icon-part">
        							<i class="fa fa-map-marker" style="color: blue;"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Address</h5>
	        						<h4 class="info-title">Maya - Nakirebe along Kampala <br>Masaka Road </h4>
	        					</div>
        					</div>
        				</div>
        				<div class=" col-lg-4 col-md-12 md-mb-30">
        					<div class="contact-info contact-mail">
        						<div class="icon-part">
        							<i class="fa fa-envelope-o" style="color: blue;"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Email Address</h5>
	        						<h4 class="info-title"><a href="mailto:info.ipim@gmail.com">info.ipim@gmail.com</a></h4>
	        					</div>
        					</div>
        				</div>
        				<div class=" col-lg-4 col-md-12 lg-pr-0">
        					<div class="contact-info contact-phone">
        						<div class="icon-part">
        							<i class="fa fa-user-o" style="color: blue;"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Phone Number</h5>
	        						<h4 class="info-title"><a href="tel%2b0885898745.html">+256-392 00 1503  +256-704789181 +256-775 534 797</a></h4>
	        					</div>
        					</div>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-lg-5 md-mb-30">
            				<div class="contact-map2">
                               <iframe src="https://maps.google.com/maps?q=Maya%20%E2%80%93%20Nakirebe%20&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                            </div>
            			</div>
            			<div class="col-lg-7 pl-30 lg-pl-15">
			        	    <div class="rs-quick-contact new-style">
                                <div class="inner-part mb-50">
                                    <h2 class="title mb-15">Get In Touch</h2>
                                    <p>Get in touch with us using out ohone numbers, email , P.O Box or google map</p>
                                </div>
                                <div id="form-messages"></div>
                                {{-- success message --}}
                                 @if(session()->has('message'))
                                    <div class="alert alert-info">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form  method="post" action="{{ route('contact.store') }}">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                        </div>   
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                        </div>   
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                        </div>
                                     
                                        <div class="col-lg-12 mb-50">
                                            <textarea class="from-control" id="message" name="description" placeholder=" Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn-send" style="background-color: blue;" type="submit" value="Submit Now">
                                    </div>       
                                </form>
                            </div>
                        </div> 
            		</div>
            	</div>
            </div>
            <!-- Contact Section End --> 
    
@endsection
