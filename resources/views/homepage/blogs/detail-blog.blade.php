@extends('homepage.layouts.master')
<?php

use App\Models\Blog;
use App\Models\Kateblog;
?>
@section('content')


<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{asset('storage/' . $bgbanner->bg_banner)}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                        <h1 class="section-title white-color">News Details</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>News Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PAGE DETAILS AREA START (blog-details) -->
<div class="ltn__page-details-area ltn__blog-details-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-details-wrap">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <div class="ltn__blog-meta">
                            <ul>
                                <?php

                                $katelog = Kateblog::where('id', $blogs->kategori)->first();
                                ?>
                                <li class="ltn__blog-category">
                                    <a href="#">{{$katelog->kategori}}</a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="ltn__blog-title">{{$blogs->judul}}</h2>
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#">By: Ethan</a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>{{$blogs->tanggal}}
                                </li>
                            </ul>
                        </div>
                        <p>{!!$blogs->content!!}</p>
                        <img src="{{asset('storage/' . $blogs->image)}}" alt="Image">


                        @if(!empty($blogs->qoutes))
                        <blockquote>
                            <h6 class="ltn__secondary-color mt-0">BY Autixir</h6>
                            {!!$blogs->qoutes!!}
                        </blockquote>
                        @endif
                        @if(!empty($blogs->kelebihan))
                        <h2>Setting the mood with incense</h2>
                        <div class="list-item-with-icon-2">
                            <ul>
                                @php
                                $kele = (explode("/",$blogs->kelebihan));
                                @endphp
                                @foreach ($kele as $kl)
                                <li>{{$kl}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                    </div>
                    <!-- blog-tags-social-media -->
                    <div class="ltn__blog-tags-social-media mt-80 row">
                        <div class="ltn__tagcloud-widget col-lg-8">
                            <h4>Releted Tags</h4>
                            <ul>
                                @php
                                $tags = (explode(",",$blogs->tags));
                                @endphp
                                @foreach($tags as $t)
                                <li>
                                    <a href="#">{{$t}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">

                    <!-- Menu Widget (Category) -->
                    <div class="widget ltn__menu-widget ltn__menu-widget-2 ltn__menu-widget-2-color-2">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Categories</h4>
                        <ul>
                            <?php
                            $count_kate =  Blog::count();
                            ?>
                            <li><a href="#">All Kategori<span>{{$count_kate}}</span></a></li>
                            @foreach($kateblog as $kbl)
                            <?php
                            $loop_kategori = Blog::where('kategori', $kbl->id)->count();
                            ?>
                            <li><a href="{{ route('show-kategori-blog.show', $kbl->slug)}}">{{$kbl->kategori}} <span>{{$loop_kategori}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Popular Post Widget -->
                    <div class="widget ltn__popular-post-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Recent Feeds</h4>
                        <ul>
                            @foreach($recent_blog as $rb)
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="{{ route('blogs.show', $rb->slug)}}"><img src="{{asset('storage/' . $rb->image)}}" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="{{ route('blogs.show', $rb->slug)}}"><?= substr($rb->judul, 0, 25) ?>...</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>{{$rb->tanggal}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <img src="{{asset('storage/' . $bgbanner->image_blog_right)}}" alt="Banner Image">
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->
@endsection