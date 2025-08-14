@extends('front.layout.main-layout')
@section('page-title')
@endsection


@section('custom-js')
<script>
$(document).ready(function() {
    $(".products").addClass("current");
});
</script>
@endsection

@section('content')

<section class="page-title" style="background-image:url({{asset('web/media/sm')}}/{{$category->image}});">
    <div class="auto-container">
        <h1>{{$category->name}}</h1>
    </div>
</section>

<div class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <ul class="bread-crumb pull-left">
                <li><a href="index.html">Home</a></li>
                <li>{{$category->name}}</li>
            </ul>
            <div class="text pull-right">Certified Company ISO 9001-2015</div>
        </div>
    </div>
</div>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="services-single">
                    <div class="inner-box">


                        <div class="row clearfix">
                            @foreach($products as $product)


                            @if(count($product->images) > 1)

                            @foreach($product->images as $product_image)

                            <div class="services-block thumb-block  col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box" style="background: #1E5D6D;">
                                    <div class="image">
                                        <div class="col pl-0">
                                            <img data-fancybox="gallery"
                                                data-src="{{ asset('web/media/lg') }}/{{$product_image->image}}"
                                                width="100" src="{{ asset('web/media/lg') }}/{{$product_image->image}}"
                                                alt="">
                                        </div>

                                    </div>
                                    <div class="lower-content">
                                        <h3><a class="text-white"
                                                href="{{route('productDetail', $product->slug)}}">{{$product->name}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @else

                            <div class="services-block thumb-block  col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box" style="background: #1E5D6D;">
                                    <div class="image">
                                        <div class="col pl-0">
                                            <img data-fancybox="gallery"
                                                data-src="{{asset('web/media/md')}}/{{$product->images[0]['image']}}"
                                                width="100" src="{{asset('web/media/md')}}/{{$product->images[0]['image']}}"
                                                alt="">
                                        </div>

                                    </div>
                                    <div class="lower-content">
                                        <h3><a class="text-white"
                                                href="{{route('productDetail', $product->slug)}}">{{$product->name}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>


                            @endif


                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">

                    <div class="sidebar-widget sidebar-blog-category">
                        <ul class="blog-cat">

                            @foreach($categories as $sidebarCategory)
                            <li class="@if($sidebarCategory->slug == $category->slug) active @endif)active"><a
                                    href="{{$sidebarCategory->slug}}">{{$sidebarCategory->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>




                </aside>
            </div>

        </div>
    </div>
</div>

@endsection