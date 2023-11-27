@extends('frontend.app')

@section('title')

@endsection

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Sejarah</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/about">Visi Misi</a></li>
                <li class="breadcrumb-item"><a href="/struktur">Struktur</a></li>

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
                    <img src="{{ asset('assets/image/abdul.jpg') }}" class="img-fluid w-80 rounded" alt="" style="">
                    <figcaption style="text-align: center"> Drs. Abdul Latif</figcaption>
                    <figcaption style="text-align: center"> Salah Satu Pendiri HIPMI</figcaption>
                    </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">

                <h1 class="mb-4">SEJARAH</h1>
                <p class="fw-bold">{!! $about->sejarah !!}</p>
                {{-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
