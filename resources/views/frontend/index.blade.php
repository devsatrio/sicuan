<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    @foreach($webset as $ws)
    <title>{{$ws->singkatan}}</title>
    <link rel="shortcut icon" href="{{asset('images/setting/'.$ws->favicon)}}" type="image/png">
    @endforeach

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
</head>

<body>
    <header class="header-area pt-0 pb-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{url('/')}}" style="width:80%">
                    @foreach($webset as $ws)
                    <img src="{{asset('images/setting/'.$ws->logo)}}" alt="Logo" width="25%">
                    @endforeach
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="active"><a class="page-scroll" href="#home">Home</a></li>
                        <li><a class="page-scroll" href="#features">Features</a></li>
                        <li><a class="page-scroll" href="#profile">Profile</a></li>
                        <li><a class="page-scroll" href="#screenshot">Interface</a></li>
                        <li><a class="page-scroll" href="#screenshot">Galeri</a></li>
                        <li><a class="page-scroll" href="#blog">Artikel</a></li>
                    </ul>
                    <div class="navbar-btn">
                        <a href="#footer" class="main-btn page-scroll">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section id="home" class="banner-area">
        <div class="banner-shape-1">
            <img src="{{asset('assets/frontend/images/shape/shape-2.jpg')}}" alt="Shape">
        </div>
        <div class="banner-shape-2">
            <img src="{{asset('assets/frontend/images/shape/shape-1.png')}}" alt="Shape">
        </div>
        <div class="banner-shape-3">
            <img src="{{asset('assets/frontend/images/shape/dots.png')}}" alt="Shape">
        </div>

        <div class="banner-content-wrapper">
            <div class="container">
                @foreach($slider as $sld)
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h2 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">{{$sld->judul}}</h2>
                            <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.6s">
                            {{$sld->isi}}
                            </p>
                            @if($sld->link!='')
                            <a target="blank()" href="{{$sld->link}}" class="mt-3 main-btn main-btn-2">{{$sld->link_text}}</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <img src="{{asset('images/slider/thumbnail/'.$sld->gambar)}}" alt="App" width="100%">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="banner-counter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="counter-title text-center">
                            <h6 class="title">Numbers Speaks Everything</h6>
                        </div>
                    </div>
                </div>
                <div class="counter-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count">4789</strong><span>/</span>
                                    Downloads</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count">6400</strong><span>/</span>
                                    Likes</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count">900</strong><span>/</span> 5 Start
                                    Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Banner Ends ======-->

    <!--====== Features Start ======-->

    <section id="features" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Providing Best Services</p>
                        <h2 class="title">Our Features List</h2>
                    </div>
                </div>
            </div>
            <div class="features-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features features-1 wow fadeInUpBig" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <span class="features-number">01</span>
                            <div class="features-icon">
                                <i class="flaticon-smartphone-2"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">High Creative App Display</a></h4>
                                <p>There are many variations of passages of lore ipsum but majority have suffered.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-2 wow fadeInUpBig" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <span class="features-number">02</span>
                            <div class="features-icon">
                                <i class="flaticon-smartphone"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">High Creative App Display</a></h4>
                                <p>There are many variations of passages of lore ipsum but majority have suffered.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-3 wow fadeInUpBig" data-wow-duration="1s"
                            data-wow-delay="0.8s">
                            <span class="features-number">03</span>
                            <div class="features-icon">
                                <i class="flaticon-smartphone-1"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">High Creative App Display</a></h4>
                                <p>There are many variations of passages of lore ipsum but majority have suffered.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Features Ends ======-->

    <!--====== Powerful Tools Start ======-->

    <section id="powerful" class="powerful-tools-area">
        <div class="powerful-shape shape-1"></div>
        <div class="powerful-shape shape-2">
            <img src="{{asset('assets/frontend/images/shape/shape-5.png')}}" alt="">
        </div>

        <div class="container">
            <div class="powerful-tools-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="powerful-image mt-50 wow fadeInLeftBig" data-wow-duration="1s"
                            data-wow-delay="0.3s">
                            <div class="image">
                                <img src="{{asset('assets/frontend/images/powerful-app.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="powerful-tools-content mt-50">
                            <div class="section-title">
                                <p class="sub-title">Providing Best Services</p>
                                <h2 class="title">Powerful tools for your customers</h2>
                            </div>
                            <div class="powerful-content-wrapper">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur.</p>
                                <ul class="content-list">
                                    <li><i class="fas fa-check"></i> Refresing to get such a personal touch. </li>
                                    <li><i class="fas fa-check"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate.</li>
                                    <li><i class="fas fa-check"></i> Velit esse cillum dolore eu fugiat nulla pariatur.
                                    </li>
                                </ul>
                                <a href="#" class="main-btn main-btn-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Powerful Tools Ends ======-->

    <!--====== Discover Start ======-->

    <section id="discover" class="discover-area">
        <div class="discover-shape shape-1">
            <img src="{{asset('assets/frontend/images/shape/dots-2.png')}}" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="discover-content-wrapper">
                        <div class="section-title">
                            <p class="sub-title">Providing Best Services</p>
                            <h2 class="title">Discover more new app feature options</h2>
                        </div>
                        <div class="discover-items">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-item item-1">
                                        <div class="item-icon">
                                            <i class="flaticon-strategy"></i>
                                        </div>
                                        <div class="item-text">
                                            <h4 class="title">Business Strategy</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-item item-2">
                                        <div class="item-icon">
                                            <i class="flaticon-training"></i>
                                        </div>
                                        <div class="item-text">
                                            <h4 class="title">Online Marketing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-item item-3">
                                        <div class="item-icon">
                                            <i class="flaticon-human-resources"></i>
                                        </div>
                                        <div class="item-text">
                                            <h4 class="title">Consumer Products</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="discover-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since.</p>
                            <a href="#" class="main-btn main-btn-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="discover-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="image">
                <img src="{{asset('assets/frontend/images/discover-image.jpg')}}" alt="">
            </div>
        </div>
    </section>

    <!--====== Discover Ends ======-->

    <!--====== Everything Start ======-->

    <section id="everything" class="everything-area">
        <div class="everything-shape shape-1"></div>
        <div class="everything-shape shape-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="everything-image mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="image">
                            <img src="{{asset('assets/frontend/images/everything.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="everything-content-wrapper mt-50">
                        <div class="section-title">
                            <p class="sub-title">Providing Best Services</p>
                            <h2 class="title">Everything you need to grow your app</h2>
                        </div>
                        <div class="everything-content">
                            <ul class="everything-items">
                                <li>
                                    <span>01</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an
                                        unknown printer took a galley of type and scrambled it to make. </p>
                                </li>
                                <li>
                                    <span>02</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </li>
                            </ul>
                            <a href="#" class="main-btn main-btn-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Everything Ends ======-->

    <!--====== Pricing Start ======-->

    <section id="profile" class="pricing-area">
        <div class="pricing-shape shape-1">
            <img src="{{asset('assets/frontend/images/shape/dots-3.png')}}" alt="">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Providing Best Services</p>
                        <h2 class="title">Our Features List</h2>
                    </div>
                </div>
            </div>
            <div class="pricing-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-pricing pricing-1 text-center wow fadeInLeftBig" data-wow-duration="1s"
                            data-wow-delay="0.4s">
                            <div class="pricing-icon">
                                <i class="flaticon-send"></i>
                            </div>
                            <div class="pricing-price">
                                <h5 class="sub-title">Silver Package</h5>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="pricing-body">
                                <ul class="pricing-list">
                                    <li><i class="fas fa-check"></i> Extra features</li>
                                    <li><i class="fas fa-check"></i> Lifetime free support</li>
                                    <li><i class="fas fa-check"></i> Upgrate options</li>
                                    <li><i class="fas fa-check"></i> Full access</li>
                                </ul>
                                <a href="#" class="main-btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-pricing pricing-2 text-center wow fadeInUpBig" data-wow-duration="1s"
                            data-wow-delay="0.4s">
                            <div class="pricing-icon">
                                <i class="flaticon-shuttle"></i>
                            </div>
                            <div class="pricing-price">
                                <h5 class="sub-title">Gold Package</h5>
                                <span class="price">$30.00</span>
                            </div>
                            <div class="pricing-body">
                                <ul class="pricing-list">
                                    <li><i class="fas fa-check"></i> Extra features</li>
                                    <li><i class="fas fa-check"></i> Lifetime free support</li>
                                    <li><i class="fas fa-check"></i> Upgrate options</li>
                                    <li><i class="fas fa-check"></i> Full access</li>
                                </ul>
                                <a href="#" class="main-btn main-btn-2">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-pricing pricing-3 text-center wow fadeInRightBig" data-wow-duration="1s"
                            data-wow-delay="0.4s">
                            <div class="pricing-icon">
                                <i class="flaticon-plane"></i>
                            </div>
                            <div class="pricing-price">
                                <h5 class="sub-title">Platinum Package</h5>
                                <span class="price">$40.00</span>
                            </div>
                            <div class="pricing-body">
                                <ul class="pricing-list">
                                    <li><i class="fas fa-check"></i> Extra features</li>
                                    <li><i class="fas fa-check"></i> Lifetime free support</li>
                                    <li><i class="fas fa-check"></i> Upgrate options</li>
                                    <li><i class="fas fa-check"></i> Full access</li>
                                </ul>
                                <a href="#" class="main-btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Pricing Ends ======-->

    <!--====== Testimonial Start ======-->

    <section id="testimonial" class="testimonial-area bg_cover"
        style="background-image: url(assets/images/testimonial-bg.jpg);">
        <div class="testimonial-shape shape-1"></div>
        <div class="testimonial-shape shape-2"></div>

        <div class="testimonial-wrapper">
            <div class="author-1">
                <img src="{{asset('assets/frontend/images/author-1.jpg')}}" alt="">
            </div>
            <div class="author-2">
                <img src="{{asset('assets/frontend/images/author-2.jpg')}}" alt="">
            </div>
            <div class="author-3">
                <img src="{{asset('assets/frontend/images/author-3.jpg')}}" alt="">
            </div>
            <div class="author-4">
                <img src="{{asset('assets/frontend/images/author-4.jpg')}}" alt="">
            </div>

            <div class="author-5">
                <img src="{{asset('assets/frontend/images/author-5.jpg')}}" alt="">
            </div>
            <div class="author-6">
                <img src="{{asset('assets/frontend/images/author-6.jpg')}}" alt="">
            </div>
            <div class="author-7">
                <img src="{{asset('assets/frontend/images/author-7.jpg')}}" alt="">
            </div>
            <div class="author-8">
                <img src="{{asset('assets/frontend/images/author-8.jpg')}}" alt="">
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Check Our Client Feedbacks</p>
                        <h2 class="title">What they are saying</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="testimonial-bg">
                        <div class="testimonial-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-testimonial text-center">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h5 class="author-name">Shirley Smith</h5>
                                </div>
                                <div class="swiper-slide single-testimonial text-center">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h5 class="author-name">Jon Smith</h5>
                                </div>
                                <div class="swiper-slide single-testimonial text-center">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h5 class="author-name">Rose Smith</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Testimonial Ends ======-->

    <!--====== Screenshot Start ======-->

    <section id="screenshot" class="screenshot-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Application Screenshots</p>
                        <h2 class="title">Check Interface Look</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom-container">
            <div class="screenshot-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/1.png')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/2.png')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/3.png')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/4.png')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/5.png')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/6.png')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('assets/frontend/images/screens/7.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="screenshot-pagination"></div>
        </div>
    </section>

    <!--====== Screenshot Ends ======-->

    <!--====== FAQ's Start ======-->

    <section id="faq" class="faq-area">
        <div class="faq-shape shape-1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <img src="{{asset('assets/frontend/images/shape/shape-6.png')}}" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content-left mt-45">
                        <div class="section-title">
                            <p class="sub-title">Frequently Asked Question</p>
                            <h2 class="title">Do you’ve any questions?</h2>
                        </div>
                        <p>There are many variations of passag of available but majority have in some by inject. </p>

                        <img src="{{asset('assets/frontend/images/faq.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="faq-accordion mt-50">
                        <div class="accordion" id="accordionFaq">
                            <div class="card">
                                <div class="card-header">
                                    <a href="" data-toggle="collapse" data-target="#collapseOne">Pre and post launch
                                        mobile app marketing pitfalls to avoid</a>
                                </div>

                                <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>There are many variations of passages of available but majority have
                                            alteration in some by inject humour or random words. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo">Pre
                                        and post launch mobile app marketing pitfalls to avoid</a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>There are many variations of passages of available but majority have
                                            alteration in some by inject humour or random words. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="collapsed" data-toggle="collapse"
                                        data-target="#collapseThree">Pre and post launch mobile app marketing pitfalls
                                        to avoid</a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>There are many variations of passages of available but majority have
                                            alteration in some by inject humour or random words. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour">Pre
                                        and post launch mobile app marketing pitfalls to avoid</a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>There are many variations of passages of available but majority have
                                            alteration in some by inject humour or random words. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== FAQ's Ends ======-->

    <!--====== Blog Start ======-->

    <section id="blog" class="blog-area">
        <div class="blog-shape shape-1"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">From the Blog</p>
                        <h2 class="title">News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-4 blog-col">
                        <div class="single-blog mt-55 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <a href="blog-details.html"><img
                                        src="{{asset('assets/frontend/images/blog/blog-1.jpg')}}" alt=""></a>
                                <span class="date">30 July, 2020</span>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Pre and post launch mobile app
                                        marketing</a></h4>
                                <p>There are many variations of passages of available but majority have alteration in
                                    some by inject words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 blog-col">
                        <div class="single-blog mt-55 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <a href="blog-details.html"><img
                                        src="{{asset('assets/frontend/images/blog/blog-2.jpg')}}" alt=""></a>
                                <span class="date">30 July, 2020</span>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Pre and post launch mobile app
                                        marketing</a></h4>
                                <p>There are many variations of passages of available but majority have alteration in
                                    some by inject words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 blog-col">
                        <div class="single-blog mt-55 wow fadeInRightBig" data-wow-duration="1.3s"
                            data-wow-delay="0.4s">
                            <div class="blog-image">
                                <a href="blog-details.html"><img
                                        src="{{asset('assets/frontend/images/blog/blog-3.jpg')}}" alt=""></a>
                                <span class="date">30 July, 2020</span>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Pre and post launch mobile app
                                        marketing</a></h4>
                                <p>There are many variations of passages of available but majority have alteration in
                                    some by inject words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Ends ======-->

    <!--====== Brand & Download Start ======-->

    <section id="brand" class="brand-download-area">
        <div class="container">
            <div class="brand-area">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                        <div class="swiper-slide single-brand">
                            <img src="{{asset('assets/frontend/images/brand.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="download-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="download-content">
                            <h2 class="title">Download ruxin application</h2>
                            <p>and get started with a free 1 month trial for your business</p>
                            <ul class="download-btn">
                                <li>
                                    <a class="google-play" href="#">
                                        <i class="fas fa-play"></i>
                                        <span class="text-1">Get in</span>
                                        <span class="text-2">Google Play</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="apple-store" href="#">
                                        <i class="fab fa-apple"></i>
                                        <span class="text-1">Get in</span>
                                        <span class="text-2">Play Store</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="download-image wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="{{asset('assets/frontend/images/download-app.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Brand & Download Ends ======-->

    <!--====== Footer Start ======-->

    <footer id="footer" class="footer-area bg_cover" style="background-image: url(../assets/frontend/images/footer-bg.jpg);">
        <div class="footer-shape shape-1"></div>

        <div class="container">
            @foreach($webset as $ws)
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-8 pr-0">
                        <div class="footer-widget-wrapper">
                            <div class="footer-about mt-45">
                                <h4 class="footer-title">About</h4>
                                <p>{{$ws->deskripsi}}</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="footer-contact mt-45">
                                <h4 class="footer-title">Contact</h4>

                                <ul class="contact-info">
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-phone-square"></i>
                                            <div class="contact-text">
                                                <p><a href="#">{{$ws->telp_satu}}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-phone-square"></i>
                                            <div class="contact-text">
                                                <p><a href="#">{{$ws->telp_dua}}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-envelope"></i>
                                            <div class="contact-text">
                                                <p><a href="mailto:needhelp@ruxin.com">{{$ws->email}}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-0">
                        <div class="footer-newsletter mt-45">
                            <h4 class="footer-title">Our Motto</h4>
                            <p>{{$ws->moto}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="footer-copyright text-center">
                <p>&copy; copyright 2021 by Sicuan</p>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>
    <script src="{{asset('assets/frontend/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/scrolling-nav.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>


</body>

</html>