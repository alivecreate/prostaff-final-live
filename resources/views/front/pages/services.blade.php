@extends('front.layout.main-layout')

@section('content')

    <body data-mobile-nav-style="classic" class="custom-cursor">

        <!-- start page title -->
<section class="top-space-margin page-title-big-typography cover-background text-center" 
    style="
        background-image: url({{ asset('web/media/lg/' . $category->image) }}); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        background-color: rgba(0, 0, 0, 0.5); 
        background-blend-mode: overlay;
    ">

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 300px;">
            <div class="col-lg-8">
                <h2 class="text-white text-shadow-medium fw-600 ls-minus-1px mb-0 display-4">
                    {{ $category->name }}
                </h2>
            </div>
        </div>
    </div>
</section>


        <!-- start category section -->
            <section class="bg-light py-5">
                <div class="container">
                    <!-- Show category name and image -->
                    @if(isset($category))
                        <div class="text-center mb-5">
                            @if($category->description)
                                <p class="text-muted">{!! $category->description !!}</p>
                            @endif
                        </div>
                    @endif

                    <!-- Show services -->
                    <div class="row">
                        @forelse($services as $service)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm">
                                    <a href="{{ route('serviceDetail', $service->slug) }}">
                                        <img src="{{ asset('web/media/sm/' . $service->image) }}"
                                            class="card-img-top"
                                            alt="{{ $service->name }}"
                                            style="height: 220px; object-fit: cover;">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $service->name }}</h5>
                                        <p class="card-text text-muted">
                                            {{ Str::limit(strip_tags($service->description), 100) }}
                                        </p>
                                        
                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                        Apply / Request Info
                    </button>

                                        <a href="{{ route('serviceDetail', $service->slug) }}" class="btn btn-sm btn-primary mt-2">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p class="text-muted">No services found in this category.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        <!-- end section -->


        


        {{-- <div class="text-center mb-5">
    <h3 class="fw-bold">Service Categories</h3>
    <div class="row justify-content-center">
        @foreach($categories as $category)
            <div class="col-auto">
                <a href="{{ route('category.services', $category->slug) }}" class="btn btn-outline-primary m-1">
                    {{ $category->name }}
                </a>
            </div>
        @endforeach
    </div>
</div> --}}


        <!-- start category section -->

        <!-- end section -->


        <!-- start section --> 
        {{-- <section class="bg-very-light-gray"> 
            <div class="container">  
                <div class="row justify-content-center mb-3">
                    <div class="col-xl-7 col-lg-8 col-md-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px sm-ls-minus-1px">
                            We provide manpower recruitment services across the globe
                        </h3>
                    </div>
                </div>

                        <div class="row">
            @forelse ($services as $service)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('web/media/sm/' . $service->image) }}" 
                             class="card-img-top" 
                             alt="{{ $service->name }}" 
                             style="height: 220px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold text-dark">{{ $service->name }}</h5>
                            <p class="card-text text-muted">
                                {{ Str::limit(strip_tags($service->description), 100) }}
                            </p>
                            <a href="{{ route('serviceDetail', $service->slug) }}" class="btn btn-sm btn-primary mt-2">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No services found under this category.</p>
                </div>
            @endforelse
        </div>
            </div>
        </section> --}}
        <!-- end section --> 
        <!-- start section --> 

@endsection