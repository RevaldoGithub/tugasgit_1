@extends('homepage.layouts.master')
<?php


use App\Models\Product;
use App\Models\Katepro;
use App\Models\Katewar;
?>
@section('content')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9" data-bs-bg="{{asset('storage/' . $bgbanner->bg_banner)}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                        <h1 class="section-title white-color">{{$products->judul}}</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>{{$products->judul}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-details-inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">

                                    <div class="single-large-img">
                                        <a href="{{asset('storage/' . $products->image)}}" data-rel="lightcase:myCollection">
                                            <img src="{{asset('storage/' . $products->image)}}" alt="Image">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="modal-product-info shop-details-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li class="review-total"> <a href="#"> ( {{$products->view}} Reviews )</a></li>
                                    </ul>
                                </div>
                                <h3>{{$products->judul}}</h3>
                                <div class="product-price">
                                    <span>${{$products->harga}}</span>
                                    @if( !empty($products->harga_diskon))
                                    <del>${{$products->harga_diskon}}</del>
                                    @endif
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1">
                                    <ul>
                                        <li>
                                            <strong>Categories:</strong>
                                            <?php
                                            $kategopro = Katepro::where('id', $products->kategori)->first();
                                            $kategowar = Katewar::where('id', $products->kategori_warna)->first();
                                            ?>
                                            <span>
                                                <a href="{{ route('show-kategori-product.show', $kategopro->slug)}}">{{$kategopro->kategori}}</a>
                                                <a href="{{ route('show-kategori-warna.show', $kategowar->slug)}}">{{$kategowar->kategori_warna}}</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="ltn__safe-checkout">
                                    <h5>Guaranteed Safe Checkout</h5>
                                    <img src="{{asset('')}}assets/img/icons/payment-2.png" alt="Payment Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- SHOP DETAILS TAB AREA START -->
<div class="ltn__shop-details-tab-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-details-tab-inner">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">{{$products->judul}}</h4>
                                <p>{!!$products->content!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS TAB AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle ltn__secondary-color">// cars</h6>
                    <h1 class="section-title">Related Products<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach($real_product as $rp)
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="{{ route('products.show', $rp->slug)}}"><img src="{{asset('storage/' . $rp->image)}}" alt="#"></a>
                        @if( !empty($rp->label_baru == 'Active'))
                        <div class="product-badge">
                            <ul>
                                <li class="soldout-badge">New</li>
                            </ul>
                        </div>
                        @endif
                        @if( !empty($rp->label_hot == 'Active'))
                        <div class="product-badge">
                            <ul>
                                <li class="soldout-badge">Hot</li>
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{ route('products.show', $rp->slug)}}">{{$rp->judul}}</a></h2>
                        <div class="product-price">
                            <span>${{$rp->harga}}</span>
                            @if( !empty($rp->harga_diskon))
                            <del>${{$rp->harga_diskon}}</del>
                            @endif
                        </div>
                        <div class="product-info-brief">
                            <ul>
                                <li>
                                    <i class="fas fa-car"></i>{{$rp->nik}}
                                </li>
                                <li>
                                    <i class="fas fa-cog"></i>{{$rp->jenis}}
                                </li>
                                <li>
                                    <i class="fas fa-road"></i>{{$rp->kph}}kph
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
<!-- PRODUCT SLIDER AREA END -->


@endsection