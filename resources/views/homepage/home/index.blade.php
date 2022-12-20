@extends('homepage.layouts.master')
<?php

use App\Models\Kateblog;
?>
@section('content')

<!-- SLIDER AREA START (slider-4) -->
<div class="ltn__slider-area ltn__slider-4 position-relative fix">
    <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">

        <!-- HTML5 VIDEO -->
        <video autoplay muted loop id="myVideo">
            <source src="{{asset('')}}assets/media/1.mp4" type="video/mp4">
        </video>


        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-30" data-bs-bg="{{asset('')}}assets/img/slider/41.jpg">
            <div class="ltn__slide-item-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title white-color animated">// {{$slider->judul}}</h6>
                                    <h1 class="slide-title text-uppercase white-color animated ">{{$slider->content}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-80 pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <ul class="ltn__parallax-effect-wrap ltn__parallax-effect-active" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="15" data-scalar-y="25">
                        <li class="layer" data-depth="0.00"></li>
                        <li class="layer" data-depth="0.10">
                            <div class="ltn__effect-img ltn__effect-img-top-left">
                                <img src="{{asset('storage/' . $imgabout->image_1)}}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.30">
                            <div class="ltn__effect-img ltn__effect-img-top-right">
                                <img src="{{asset('storage/' . $imgabout->image_2)}}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="ltn__effect-img ltn__effect-img-center-left">
                                <img src="{{asset('storage/' . $imgabout->image_3)}}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-center-right">
                                <img src="{{asset('storage/' . $imgabout->image_4)}}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-bottom-left">
                                <img src="{{asset('storage/' . $imgabout->image_5)}}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-bottom-right">
                                <img src="{{asset('storage/' . $imgabout->image_1)}}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                                <div class="about-us-img-info">
                                    <div class="about-us-img-info-inner">
                                        <h1><span class="counter">{{$about->tahun}}</span><span>+</span></h1>
                                        <h6><span>Years</span> Of Experience</h6>
                                        <span class="dots-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// About Us</h6>
                        <h1 class="section-title">{{$about->judul}}<span>.</span></h1>
                    </div>

                    <p>{!!$about->content!!}</p>
                    <hr>
                    <div class="about-call-us">
                        <div class="call-us-icon">
                            <img src="{{asset('')}}assets/img/icons/7.png" alt="Icon Image">
                        </div>
                        <div class="call-us-info">
                            <p>Call us 24/7. We can answer for <a href="{{route('contacts.index')}}" class="ltn__secondary-color text-decoration"><strong>all your
                                        questions</strong></a>.</p>
                            <h2><a href="https://wa.me/{{$config->wa}}">0{{$config->wa}}</a> <small> or </small> <a href="https://wa.me/{{$config->wa}}">0{{$config->no_telp}}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- WHY CHOOSE US AREA START -->
<div class="ltn__why-choose-us-area section-bg-1 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Why Choose Us</h6>
                        <h1 class="section-title">Safety Is Our First Priority<span>.</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore</p>
                    </div>
                    <div class="row">
                        @foreach($why as $wy)
                        <div class="col-lg-12 col-md-6">
                            <div class="why-choose-us-feature-item">
                                <div class="why-choose-us-feature-icon">
                                    <img src="{{asset('storage/' . $wy->image)}}" alt="{{$wy->judul}}" title="{{$wy->judul}}" style="width: 70px;margin-bottom: 15px; max-width: 100px; margin-left: 4px;">
                                </div>
                                <div class="why-choose-us-feature-brief">
                                    <h3><a href="#">{{$wy->judul}}</a></h3>
                                    <p>{!!$wy->content!!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-us-img-wrap">
                    <div class="why-choose-us-img-1 text-start">
                        <img src="{{asset('storage/' . $bgbanner->image_why_1)}}" alt="Image">
                    </div>
                    <div class="why-choose-us-img-2 text-end">
                        <img src="{{asset('storage/' . $bgbanner->image_why_2)}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WHY CHOOSE US AREA END -->

<!-- PRICING PLAN AREA START -->
<div class="ltn__pricing-plan-area pt-115 pb-120" id="liton_pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Our Price</h6>
                    <h1 class="section-title">Pricing Plan<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-50">
            @foreach($prices as $prc)
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__pricing-plan-item text-center @if($prc->status == 'Active' ) active ---active-price @endif">
                    @if( !empty($prc->status_populer == 'Active'))
                    <span class="pricing-badge">Most Popular</span>
                    @endif
                    <h2 class="pricing-title">{{$prc->nama_paket}}</h2>
                    <div class="pricing-price">
                        <h2><sup>$</sup>{{$prc->harga_bulan}}<sub>/M</sub></h2>
                    </div>
                    <ul>
                        <li>{{$prc->fasilitas_1}}</li>
                        <li>{{$prc->fasilitas_2}}</li>
                        <li>{{$prc->fasilitas_3}}</li>
                        <li>{{$prc->fasilitas_4}}</li>
                        <li>{{$prc->fasilitas_5}}</li>
                        <li>{{$prc->fasilitas_6}}</li>
                        <li>{{$prc->fasilitas_7}}</li>
                        <li>{{$prc->fasilitas_8}}</li>
                        <li>{{$prc->fasilitas_9}}</li>
                        <li>{{$prc->fasilitas_10}}</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="{{route('contacts.index')}}" class="theme-btn-2 btn">PURCHASE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRICING PLAN AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area ltn__primary-bg before-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Service</h6>
                    <h1 class="section-title white-color">What We Do<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($service as $srv)
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <img src="{{asset('storage/' . $srv->image)}}" alt="#">
                        <div class="service-item-icon">
                            <img src="{{asset('storage/' . $srv->image_icon)}}" alt="{{$srv->judul}}" title="{{$srv->judul}}" style="width: 60px; max-width: 100px; margin-left: 10px;">
                        </div>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="{{ route('services.show', $srv->slug)}}">{{$srv->judul}}</a></h3>
                        <p><?= substr($srv->content, 0, 35) ?>...</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- PRODUCT TAB AREA START (product-item-3) -->
<div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle ltn__secondary-color">// Cars</h6>
                    <h1 class="section-title">Car Best Deals</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-top-right text-uppercase">
                    <div class="nav">
                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_2_1">New Cars</a>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_tab_2_1">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                <!-- ltn__product-item -->
                                @foreach($products as $prto)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <a href="#"><img src="{{asset('storage/' . $prto->image)}}" alt="{{$prto->judul}}"></a>

                                            @if( !empty($prto->label_baru == 'Active'))
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="soldout-badge">New</li>
                                                </ul>
                                            </div>
                                            @endif
                                            @if( !empty($prto->label_hot == 'Active'))
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="soldout-badge">Hot</li>
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="#">{{$prto->judul}}</a></h2>
                                            <div class="product-price">
                                                <span>${{$prto->harga}}</span>
                                                @if( !empty($prto->harga_diskon))
                                                <del>${{$prto->harga_diskon}}</del>
                                                @endif
                                            </div>
                                            <div class="product-info-brief">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-car"></i>{{$prto->nik}}
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-cog"></i>{{$prto->jenis}}
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-road"></i>{{$prto->kph}}kph
                                                    </li>
                                                </ul>
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
        </div>
    </div>
</div>
<!-- PRODUCT TAB AREA END -->

<!-- CALL TO ACTION START (call-to-action-2) -->
<div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bs-bg="{{asset('')}}assets/img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-2 text-center">
                    <h2>Get A Free Service Or Make A Call</h2>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-4 btn-white" href="{{route('contacts.index')}}"><i class="fas fa-phone-volume"></i> MAKE A CALL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area pt-115 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 section-title-style-3">
                    <div class="section-brief-in">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore</p>
                    </div>
                    <div class="section-title-in">
                        <h6 class="section-subtitle ltn__secondary-color">// Why Choose Us</h6>
                        <h1 class="section-title">Get Extra Benifits<span>.</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="row  justify-content-center">
                    @foreach($benefit_left as $bl)
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                            <div class="ltn__feature-icon">
                                <span> <img src="{{asset('storage/' . $bl->image)}}" alt="{{$bl->judul}}" title="{{$bl->judul}}" style="width: 50px; max-width: 100px; margin-left: 4px;"></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">{{$bl->judul}}</a></h2>
                                <p>{!!$bl->content!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-banner-img text-center mb-30">
                    <img src="{{asset('')}}assets/img/image-benefit.png" alt="#">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row  justify-content-center">
                    @foreach($benefits as $bf)
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3">
                            <div class="ltn__feature-icon">
                                <span> <img src="{{asset('storage/' . $bf->image)}}" alt="{{$bf->judul}}" title="{{$bf->judul}}" style="width: 50px; max-width: 100px; margin-left: 4px;"></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="{{ route('services.show', $srv->slug)}}">{{$bf->judul}}</a></h2>
                                <p>{!!$bf->content!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- IMAGE SLIDER AREA START (img-slider-2) -->
<div class="ltn__img-slider-area ltn__img-slider-2 section-bg-1 pt-115 pb-250">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Portfolio</h6>
                    <h1 class="section-title">We Have Done<span>.</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ltn__image-slider-2-active slick-arrow-1 slick-arrow-1-inner">
            @foreach($portos as $pto)
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{asset('storage/' . $pto->image)}}" data-rel="lightcase:myCollection">
                        <img src="{{asset('storage/' . $pto->image)}}" alt="{{$pto->judul}}" title="{{$pto->judul}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- IMAGE SLIDER AREA END -->

<!-- TESTIMONIAL AREA START -->
<div class="ltn__testimonial-area ltn__testimonial-4 pt-115 pb-100 plr--9">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Testimonials</h6>
                    <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                    @foreach($testis as $tst)
                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image">
                            <img src="{{asset('storage/' . $tst->image)}}" alt="quote">
                        </div>
                        <div class="ltn__testimonial-info">
                            <p>{!!$tst->content!!}</p>
                            <h4>{{$tst->nama}}</h4>
                            <h6>{{$tst->company}}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
                <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                    @foreach($testis as $tsts)
                    <li><img src="{{asset('storage/' . $tsts->image)}}" alt="Quote image"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area bg-image-top pt-115 " data-bs-bg="{{asset('')}}assets/img/bg/3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle white-color">// blog & insights</h6>
                    <h1 class="section-title white-color">News Feeds.</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-3 ltn__blog-3-arrow">
            <!-- Blog Item -->
            @foreach($blog_home as $bh)
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="{{ route('blogs.show', $bh->slug)}}"><img src="{{asset('storage/' . $bh->image)}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="{{ route('blogs.show', $bh->slug)}}"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <?php

                                $katelog = Kateblog::where('id', $bh->kategori)->first();
                                ?>
                                <li class="ltn__blog-tags">
                                    <a href="{{ route('blogs.show', $bh->slug)}}"><i class="fas fa-tags"></i>{{$katelog->kategori}}</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="{{ route('blogs.show', $bh->slug)}}">{{$bh->judul}}</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{$bh->tanggal}}
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="{{ route('blogs.show', $bh->slug)}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

<!-- BRAND LOGO AREA START -->
<div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
    <div class="container-fluid">
        <div class="row ltn__brand-logo-active">
            @foreach($sponsors as $sps)
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset('storage/' . $sps->image)}}" alt="{{$sps->judul}}" title="{{$sps->judul}}">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- BRAND LOGO AREA END -->
@endsection