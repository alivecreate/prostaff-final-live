@extends('front.layout.main-layout')

@section('content')

<!-- Banner -->
<section class="page-title-big-typography cover-background" style="background-image: url({{asset('picture/bg4.jpg')}})">
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                {{-- Optional heading or effect --}}
                            {{-- <div class="col-lg-7" data-aos="fade-left">
                            <h2 class="alt-font text-dark-gray mb-3">{{ $blog->title }}</h2>
                            <p class="text-muted fs-16">
                                {!! $blog->description !!}
                            </p>
                        </div> --}}
            </div>
        </div>
    </div>
</section>

<!-- Blog Detail Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            
            <!-- Left Column: Blog Image -->
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="{{ asset('web/media/sm/' . $blog->image) }}" alt="{{ $blog->image_title }}" class="img-fluid rounded shadow">
                {{-- <p class="pt-3 text-uppercase text-dark-gray fw-600 fs-15">{{ $blog->image_title ?? 'Featured Image' }}</p> --}}
            </div>

            <!-- Right Column: Blog Content -->
            <div class="col-lg-7" data-aos="fade-left">
                <h2 class="alt-font text-dark-gray mb-3">{{ $blog->heading }}</h2>
                <p class="text-muted fs-16">
                    {!! $blog->description !!}
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
