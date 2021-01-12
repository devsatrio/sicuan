@extends('layouts/base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Info!</h4>
            {{ session('status') }}
        </div>
        @endif
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary alert-dismissible">
                        <h4>Welcome Back!</h4>
                        {{ Auth::user()->level }} - {{ Auth::user()->username }}
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            @php
                            $totalartikel = DB::table('artikel')->count();
                            @endphp
                            <h3>{{$totalartikel}}</h3>

                            <p>Jumlah Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <a href="{{url('artikel')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            @php
                            $totalfoto = DB::table('galeri')->count();
                            @endphp
                            <h3>{{$totalfoto}}</h3>

                            <p>Foto Galeri</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-images"></i>
                        </div>
                        <a href="{{url('galeri')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            @php
                            $totaluser = DB::table('users')->count();
                            @endphp
                            <h3>{{$totaluser}}</h3>

                            <p>User</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('admin')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Setting</h3>

                            <p>Setting your website info</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <a href="{{url('setting-web')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection