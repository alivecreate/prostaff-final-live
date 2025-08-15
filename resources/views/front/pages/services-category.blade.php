@extends('front.layout.main-layout')

@section('content')


        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background " style="background-image: url({{asset('picture/manpower3.jpg')}})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        {{-- <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Latest news</h1> --}}
                        {{-- <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">ManPower Requirement</h2> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        
<section class="bg-light py-5">
    <div class="container">

        <!-- Page Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-black">Our Services Sector</h2>
        </div>

        <!-- Category Cards -->
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                       @if($category->image)
                            <a href="{{ route('category.services', $category->slug) }}">
                                <img src="{{ asset('web/media/lg/' . $category->image) }}"
                                    class="card-img-top"
                                    style="height: 250px; object-fit: cover;"
                                    alt="{{ $category->name }}">
                            </a>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark">{{ $category->name }}</h5>

                            @if($category->description)
                                <p class="card-text text-muted">
                                    {{ Str::limit(strip_tags($category->description), 100) }}
                                </p>
                            @endif

                            <div class="mt-auto">
                                <a href="{{ route('category.services', $category->slug) }}" class="btn btn-outline-primary btn-sm">
                                    Explore Services
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
