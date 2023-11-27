@extends('frontend.app')

@section('title')

@endsection

@section('content')

  <!-- Team Start -->
  <div class="container-fluid py-5 my-5 team">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1>Kepengurusan</h1>
            <h2>Himpunanan Pengusaha Muda Indonesia</h2>
            <h2>BPC Padang</h2>
        </div>
        <div class="owl-carousel bg-light team-carousel wow fadeIn" data-wow-delay=".5s">
@foreach ($strukturs as $struktur)

<div class="rounded team-item bg-warning" >
    <div class="team-content">
        <div class="team-img-icon ">
            <div class="team-img rounded-circle ">
                <img src="{{asset('/assets/image/'. $struktur->gambar)}}" class="img-fluid w-100 rounded-circle border-warning" alt="">
            </div>
            <div class="team-name text-center py-3">
                <h4 class="fw-bold text-white">{{ $struktur->nama }}</h4>
                <p class="m-0 fw-bold text-white">{{ $struktur->jabatan }}</p>
            </div>
            <div class="team-icon d-flex justify-content-center pb-4">
                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-info text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-danger text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-square btn-primary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
@endforeach


        </div>
    </div>
</div>
<!-- Team End -->
@endsection





