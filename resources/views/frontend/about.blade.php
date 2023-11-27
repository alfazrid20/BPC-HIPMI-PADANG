@extends('frontend.app')

@section('title')

@endsection

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/about">Visi Misi</a></li>
                <li class="breadcrumb-item"><a href="/sejarah">Sejarah</a></li>
                <li class="breadcrumb-item"><a href="#">Struktur</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{ asset('assets/image/jaya.jpg') }}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="{{ asset('assets/image/pasbar.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    </div>
                    <img src="{{ asset('assets/image/hipmi1.jpg') }}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">Tentang Kami</h5>
                <h1 class="mb-4">{{ $about->title }}</h1>
                <p class="fw-bold">{{ $about->subtitle }}</p>
                <p class="mb-4">{!! $about->description !!}</p>
                <br>
                <h1 class="mb-4">VISI MISI</h1>
                <p class="fw-bold">VISI</p>
                <p class>{!! $visimisi->visi !!}</p>
                <p class="fw-bold">MISI</p>
                <p class="mb-4">{!! $visimisi->misi !!}</p>
                {{-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
