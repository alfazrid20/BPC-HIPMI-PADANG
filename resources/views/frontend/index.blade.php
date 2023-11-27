@extends('frontend.app')

@section('content')
<div class="container-fluid px-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slider as $index => $item)
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" @if ($index === 0) class="active" @endif aria-current="true" aria-label="Slide {{ $index + 1 }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach ($slider as $index => $item)
            <div class="carousel-item @if ($index === 0) active @endif" data-interval="1000">
                <img src="{{ asset('assets/image/' . $item->gambar) }}" class="img-fluid" alt="Slide {{ $index + 1 }}">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">{{ $item->title }}</h1>
                        <a href="/about" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                        <a href="/kontak" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

 <!-- Fact Start -->
 <div class="container-fluid bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-white counter-value">48</h1>
                    <h5 class="text-white mt-1">Tahun</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-white counter-value">6</h1>
                    <h5 class="text-white mt-1">Cabang</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-white counter-value">3000</h1>
                    <h5 class="text-white mt-1">Anggota</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-white counter-value">171</h1>
                    <h5 class="text-white mt-1">Pengurus Inti</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


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
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">Tentang Kami</h5>
                <h1 class="mb-4">{{ $about->title }}</h1>
                <p class="fw-bold">{{ $about->subtitle }}</p>
                <p class="mb-4">{!! $about->description !!}</p>
                <a href="about" class="btn btn-primary rounded-pill px-5 py-3 text-white">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid services py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1>Sektor Usaha</h1>
        </div>
        <div class="row g-5 services-inner">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Web Design</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Web Development</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">UI/UX Design</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Web Cecurity</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Digital Marketing</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Programming</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Project Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Our Project</h5>
            <h1>Our Recently Completed Projects</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('landingpage/img/project-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Web design</h4>
                                <p class="m-0 text-white">Web Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('landingpage/img/project-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Cyber Security</h4>
                                <p class="m-0 text-white">Cyber Security Core</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('landingpage/img/project-3.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Mobile Info</h4>
                                <p class="m-0 text-white">Upcomming Phone</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('landingpage/img/project-4.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Web Development</h4>
                                <p class="m-0 text-white">Web Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('landingpage/img/project-5.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Digital Marketing</h4>
                                <p class="m-0 text-white">Marketing Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('landingpage/img/project-6.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">keyword Research</h4>
                                <p class="m-0 text-white">keyword Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
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
                        <img src="{{ asset('assets/image/Untitled.png') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
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
<!-- Blog End -->


<!-- Team Start -->
<div class="container-fluid py-5 mb-5 team">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1 >Kepengurusan</h1>
            <h2>Himpunan Pengusaha Muda Indonesia</h2>
            <h2>BPC Padang</h2>
        </div>
        <div class="owl-carousel team-carousel bg-light wow fadeIn" data-wow-delay=".5s">
            @foreach ($strukturs as $struktur)

            <div class="rounded team-item bg-warning">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
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
    </div>
</div>

<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Our Testimonial</h5>
            <h1>Our Client Saying!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            <div class="testimonial-item border p-4">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img src="{{ asset('landingpage/img/testimonial-1.jpg') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
            <div class="testimonial-item border p-4">
                <div class=" d-flex align-items-center">
                    <div class="">
                        <img src="{{ asset('landingpage/img/testimonial-2.jpg') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
            <div class="testimonial-item border p-4">
                <div class=" d-flex align-items-center">
                    <div class="">
                        <img src="{{ asset('landingpage/img/testimonial-3.jpg') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
            <div class="testimonial-item border p-4">
                <div class=" d-flex align-items-center">
                    <div class="">
                        <img src="{{ asset('landingpage/img/testimonial-4.jpg') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->


<!-- Contact Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1 class="mb-3">Hubungi Kami</h1>
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">{{ $contact->alamat }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">{{ $contact->no_hp }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="h5" href="mailto:info@example.com" target="_blank">{{ $contact->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="p-5 rounded contact-form">
                        <div class="mb-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Project">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn bg-primary text-white py-3 px-5" type="button">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
