@extends('front.layout.main-layout')

@section('content')

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background"
                style="background-image: url('{{ asset('web/media/sm/' . $service->slider_image) }}');">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        {{-- Optional: You can show something here if needed --}}
                    </div>
                </div>
            </div>
        </section>


        <!-- end page title -->

        
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side Image -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('web/media/lg/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid rounded shadow">
                </div>

                <!-- Right Side Details -->
                <div class="col-lg-7">
                    <h2 class="mb-3"
                    style="
    color: #464646;
    font-size: 35px;
"
                    >{{ $service->name }}</h2>
                    <p class="text-muted">{!! $service->description !!}</p>

                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                        Apply / Request Info
                    </button>
                </div>
            </div>
        </div>
    </section>

<!-- Modal Form -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog pt-0">
<form class="modal-content" method="POST" action="{{ route('inquiry.store') }}" enctype="multipart/form-data">

    
        <strong class="p-2 pl-3 text-uppercase text-dark mb-0">send inquiry</strong>
        <hr class="m-0">
    @csrf

    <input type="hidden" name="service" value="{{ $service->name }}">
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
    <button type="submit" class="btn btn-primary" 
        style="transition: all 0.3s ease;"
        onmouseover="this.style.backgroundColor='#003366'; this.style.color='#00ff00'; this.style.borderColor='#003366';"
        onmouseout="this.style.backgroundColor=''; this.style.color=''; this.style.borderColor='';">
        Submit Inquiry
    </button>
</div>

</form>

    </div>
</div>
@endsection
