@extends('frontend.layouts_frontend.master')

@section('title')
    The International Paramedical Institute Maya
@endsection


@section('extra_styles')
@endsection
@section('content')
    <!-- Banner Section  Start -->

    <div class="rs-slider main-home">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
            data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
            data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
            data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
            data-md-device-nav="true" data-md-device-dots="false">



            <!-- Features Section start -->
            <div id="rs-features" class="rs-features main-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 md-mb-30">
                            <div class="features-wrap">
                                <div class="icon-part">
                                    <img src="{{ asset('assets/frontend/images/features/icon/3.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">
                                        <span class="watermark">5,320 online courses</span>
                                    </h4>
                                    <p class="dese">
                                        Enjoy a variety of fresh topics
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 md-mb-30">
                            <div class="features-wrap">
                                <div class="icon-part">
                                    <img src="{{ asset('assets/frontend/images/features/icon/2.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">
                                        <span class="watermark">Expert instruction</span>
                                    </h4>
                                    <p class="dese">
                                        Find the right instructor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="features-wrap">
                                <div class="icon-part">
                                    <img src="{{ asset('assets/frontend/images/features/icon/1.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">
                                        <span class="watermark">Lifetime access</span>
                                    </h4>
                                    <p class="dese">
                                        Learn on your schedule
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features Section End -->
        </div>



        <div class="rs-slider style1">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true"
                data-md-device-dots="false">

                <!-- Slider 1 -->
                <div class="slider-content slide1">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">Join one of the Best</div>
                        <h3 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                            Paramedical Institutions in Uganda</h3>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Slider 2 -->
                <div class="slider-content slide2">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">Practical Training With the </div>
                        <h3 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">Most Advanced Medical Equipment</h3>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Slider 3 -->
                <div class="slider-content slide3">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">Become a</div>
                        <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">Health Professional</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Slider 4 -->
                <div class="slider-content slide4">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">We Train Professionals </div>
                        <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">Ready for to Serve</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Slider 5 -->
                <div class="slider-content slide5">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">We Train Professionals </div>
                        <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">Ready to Serve</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Slider 6 -->
                <div class="slider-content slide6">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">We Train Professionals </div>
                        <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">Competetive for the Market</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Slider 7 -->
                <div class="slider-content slide7">
                    <div class="container">
                        <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms"
                            data-wow-duration="2000ms">We Care about Student Health</div>
                        <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms"> and well being through sports</h1>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 banner-style" href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Services Section Start -->
        <div class="rs-services style1">
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item overly1">
                        <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                        <div class="content-part">
                            <img src="{{ asset('assets/frontend/images/services/icons/1.png') }}" alt="">
                            <h4 class="title"><a href="#">Life at IPI</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item overly2">
                        <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                        <div class="content-part">
                            <img src="{{ asset('assets/frontend/images/services/icons/2.png') }}" alt="">
                            <h4 class="title"><a href="#">Graduation</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item overly3">
                        <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                        <div class="content-part">
                            <img src="{{ asset('assets/frontend/images/services/icons/3.png') }}" alt="">
                            <h4 class="title"><a href="#">Sports</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item overly4">
                        <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                        <div class="content-part">
                            <img src="{{ asset('assets/frontend/images/services/icons/1.png') }}" alt="">
                            <h4 class="title"><a href="#">Social</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12 pr-50 md-pr-15">
                        <div class="about-part">
                            <div class="sec-title mb-40">
                                <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms"
                                    data-wow-duration="2000ms">About Us</div>
                                <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">The
                                    International Paramedical Institute - IPI </h2>
                                <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">IPI is a
                                    science institution, training dental professionals, clinical officers and many other
                                    health care courses. It is founded by Bunawona Uganda Community Outreach (BUCO) which is
                                    determined to help, treat and prevent oral conditions and many other health care
                                    problems in Uganda. It has a modern and spacious dental clinic, medical laboratories,
                                    dormitories, Medical equipment, classrooms and well stalked library and computer
                                    laboratory.</div>

                            </div>
                            <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/about/ceo1.png') }}" alt="CEO Image">
                                </div>
                                <div class="author-part">
                                    {{-- <span class="sign mb-10"><img
                                            src="{{ asset('assets/frontend/images/about/sign.png') }}"
                                            alt="Sign"></span> --}}
                                    <span class="post">PRESIDENT Dr.Steven S Sseruyange</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

      

        <!-- Services Section Start -->
        <div class="rs-services style2 pt-100 md-pt-80">
            <div class="container">
                <div class="row y-middle mb-50 md-mb-30">
                    <div class="col-md-6 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title primary">Top Courses</div>
                            <h2 class="title mb-0">Popular Courses</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-part text-right sm-text-left">
                            <a href="#" class="readon">View Course Details </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 md-mb-30">
                        <div class="service-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-document"></i></span>
                                <h4 class="title"><a href="#">Paramedical School</a></h4>
                                <p class="desc">Clinical, Public Health, Pharmacy e.t.c</p>
                                <a class="service-btn" href="/about">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="service-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-document"></i></span>
                                <h4 class="title"><a href="#">Dental School</a></h4>
                                <p class="desc">Get Training in Dentisty</p>
                                <a class="service-btn" href="/dental">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-bag"></i></span>
                                <h4 class="title"><a href="#">Nursing School</a></h4>
                                <p class="desc">Get Trained in Nursing and Midwifery</p>
                                <a class="service-btn" href="/nursing">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Dental Courses -->
        <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
            <div class="container">
                <div class="row y-middle mb-50 md-mb-30">


                    <div class="col-md-6 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title primary">IPI Courses</div>
                            <h2 class="title mb-0"> Nursing   at IPI Paramedical</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-part text-right sm-text-left">
                            <a href="/paramedical" class="readon">View All Courses</a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    {{-- start dental course --}}
                    @foreach ($paramedic_courses as $paramedic_course)
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="2000ms">
                            <center>
                                <div class="courses-item">
                                    <div class="img-part">
                                        <img src="{{ asset($paramedic_course->course_photo) }}" alt=""
                                        style="height:300px !important; width:350px !important; margin-left:20px; object-fit: cover;"

                                        
                                        >
                                    </div>
                                    <div class="content-part">

                                        <ul class="meta-part">
                                            <li>
                                                <p style="margin-bottom:-1px;">{{ $paramedic_course->course_level }}</p>
                                            </li>
                                            <li><span class="price">UGX. {{ $paramedic_course->course_price_range }} </span>
                                            </li>
                                        </ul>

                                        <h3 class="title"><a href="#">{{ $paramedic_course->course_name }}</a></h3>
                                        <a href="{{ route('paramedical.show', $paramedic_course->id) }}"> View Details <i
                                                class="flaticon-right-arrow"></i></a>

                                    </div>
                                </div>
                            </center>
                        </div>
                    @endforeach

                    {{--  end of dental course --}}




                </div>
            </div>
        </div>

        <!-- End dental courses -->

        {{-- Nursing courses --}}

        <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 ">
            <div class="container">
                <div class="row y-middle mb-50 md-mb-30">


                    <div class="col-md-6 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title primary">IPI Courses</div>
                            <h2 class="title mb-0">Nursing Courses offered at IPI</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-part text-right sm-text-left">
                            <a href="/nursing" class="readon">View All Courses</a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    {{-- start dental course --}}
                    @foreach ($nursing_courses as $nurse_course)
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="2000ms">
                            <center>
                                <div class="courses-item">
                                    <div class="img-part">
                                        <img src="{{ asset($nurse_course->course_photo) }}" alt=""
                                       style="height:300px !important; width:350px !important; margin-left:20px; object-fit: cover;"
                                        
                                        >
                                    </div>
                                    <div class="content-part">

                                        <ul class="meta-part">
                                            <li>
                                                <p style="margin-bottom:-1px;">{{ $nurse_course->course_level }}</p>
                                            </li>
                                            <li><span class="price">UGX. {{ $nurse_course->course_price_range }} </span>
                                            </li>
                                        </ul>

                                        <h3 class="title"><a href="#">{{ $nurse_course->course_name }}</a></h3>
                                        <a href="{{ route('nursing.show', $nurse_course->id) }}"> View Details <i
                                                class="flaticon-right-arrow"></i></a>

                                    </div>
                                </div>
                            </center>
                        </div>
                    @endforeach

                    {{--  end of dental course --}}




                </div>
            </div>
        </div>
        {{-- End nursing courses --}}

        <div class="row section-wrap"></div>
        <!-- CTA Section Start -->
        <div class="rs-cta section-wrap gray-bg">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-part">
                        <img src="{{ asset('assets/frontend/images/cta/home2.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <div class="content">
                        <div class="sec-title mb-40 ">
                            <h2 class="title">Admissions Open </h2>
                            <div class="desc">Feel free to contact us any time by phone, email or through our social
                                media platforms for more information on how to get addmitted</div>
                        </div>
                        <div class="btn-part">
                            <a class="readon banner-style uppercase"
                                href="https://docs.google.com/forms/d/e/1FAIpQLSew5o5TV6xKQyVTgYFfiSwWbrwDpgs_oi_EMRpXIV_mC0HMyw/viewform">Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->

        <!-- Faq Section Start -->
        <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 padding-0">
                        <div class="main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                            <div class="faq-content">
                                <div id="accordion" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Why Coose us
                                                ?</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Look at some of these Frequently asked Questions, for some answers
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">

                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="false">Recognition & Reputation</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                Is IPI a recognized / Registered institution ?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">

                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree"
                                                aria-expanded="false">What are the Requirements to Join ?</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion"
                                            style="">
                                            <div class="card-body">
                                                What are the minimun qualifications for any course at IPI
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">

                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour"
                                                aria-expanded="false">Any Branches?</a>
                                        </div>
                                        <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                Does IPI have other Branches ?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 padding-0">
                        <div class="img-part media-icon">
                            <!-- <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI"> -->

                            <a class="popup-videos" href="#">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq Section Start -->

        

        <!-- Testimonial Section Start -->
        {{-- <div class="rs-testimonial home-style1 pt-100 pb-100 md-pt-70 md-pb-70" id="rs-testimonial">
            <div class="container">
                <div class="sec-title mb-50 md-mb-30 text-center">
                    <div class="sub-title primary">Testimonial</div>
                    <h2 class="title mb-0">What Students are Saying</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="2"
                    data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="1"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2"
                    data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false">
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">I work
                                as a pharmacy assistant at Central Pharmacy in Kawempe after aquiring skills from IPI. Thank
                                you IPI for giving me the best</div>
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">kisakye mariam</a>
                            <span class="designation">Student</span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">At IPI
                                i learnt practical skills in medical laboratory having completed my Diploma in Medical
                                Laboratory. Our Library was full of the best reading materials and e-books that i used. And
                                the laboratory was easily accessible</div>
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">ssentamu andrew</a>
                            <span class="designation">Student</span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">Having
                                completed my Certificate in Nursing, i was immediately employed at True Homes Childrens
                                Clinic as a nurse. I thank my teachers at IPI for giving me a comprehensive nursing training
                                and life skills that have enabled me succeed at my work place.
                                Our Clients.</div>
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend/images/testimonial/style5/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">nansubuga rhona</a>
                            <span class="designation">Former Student</span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{ asset('assets/frontend/images/testimonial/style5/quote2000.png') }}"
                                    alt="">More testimonials here ...</div>
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend/images/testimonial/style5/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">Mahadi Monsura</a>
                            <span class="designation">Student</span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{ asset('assets/frontend/images/testimonial/style5/quote20000.png') }}"
                                    alt="">More testimonials here ...</div>
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend/images/testimonial/style5/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">Alex Fenando</a>
                            <span class="designation">English Teacher</span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{ asset('assets/frontend/images/testimonial/style5/quote24444.png') }}"
                                    alt="">More testimonials here ...</div>
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend/images/testimonial/style5/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">Losis Dcosta</a>
                            <span class="designation">Math Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial Section End -->



    </div>
    <!-- Section bg Wrap 2 End -->
@endsection
