@extends('homepage.layouts.master')
<?php

use App\Models\Product;
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
                        <h1 class="section-title white-color">Shop Car</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>Shop Car</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach($products as $prt)
                                @if($prt->kategori == $katepros->id)
                                <div class="col-sm-6 col-6">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <a href="{{ route('products.show', $prt->slug)}}"><img src="{{asset('storage/' . $prt->image)}}" alt="#"></a>
                                            @if( !empty($prt->label_baru == 'Active'))
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="soldout-badge">New</li>
                                                </ul>
                                            </div>
                                            @endif
                                            @if( !empty($prt->label_hot == 'Active'))
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="soldout-badge">Hot</li>
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="{{ route('products.show', $prt->slug)}}">{{$prt->judul}}</a></h2>
                                            <div class="product-price">
                                                <span>${{$prt->harga}}</span>
                                                @if( !empty($prt->harga_diskon))
                                                <del>${{$prt->harga_diskon}}</del>
                                                @endif
                                            </div>
                                            <div class="product-info-brief">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-car"></i>{{$prt->nik}}
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-cog"></i>{{$prt->jenis}}
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-road"></i>{{$prt->kph}}kph
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination">
                        <ul>
                            {{$products->links()}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                        <ul>
                            @foreach($katepros_1 as $kps)
                            <li><a href="{{ route('show-kategori-product.show', $kps->slug)}}">{{$kps->kategori}}<span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                        <ul>
                            @foreach($top_product as $tp)
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="{{ route('products.show', $tp->slug)}}"><img src="{{asset('storage/' . $tp->image)}}" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li class="review-total"> <a href="#">. {{$tp->view}} Reviews </a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="{{ route('products.show', $tp->slug)}}">{{$tp->judul}}</a></h6>
                                        <div class="product-price">
                                            <span>${{$tp->harga}}</span>
                                            @if( !empty($tp->harga_diskon))
                                            <del>${{$tp->harga_diskon}}</del>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                        <form action="{{ url()->current() }}" method="get">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Color Widget -->
                    <div class="widget ltn__color-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product Color</h4>
                        <ul>
                            @foreach($katewars as $ktw)
                            <li style="background-color: <?= $ktw->warna ?>;"><a href="{{ route('show-kategori-warna.show', $ktw->slug)}}"></a></li>
                            @endforeach
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->

@endsection