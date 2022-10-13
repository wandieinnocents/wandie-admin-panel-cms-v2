@extends('frontend.layouts_frontend.master')

@section('title')
    Nursing
@endsection

@section('content')
         <!-- Banner Section Start -->            
           <div id="rs-banner" class="rs-banner style7">
            <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="banner-content">
                             <h1 class="banner-title white-color">Welcome to IPI Nursing School</h1>
                             <div class="desc white-color mb-50">
                                 We Train students in Nursing Sciences
                             </div>
                             <div class="btn-part">
                                 <a class="readon border-less" href="#">Get Started Now</a>
                             </div>
                         </div>
                         <div class="icons one up-down">
                             <img src="assets/frontend/images/banner/home7/icon/2.png" alt="Images">
                         </div> 
                         <div class="icons two left-right">
                             <img src="assets/frontend/images/banner/home7/icon/1.png" alt="Images">
                         </div> 
                         <div class="icons three left-right">
                             <img src="assets/frontend/images/banner/home7/icon/1.png" alt="Images">
                         </div> 
                         <div class="icons four up-down">
                             <img src="assets/frontend/images/banner/home7/icon/2.png" alt="Images">
                         </div>
                     </div>
                     <div class="offset-lg-6"></div>
                 </div>
            </div>
            {{-- <div class="img-part">
                <img src="assets/frontend/images/banner/home7/nursing.png" style=" box-shadow: 0 0 100px 100px green inset;" alt="Images">
            </div> --}}
        </div>
         <!-- Banner Section End -->

            <!-- Breadcrumbs End -->

            <!-- Popular Courses Section Start -->
          <div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                    {{-- start dental loop --}}
                    @foreach($nursing_courses as $nursing_course)
                        
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="{{ asset($nursing_course->course_photo) }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 
                                 <ul class="meta-part">
                                     <li><span class="price">Level: {{ $nursing_course->course_level }} </span></li>
                                 </ul>
                                 {{-- level --}}
                                
                                 <ul class="meta-part">
                                     <li><span class="price">Fees : {{ $nursing_course->course_price_range }} UGX</span></li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">
                                            {{ $nursing_course->course_name }}
                                        </a>
                                    </h3>
                                    <div class="btn-part">
                                            <a href="{{ route('nursing.show',$nursing_course->id) }}">View Details <i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- end dental course loop --}}
                     
                        
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
@endsection
