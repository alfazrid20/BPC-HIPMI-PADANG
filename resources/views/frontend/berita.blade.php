@extends('frontend.app')

@section('title')

@endsection

@section('content')

<div class="container-fluid blog py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1>Kegiatan</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach ($berita as $item)

            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="{{ asset('assets/image/'. $item->gambar) }}" class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">{{ $item->nama_kategori }}</span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                            <a href="/singlepost/{{$item->slug}}" class="btn text-white">Read</a>
                        </div>
                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img src="{{ asset('assets/image/Untitled.png') }}"  class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                        <h5 class=""></h5>
                        <span class="text-secondary">{{ $item->tanggal_berita }}</span>
                        <p class="py-2">{{ $item->judul_berita }}</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection



