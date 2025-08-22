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
            <h2 class="fw-bold text-black">Our Service Sectors</h2>
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

                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                        Apply / Request Info
                    </button>

                                
    <!-- Modal Form -->
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog pt-0">
            <form class="modal-content" method="POST" action="{{ route('inquiry.store') }}" enctype="multipart/form-data">


                <strong class="p-2 pl-3 text-uppercase text-dark mb-0">send inquiry</strong>
                <hr class="m-0">
                @csrf

                <input type="hidden" name="service" value="{{ $category->name }}">
                <input type="hidden" name="page_url" value="{{ url()->current() }}">

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-control py-2" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number *</label>
                        <input type="text" name="phone" class="form-control py-2" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control py-2" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control py-2">
                    </div>

                    {{-- <div class="mb-3">
            <label for="document" class="form-label">Upload Document (Optional)</label>
            <input type="file" name="document" class="form-control py-2" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.jpeg,.png,.webp">
        </div> --}}

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" class="form-control py-2" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" style="transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#003366'; this.style.color='#00ff00'; this.style.borderColor='#003366';"
                        onmouseout="this.style.backgroundColor=''; this.style.color=''; this.style.borderColor='';">
                        Submit Inquiry
                    </button>
                </div>

            </form>

        </div>
    </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
