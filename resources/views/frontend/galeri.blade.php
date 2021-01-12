@extends('layouts.layout_user.base_dua')

@section('content')

<section id="artikel" class="blog-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-60 text-center">
            <h2>Galeri</h2>
            <p>Kumpulan dokumentasi </p>
        </div>
        <div class="row">
            @foreach($data_galeri as $galeri)
            <div class="col-md-4 col-sm-6 xs-padding mb-5">
                <div class="blog-box">
                    <div class="blog-thumb">
                        <a href="#" data-toggle="modal" data-target="#galeri{{$galeri->id}}">
                            <img src="{{asset('images/galeri/'.$galeri->gambar)}}" alt="img">
                        </a>
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-tag"></i>{{$galeri->judul}}</span>
                                <span><i class="fa fa-calendar"></i>{{$galeri->created_at}}</span>
                            </div>
                        </div>
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
@endsection