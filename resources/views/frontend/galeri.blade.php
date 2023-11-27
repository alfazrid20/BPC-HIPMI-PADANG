@extends('frontend.app')

@section('title')

@endsection

@section('content')

<div class="container-fluid blog py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1>Galeri</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach ($berita as $item)

            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="{{ asset('assets/image/'. $item->gambar) }}" class="img-fluid w-100 rounded-top" alt="">

                   

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
