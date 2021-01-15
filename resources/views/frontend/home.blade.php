<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    @foreach($webset as $ws)
    <title>{{$ws->singkatan}}</title>
    <link rel="shortcut icon" href="{{asset('images/setting/'.$ws->favicon)}}" type="image/png">
    <meta name="description" content="{{$ws->meta}}">
    @endforeach


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
                <a class="navbar-brand" href="{{url('/')}}" style="width:80%;color:#2e3d62;">
                    @foreach($webset as $ws)
                    <img src="{{asset('images/setting/'.$ws->logo)}}" alt="Logo" width="20%">
                    <span style="font-size:35px;font-color:#ff8257;"><b>{{$ws->nama}}</b></span>
                    @endforeach
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="active mr-4"><a class="page-scroll" href="{{url('/')}}#home">Home</a></li>
                        <li class="mr-4"><a class="page-scroll" href="{{url('/')}}#fitur">Fitur</a></li>
                        <li class="mr-4"><a class="page-scroll" href="{{url('/')}}#profile">Profile</a></li>
                        <li class="mr-4"><a class="page-scroll" href="{{url('/')}}#screenshot">Interface</a></li>
                        <li class="mr-4"><a class="page-scroll" href="{{url('/')}}#galeri">Galeri</a></li>
                        <li class="mr-4"><a class="page-scroll" href="{{url('/')}}#blog">Artikel</a></li>
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
                            <h2 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                {{$sld->judul}}</h2>
                            <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.6s">
                                {{$sld->isi}}
                            </p>
                            @if($sld->link!='')
                            <a target="blank()" href="{{$sld->link}}"
                                class="mt-3 main-btn main-btn-2">{{$sld->link_text}}</a>
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
    </section>
    <section id="fitur" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Kamu pasti tertarik</p>
                        <h2 class="title">Fitur</h2>
                    </div>
                </div>
            </div>
            <div class="features-wrapper">
                <div class="row">
                    @php $i=1; @endphp
                    @foreach($fitur as $ftr)
                    <div class="col-lg-4">
                        <div class="single-features features-{{$i}} wow fadeInUpBig" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <span class="features-number">0{{$i++}}</span>
                            <div class="features-icon">
                                <i class="{{$ftr->icon}}"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">{{$ftr->header}}</a></h4>
                                <p>{{$ftr->isi}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="profile" class="everything-area">
        <div class="everything-shape shape-1"></div>
        <div class="everything-shape shape-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="everything-image mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="image">
                            <img src="{{asset('img/sicuan-1.jpeg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="everything-content-wrapper mt-50">
                        <div class="section-title">
                            <p class="sub-title">Hal yang anda perlu tau tentang kami</p>
                            <h2 class="title">Profile Kami</h2>
                        </div>
                        <div class="everything-content">

                            @foreach($webset as $ws)
                            <p>{!!$ws->deskripsi!!}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="screenshot" class="screenshot-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Tampilan Utama Aplikasi Sicuan</p>
                        <h2 class="title">Interface</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom-container">
            <div class="screenshot-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-3.jpeg')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-4.jpeg')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-5.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-6.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-7.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-9.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide single-screenshot">
                        <img src="{{asset('img/sicuan-10.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="screenshot-pagination"></div>
        </div>
    </section>
    <section id="galeri" class="blog-area">
        <div class="blog-shape shape-1"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Foto foto terbaru dari kami</p>
                        <h2 class="title">Galeri</h2>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="row">
                    @foreach($data as $gl)
                    <div class="col-lg-4 blog-col">
                        <div class="single-blog mt-55 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <a data-toggle="modal" data-target="#galeri{{$gl->id}}"><img
                                        src="{{asset('images/galeri/'.$gl->gambar)}}" alt=""></a>
                                <span class="date">{{$gl->judul}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="galeri{{$gl->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$gl->judul}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset('images/galeri/'.$gl->gambar)}}"
                                        class="card-img-top img-thumnail imgcustom" alt="..."
                                        style="border: solid #E6E9E8 4px;">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 mt-4 text-center">
                        <a href="{{url('list-galeri')}}" class="mt-3 main-btn main-btn-2">Lihat Semua Foto Galeri</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="blog-area">
        <div class="blog-shape shape-1"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Baca berita terbaru tentang aplikasi Sicuan</p>
                        <h2 class="title">Artikel</h2>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="row">
                    @foreach($artikel as $art)
                    <div class="col-lg-4 blog-col">
                        <div class="single-blog mt-55 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <a href="{{url('/detail-artikel/'.$art->slug)}}"><img
                                        src="{{asset('images/artikel/'.$art->gambar)}}" height="220px;" alt=""></a>
                                <span class="date">{{$art->created_at}}</span>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">{{$art->namakategori}}</a></li>
                                </ul>
                                <h4 class="blog-title"><a
                                        href="{{url('/detail-artikel/'.$art->slug)}}">{{$art->judul}}</a></h4>
                                <p>{{$art->subjudul}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 text-center">
                        <a href="{{url('list-artikel')}}" class="mt-3 main-btn main-btn-2">Lihat Semua Artikel</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer-area bg_cover"
        style="background-image: url(../assets/frontend/images/footer-bg.jpg);">
        <div class="footer-shape shape-1"></div>
        <div class="container">
            @foreach($webset as $ws)
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-8 pr-0">
                        <div class="footer-widget-wrapper">
                            <div class="footer-about mt-45">
                                <h4 class="footer-title">Temukan Kami</h4>
                                <p>Cek sosial media dari aplikasi Sicuan</p>
                                <ul class="social">
                                    <li><a href="{{$ws->link_fb}}" target="blank()"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$ws->link_youtube}}" target="blank()"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="{{$ws->link_ig}}" target="blank()"><i class="fab fa-instagram"></i></a>
                                    </li>
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
                        <div class="footer-about mt-45">
                            <h4 class="footer-title">Lokasi Kami</h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.755382549861!2d112.06014021464763!3d-7.815697794368014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857175f9cda31%3A0x3123610563e44ab3!2sSimpang%20Lima%20Gumul!5e0!3m2!1sid!2sid!4v1609844381273!5m2!1sid!2sid"
                                width="100%" height="100%" class="mt-3" frameborder="0" style="border:0;"
                                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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