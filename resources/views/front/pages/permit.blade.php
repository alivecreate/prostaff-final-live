@extends('front.layout.main-layout')

@section('content')

<body data-mobile-nav-style="classic" class="custom-cursor overflow-x-hidden">

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background r" style="background-image: url({{asset('picture/W1.jpg')}})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        {{-- <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Working process</h1> --}}
                        {{-- <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Superlative process</h2> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <section>
            <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center">
                <h3 class="fw-700 text-dark-gray ls-minus-2px">Job seeker and Employer</h3>
                <h4>"For Job Seekers & Employers"</h4>
            </div>
        </div>
        </section>


        <!-- start section --> 
<section class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Job Seeker -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <a href="#">
                        <img src="{{ asset('picture/employer.jpg') }}"
                            class="card-img-top"
                            style="height: 250px; object-fit: cover;"
                            alt="Job Seeker">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Job Seeker</h5>
                        <p class="card-text text-muted">
                            Find opportunities that match your skills and ambitions. Connect with top employers and take the next step in your career journey.
                        </p>
                        <div class="mt-auto">
                            <button type="button"
                                class="btn btn-outline-primary btn-lg fw-bold"
                                style="border-color: navy; color: navy; font-size: 1.1rem; padding: 10px 20px;"
                                data-bs-toggle="modal"
                                data-bs-target="#jobSeekerModal">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Employer -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <a href="#">
                        <img src="{{ asset('picture/seeker.jpg') }}"
                            class="card-img-top"
                            style="height: 250px; object-fit: cover;"
                            alt="Employer">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Employer</h5>
                        <p class="card-text text-muted">
                            Find the right talent to drive your business forward. Post jobs, review candidates, and hire with confidence.
                        </p>
                        <div class="mt-auto">
                            <button type="button"
                                class="btn btn-outline-primary btn-lg fw-bold"
                                style="border-color: navy; color: navy; font-size: 1.1rem; padding: 10px 20px;"
                                data-bs-toggle="modal"
                                data-bs-target="#employerModal">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Job Seeker Modal -->
<div class="modal fade" id="jobSeekerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px;">
            <div class="modal-header">
                <h5 class="modal-title text-black">Job Seeker Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('jobSeeker.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form- text-black">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-black">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your number" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-black">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-black">Exploring Job In</label>
                    <input type="text" name="message" class="form-control" placeholder="e.g. IT, Healthcare, Engineering">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

            </div>
        </div>
    </div>
</div>

<!-- Employer Modal -->
<div class="modal fade" id="employerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px;">
            <div class="modal-header">
                <h5 class="modal-title text-black">Employer Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                @if(session('success'))
                    <div class="alert alert-success" style="margin-bottom:15px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form  action="{{ route('employer.inquiry.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label text-black">Company Name</label>
                        <input type="text" name="company_name" class="form-control" placeholder="Enter company name" value="{{ old('company_name') }}" required>
                        @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-black">Job Requirement</label>
                        <input type="text" name="job_requirement" class="form-control" placeholder="Describe the job role" value="{{ old('job_requirement') }}">
                        @error('job_requirement') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-black">Country</label>
                        <input type="text" name="country" class="form-control" placeholder="Enter country" value="{{ old('country') }}">
                        @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-black">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone') }}" required>
                        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form- text-black">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" value="{{ old('email') }}" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form- text-black">Note</label>
                        <input type="text" name="note" class="form-control" placeholder="Anything else?" value="{{ old('note') }}">
                        @error('note') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('employerForm');
    if (!form) return;

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        const fd = new FormData(form);

        const res = await fetch(form.action, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            body: fd
        });

        if (res.ok) {
            form.reset();
            alert('Thanks! We received your employer inquiry.');
            // Optionally: bootstrap.Modal.getInstance(document.getElementById('employerModal')).hide();
        } else {
            // If validation fails (422), you can parse and show messages
            const data = await res.json().catch(() => ({}));
            alert('Please correct the errors and try again.');
            console.log(data);
        }
    });
});
</script> --}}

@endsection




        <!-- end section -->
        <!-- start section --> 
        {{-- <section class="py-0 sm-pt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="container overlap-section">
                <div class="row justify-content-center g-0">
                    <div class="col-auto text-center last-paragraph-no-margin pt-20px pb-20px ps-60px pe-60px sm-ps-50px sm-pe-40px bg-white box-shadow-quadruple-large border-radius-100px xs-border-radius-30px">
                        <div class="fs-19 ls-minus-05px"><span class="fw-600 text-dark-gray">Accounting services: </span>Accounting, tax preparation, book keeping and payroll services agency.</div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->
        <!-- start section --> 
        {{-- <section>
            <div class="container"> 
                <div class="row align-items-center justify-content-center" data-anime='{"el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-lg-5 col-md-6 col-sm-7 md-mb-30px">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto"><span class="alt-font text-dark-gray fw-700 fs-130 ls-minus-5px">40<sup>+</sup></span></div>
                            <div class="col-5 col-xl-4 col-md-5 col-sm-6 pe-0"><h6 class="fw-500 text-dark-gray alt-font m-0">Years working experience.</h6></div>
                            <div class="col-3 col-xl-2 col-md-2 text-end d-none d-xl-inline-block"><span class="fw-300 fs-130 text-yellow position-relative top-minus-5px">|</span></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10 overflow-hidden text-center text-lg-start">
                        <div class="row align-items-center">
                            <div class="col-sm-6 last-paragraph-no-margin xs-mb-30px">
                                <h2 class="fw-700 text-dark-gray mb-5px alt-font">5M<sup>+</sup></h2>
                                <span class="ls-minus-05px fs-19 fw-600 text-dark-gray">Project completed</span>
                                <p class="lh-24">Lorem simply text</p>
                            </div>
                            <div class="col-sm-6 last-paragraph-no-margin">
                                <h2 class="fw-700 text-dark-gray mb-5px alt-font">64<sup>K</sup></h2>
                                <span class="ls-minus-05px fs-19 fw-600 text-dark-gray">Satisfied customer</span>
                                <p class="lh-24">Lorem simply text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->


 