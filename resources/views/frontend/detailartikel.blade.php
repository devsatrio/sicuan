    @extends('layouts.layout_user.base_dua')

    @section('content')


    <section id="artikel" class="blog-section bg-grey padding">
        <div class="container" style="padding-top:3%;">
            <div class="row">
                @foreach($detail as $artikel)
                <div class="col-sm-12">
                    <div class="card bg-grey" style="border: none;">
                        <div class="card-body" align="center" class="section-heading" style="padding-left:10%;padding-right:10%;">
                            
                            <img src="{{asset('images/artikel/'.$artikel->gambar)}}" alt="img" style="width:100%;padding-bottom:5%">
                            <h2 class="card-title " align="left">{{$artikel->judul}}</h2>
                            <p class="card-text" align="left">{!!$artikel->isi!!}
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-sm-12 text-center">
                <a href="#" onclick="history.go(-1)" class="default-btn">Kembali</a>
            </div>

            </div>

        </div>
    </section>
    @endsection