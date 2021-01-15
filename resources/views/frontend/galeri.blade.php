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
                <h2 class="title">List Foto Galeri</h2>
            </div>
        </div>
    </section>
    <section class="blog-details">
        <div class="container">
            <div class="row">
                @foreach($data_galeri as $galeri)
                <div class="col-lg-4 blog-col">
                    <div class="single-blog mt-55 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <a data-toggle="modal" data-target="#galeri{{$galeri->id}}"><img
                                    src="{{asset('images/galeri/'.$galeri->gambar)}}" alt=""></a>
                            <span class="date">{{$galeri->judul}}</span>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="galeri{{$galeri->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$galeri->judul}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('images/galeri/'.$galeri->gambar)}}"
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
            </div>
            <div class="section-heading text-center" style="padding-top:40px;">
                {{ $data_galeri->links() }}
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