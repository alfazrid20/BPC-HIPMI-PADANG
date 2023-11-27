@extends('frontend.app')

@section('title')

@endsection

@section('content')

        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag fw-bold"><span>{{ $berita->nama_kategori }}</span></p>
                        <p class="post-title fw-bold">{{ $berita->judul_berita }}</p>
                        <div class="d-flex align-items-center">
                            <span class="post-date mr-30 fw-bold">{{ $berita->tanggal_berita }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="post-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="post-details-content mb-100">
                    <img class="mb-30" src="{{ asset('assets/image/'. $berita->gambar) }}" width="
                    100%" alt="">
                    <p>{!! $berita->isi !!}</p>
                   </p>
                </div>



                        {{-- <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="img/bg-img/32.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <div class="d-flex">
                                        <a href="#" class="post-author">Lisa Moore</a>
                                        <a href="#" class="post-date">June 23, 2018</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit.</p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="post-a-comment-area mb-30 clearfix">
                    <h4 class="mb-50">Leave a reply</h4>

                    <!-- Reply Form -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Name*">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="Email*">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="subject" placeholder="Website">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn  mt-30" type="submit">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            {{-- <!-- Sidebar Widget -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">

                    <!-- Newsletter Widget -->
                    <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                            <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                        </form>
                        <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                    </div>

                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                        <a href="#">
                            <img src="img/bg-img/add3.png" alt="">
                        </a>
                    </div>

                    <!-- Latest News Widget -->
                    <div class="single-widget-area news-widget mb-30">
                        <h4>Latest News</h4>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">

                        <!-- Single News Area -->
                        <div class="single-blog-post style-2 mb-5">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/14.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                <a href="#" class="post-author">By Michael Smith</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post style-2 mb-5">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/15.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                <a href="#" class="post-author">By Michael Smith</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
    </div>
</section>



@endsection
