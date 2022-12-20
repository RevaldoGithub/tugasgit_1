@extends('homepage.layouts.master')
@section('content')


<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{asset('')}}assets/img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Welcome to our service Company</h6>
                        <h1 class="section-title white-color">{{$services->judul}}</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('services.index')}}">Service</a></li>
                            <li>{{$services->judul}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PAGE DETAILS AREA START (service-details) -->
<div class="ltn__page-details-area ltn__service-details-area mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__page-details-inner ltn__service-details-inner">
                    <div class="ltn__blog-img">
                        <img src="{{asset('storage/' . $services->image)}}" alt="Image">
                    </div>
                    <p><?= substr($services->content, 0, 550) ?></p>
                    <div class="row">
                        @if( !empty($services->image_1))
                        <div class="col-lg-6">
                            <img src="{{asset('storage/' . $services->image_1)}}" alt="image">
                            <label>{{$services->judul}}</label>
                        </div>
                        @endif
                    </div>
                    <p><?= substr($services->content, 550) ?></p>

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Menu Widget -->
                    <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                        <ul>
                            @foreach($service_left as $sl)
                            <li><a href="{{ route('services.show', $sl->slug)}}"><?= substr($sl->judul, 0, 25) ?>...<span><i class="fas fa-arrow-right"></i></span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{asset('')}}assets/img/banner/banner-1.jpg" alt="Banner Image"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->

@endsection