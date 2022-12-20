@extends('homepage.layouts.master')
@section('content')


<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{asset('storage/' . $bgbanner->bg_banner)}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                        <h1 class="section-title white-color">About Us</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120-- pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{asset('storage/' . $about->image)}}" alt="About Us Image">
                    <div class="about-us-img-info about-us-img-info-2">
                        <div class="about-us-img-info-inner">
                            <h1>{{$about->tahun}}<span>+</span></h1>
                            <h6>Years Experience</h6>
                            <!-- <span class="dots-bottom"></span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// About Us</h6>
                        <h1 class="section-title">{{$about->judul}}<span>.</span></h1>
                    </div>

                    <p>{!!$about->content!!}</p>
                    <div class="btn-wrapper">
                        <a href="{{route('services.index')}}" class="theme-btn-3 btn btn-effect-4">OUR SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// features //</h6>
                    <h1 class="section-title">Why Choose Us<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($kelebihans as $klb)
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{asset('storage/' . $klb->image)}}" alt="{{$klb->judul}}" title="{{$klb->judul}}" style="width: 60px; max-width: 100px; margin-left: 4px;"></span>
                        </div>
                        <h3><a href="#">{{$klb->judul}}</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>{{$klb->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- CALL TO ACTION START (call-to-action-5) -->
<div class="call-to-action-area call-to-action-5 bg-image bg-overlay-theme-90 pt-40 pb-25" data-bs-bg="{{asset('')}}assets/img/bg/13.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-5 text-center">
                    <h2 class="white-color text-decoration">24/7 Availability, Make <a href="/contacts">An Appointment</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- PROGRESS BAR AREA START -->
<div class="ltn__progress-bar-area before-bg-right pt-115 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ltn__progress-bar-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// skills</h6>
                        <h1 class="section-title">We Have A Skillest
                            Team Ever<span>.</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                    <div class="ltn__progress-bar-inner">
                        @foreach($skills as $skl)
                        <div class="ltn__progress-bar-item">
                            <p>{{$skl->judul}}</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: <?= $skl->persen ?>%;">
                                    <span>{{$skl->persen}}%</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30" data-bs-bg="{{asset('storage/' . $bgbanner->image_skill)}}">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PROGRESS BAR AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-4) -->
<div class="ltn__testimonial-area bg-image pt-115 pb-70" data-bs-bg="{{asset('')}}assets/img/bg/8.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Testimonials</h6>
                    <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
            @foreach($testis as $tst)
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{asset('storage/' . $tst->image)}}" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>{!!$tst->content!!}</p>
                        <h4>{{$tst->nama}}</h4>
                        <h6>{{$tst->company}}</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            @endforeach
            <!--  -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

@endsection