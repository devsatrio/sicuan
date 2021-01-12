<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Axuta is a colofull app landing page template">
    <meta name="author" content="TeamXcel">
    @php
    $data_setting = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
    @endphp

    @foreach($data_setting as $set)
    <title>{{$set->singkatan}}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/setting/'.$set->favicon)}}">
    @endforeach
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/elegant-font-icons.css')}}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/elegant-line-icons.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper.min.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">

    <script src="{{asset('assets/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body data-spy="scroll" data-target="#navmenu" data-offset="70">

    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- Preloader -->

    <header id="header" class="header-section" style="background-color: #38af55;">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="navbar-brand" style="color: white;"><img src="{{asset('logo/logo3.png')}}" style="width:10%;" alt="Axuta"> Klik Desa</a>
                <div class="d-flex menu-wrap">
                    <ul class="nav" >
                        <li><a data-scroll class="nav-link active text-white" href="{{url('/')}}#home">Home</a></li>
                        <li><a data-scroll class="nav-link text-white" href="{{url('/')}}#feature">Fitur</a></li>
                        <li><a data-scroll class="nav-link text-white" href="{{url('/')}}#screenshots">Screenshot</a></li>
                        <li><a data-scroll class="nav-link text-white" href="{{url('/')}}#download">Download</a></li>
                        <li><a data-scroll class="nav-link text-white" href="{{url('/')}}#artikel">Artikel</a></li>
                        <li><a data-scroll class="nav-link text-white" href="{{url('/')}}#galeri">Galeri</a></li>
                    </ul>
                    <div class="header-btn">
                        <a href="#contact" data-scroll class="default-btn">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </header><!-- Header Section -->

    @yield('content')

    

    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

    <!-- jQuery Lib -->
    <script src="{{asset('assets/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/frontend/js/vendor/bootstrap.min.js')}}"></script>
    <!-- Tether JS -->
    <script src="{{asset('assets/frontend/js/vendor/tether.min.js')}}"></script>
    <!-- Slicknav JS -->
    <script src="{{asset('assets/frontend/js/vendor/jquery.slicknav.min.js')}}"></script>
    <!-- OWL-Carousel JS -->
    <script src="{{asset('assets/frontend/js/vendor/owl.carousel.min.js')}}"></script>
    <!-- Swiper JS -->
    <script src="{{asset('assets/frontend/js/vendor/swiper.min.js')}}"></script>
    <!-- Smooth Scroll JS -->
    <script src="{{asset('assets/frontend/js/vendor/smooth-scroll.min.js')}}"></script>
    <!-- Ajaxchimp JS -->
    <script src="{{asset('assets/frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Wow JS -->
    <script src="{{asset('assets/frontend/js/vendor/wow.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

</body>

</html>