@extends('layouts.layout_user.base_dua')

@section('content')


<section id="artikel" class="blog-section padding">
    <div class="container">
        <div class="section-heading mb-60 text-center" style="padding-top:20px;">
            <h2 class=>Artikel</h2>
            <p>Silahkan pilih artikel yang ingin anda baca </p>
        </div>
        <div class="row">
            @foreach($data_artikel as $artikel)
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-box">
                    <div class="blog-thumb">
                        <img src="{{asset('images/artikel/'.$artikel->gambar)}}" alt="img" height="250px">
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-tag"></i>{{$artikel->namakategori}}</span>
                                <span><i class="fa fa-calendar"></i>{{$artikel->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">{{$artikel->judul}}</a></h3>
                        <p>{{$artikel->subjudul}}</p>
                        <a href="{{url('/detail-artikel/'.$artikel->slug)}}" class="read-more">Lanjut Baca</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            {{$data_artikel->links() }}
        </div>
    </div>
</section>
@endsection