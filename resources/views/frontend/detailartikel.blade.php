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

    <section id="home" style="background:#ff8257">
        <div class="container">
            <div class="page-banner-content text-center" style="
    padding-top: 150px;padding-bottom:70px;">
                <h2 class="title">Detail Artikel</h2>
            </div>
        </div>
    </section>
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($detail as $artikel)
                    <div class="blog-details-main mt-60">

                        <div class="blog-details-image">
                            <img src="{{asset('images/artikel/'.$artikel->gambar)}}" alt="thumb">
                            <span class="date" style="background:#ff8257">{{$artikel->created_at}}</span>
                        </div>

                        <div class="blog-details-content">
                            <ul class="meta">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#">{{$artikel->namakategori}}</a></li>
                            </ul>

                            <h3 class="title">{{$artikel->judul}}</h3>
                            <p>{!!$artikel->isi!!}</p>
                        </div>
                        <div class="text-center">
                            <a onclick="history.go(-1)" href="#" class="mt-3 main-btn main-btn-2">Kembali</a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-lg-4">
                    <div class="sidebar pt-30">

                        <div class="sidebar-post mt-30">
                            <h3 class="sidebar-title">Artiekl Lainnya</h3>

                            <div class="sidebar-post-wrap">

                                @foreach($artikellain as $row)
                                <div class="sidebar-post-single">
                                    <div class="sidebar-post-image">
                                        <a href="{{url('/detail-artikel/'.$row->slug)}}"><img
                                                src="{{asset('images/artikel/thumbnail/'.$row->gambar)}}"
                                                alt="Awesome Image" /></a>
                                    </div>

                                    <div class="sidebar-post-content">
                                        <h4 class="post-title"><a
                                                href="{{url('/detail-artikel/'.$row->slug)}}">{{$row->judul}}</a></h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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