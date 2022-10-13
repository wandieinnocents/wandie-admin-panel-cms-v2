<!DOCTYPE html>
<html lang="zxx">  
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/fav.png') }}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/off-canvas.css') }}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/linea-fonts.css') }}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/flaticon.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}">
        <!-- banner css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/banner.css') }}">
         <!-- Payment gateway link -->
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <script src="{{ asset('assets/frontend/js/makePayment.js') }}"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('extra_styles')
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        {{-- <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{ asset('assets/frontend/images/pre-logo.png') }}" alt="">
                </div>
            </div>
        </div> --}}
        <!--Preloader area End here--> 


        <!--Full width header Start-->
        <div class="full-width-header header-style1 home1-modifiy">
            <!--Header Start-->
            @include('frontend.includes_frontend.header_frontend')
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
           @yield('content')
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        @include('frontend.includes_frontend.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('assets/frontend/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('assets/frontend/js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('assets/frontend/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
        <!-- Slick js -->
        <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('assets/frontend/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>        
         <!-- counter top js -->
        <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
        <!-- video js -->
        <script src="{{ asset('assets/frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/frontend/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    </body>

</html>