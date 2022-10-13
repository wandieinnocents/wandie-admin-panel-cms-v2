@extends('frontend.layouts_frontend.master')

@section('title')
    Volunteer
@endsection

@section('content')
  
   <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/frontend/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Volunteer</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Volunteer</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

           <section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                        
                        <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Want to Volunteer with us ?</h2>
                            <h6>Register Here</h6>
                        </div>
                        
                        <!-- Login Form -->
                        <div class="styled-form">
                            <div id="form-messages"></div>
                            {{-- success message --}}
                                 @if(session()->has('message'))
                                    <div class="alert alert-info">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            <form method="post" action="{{ route('join_volunteers.store') }}" enctype="multipart/form-data">  
                            @csrf                          
                                <div class="row clearfix">                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 mb-25">
                                        <input type="text" id="Name" name="volunteer_name" value="" placeholder="Full Name" required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <!-- <div class="form-group col-lg-12">
                                        <input type="text" id="last" name="lname" value="" placeholder="Last Name" required>
                                    </div> -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="volunteer_email" value="" placeholder="Email address " required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="number" id="user" name="volunteer_phone" value="" placeholder="Phone Number" required>
                                    </div>    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="education" name="volunteer_level_of_education" value="" placeholder="Education Level" required>
                                    </div>   

                                     <div class="form-group col-lg-12">
                                        <input type="text" id="education" name="volunteer_address" value="" placeholder="Address" required>
                                    </div>   

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="date" id="Confirm" name="volunteer_dob" value="date" placeholder="Date Of Birth" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <h5>Upload Your Photo here</h5>
                                        <input type="file" id="photo" name="volunteer_photo" value="" placeholder="Volunteer Photo" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea id="message" name="volunteer_reason_to_join" value="" placeholder="Leave Your message here" required></textarea>
                                    </div>
                                    {{-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="row clearfix">
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-1"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-2"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-3"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                                <div class="check-box">
                                                    <input type="checkbox" name="remember-password" id="type-4"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn" style="background-color: blue;"><span class="txt">SUBMIT YOUR DETAILS</span></button>
                                    </div>
                                    
                                    <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">Already have an account? <a href="login.html">Sign In</a></div>
                                    </div> -->
                                    
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                   
                </div>
            </section>


@endsection
