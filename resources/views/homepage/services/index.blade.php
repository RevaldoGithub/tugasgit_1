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
                        <h1 class="section-title white-color">What We Do</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{asset('storage/' . $bgbanner->image_service)}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// RELIABLE ABOUTS</h6>
                        <h1 class="section-title">{{$about->judul}}<span>.</span></h1>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>{!!$about->content!!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Service</h6>
                    <h1 class="section-title">What We Do<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $srv)
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <img src="{{asset('storage/' . $srv->image_icon)}}" alt="" title="" style="width: 90px; max-width: 100px; margin-left: 4px;">
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="{{ route('services.show', $srv->slug)}}">{{$srv->judul}}</a></h3>
                        <p><?= substr($srv->content, 0, 105) ?>...</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$services->links()}}
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- OUR JOURNEY AREA START -->
<div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9" data-bs-bg="{{asset('')}}assets/img/bg/8.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__our-journey-wrap ">
                    <ul>
                        @foreach($sejarah as $sjr)
                        <li><span class="ltn__journey-icon">{{$sjr->tahun}}</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{asset('storage/' . $sjr->image)}}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>{{$sjr->judul}}</h3>
                                            <p>{!!$sjr->content!!}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OUR JOURNEY AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-50--- bg-image" data-bs-bg="{{asset('storage/' . $bgbanner->image_sejarah)}}">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VIDEO AREA END -->

@endsection