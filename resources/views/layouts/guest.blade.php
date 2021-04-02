<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" /> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}" />

    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    @yield('css')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
          $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
        });
     </script>
    @yield('js')

    <!-- Plugins -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('js/slider-index.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/images-loded.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    

</head>

@yield('body')
<body id="about" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
       <div class="loader">
          <img style="width: 150%" src="https://cdn.dribbble.com/users/765253/screenshots/2540865/loader.gif" alt="#" />
       </div>
    </div>
    <!-- END LOADER -->
    <div class="wrapper">
    <nav id="sidebar">
       <div class="menu_section">
          <ul>
             <li><a href="/home">Home</a></li>
             <li><a href="{{ route('complaints.index') }}">Complaint</a></li>
             <li><a href="/contact">Contact us</a></li>
          </ul>
       </div>
    </nav>
    <div id="content">
       <!-- Start header -->
       <header class="top-header">
          <div class="container">
             <div class="row">
                <div class="col-sm-6">
                   <div class="logo_main">
                      <a href="/home"><img style="width:15%" src="https://res-4.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco/o0yvvdlumh0rghybj9kx" /></a>
                   </div>
                </div>
                <div class="col-sm-6">
                   <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="{{ asset('images/menu_icon.png') }}"></button>
                </div>
             </div>
          </div>
       </header>
       <!-- End header -->
       <!-- Start Banner -->
       <!-- section -->
       <div class="section about_section layout_padding dash_bg">
           @yield('content')
       </div>
       <!-- end section -->
       <!-- Start Footer -->
       <footer class="footer-box">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="full">
                      <div class="heading_main text_align_center white_fonts margin-bottom_30">
                         <h2>Contact us</h2>
                      </div>
                   </div>
                </div>
             </div>
             <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                   <div class="full footer_blog f_icon_1">
                       <p>Address<br><small>No.117 Block 3, No.7 Persiaran Sukan<br>Laman Seri Business Park, Seksyen 13,<br>40100 Shah Alam, Malaysia.</small></p>
                   </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                   <div class="full footer_blog f_icon_2">
                      <p>Phone<br><small>03 8686 8869<br>03 8686 8869<br>Monday - Sunday<br>09:00 am - 06:00 pm</small></p>
                   </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                   <div class="full footer_blog f_icon_3">
                       <p>Email<br><small>mymedkad@medkad.com<br>24 X 7 online support</small></p>
                   </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                   <div class="full footer_blog_last">
                       <p>Social media</p>
                       <p>
                         <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                         </ul>
                       </p>
                   </div>
                </div>
            
             </div>
          </div>
       </footer>
       <!-- End Footer -->
    </div>
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
 </body>
</html>

</html>
