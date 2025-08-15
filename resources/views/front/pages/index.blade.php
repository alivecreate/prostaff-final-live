@extends('front.layout.main-layout')

@section('content')

    <body data-mobile-nav-style="classic" class="custom-cursor">

        <!-- start banner -->
<section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark d-flex align-items-center justify-content-center text-center"
         data-parallax-background-ratio="0.8"
         style="background-image: url({{ asset('picture/heading1.jpg') }}); background-size: cover; background-position: center;">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-11 text-white" 
                 data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
                 
                <!-- Headline -->
                <h1 class="fs-60 sm-fs-45 fw-600 mb-3 text-shadow-large ls-minus-2px">
                    "Your Trusted Partner in Overseas Recruitment"
                </h1>

                <!-- Subheadline -->
                <p class="opacity-5 fs-20 w-100 fw-300 mb-4">
                    Delivering Skilled and Reliable Manpower Across Borders.
                </p>

                <!-- Call to Action -->
                {{-- <div class="d-flex justify-content-center">
                    <div class="feature-box feature-box-left-icon-middle align-items-center">
                        <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-yellow me-3">
                            <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium"></i>
                        </div>
                        <div class="feature-box-content">
                            <a href="{{ route('contact') }}" class="d-inline-block fs-19 text-white text-shadow-double-large">Get in Touch</a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</section>

        <!-- end banner -->     

                <!-- 1. start section --> 
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{asset('picture/about2.png')}}" alt="About Prostaff" class="img-fluid rounded shadow">
                    </div>

                    <!-- Right Column: Heading + Text -->
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3 text-black">Who We Are..</h2>
                        <p class="text-muted">
                            Prostaff Recruitment Pte Ltd is a leading global manpower solutions provider headquartered in singapore, with a proven track record in delivering high-quality overseas placement services. Leveraging years of expertise in international recruitment, we specialize in connecting skilled and semi-skilled professionals with reputable employers across diverse industries such as construction, engineering, healthcare, hospitality, IT, manufacturing, and more.

Our dedicated team works closely with both candidates and employers to ensure the perfect match—helping businesses overcome talent shortages while empowering individuals to achieve their career aspirations abroad. With a strong network of international partners and a deep understanding of global labor market trends, we are committed to delivering ethical, transparent, and efficient recruitment solutions.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


        <!-- start section -->
        <section class="bg-very-light-gray overflow-hidden">
            <div class="container">    
                <div class="row justify-content-center mb-4">
                    <div class="col-xxl-6 col-lg-8 col-md-10 text-center">
                        <h4 class="text-dark-gray fw-700 ls-minus-1px">We specialize in recruiting candidates from</h4>
                    </div>
                </div>            
                <div class="row">
                    <div class="col-12">
                        @php
                            $items = [
                                ['img' => 'picture/10 (1).png', 'title' => 'Malaysia',],
                                ['img' => 'picture/10 (2).png', 'title' => 'India',],
                                ['img' => 'picture/10 (3).png', 'title' => 'Bangladesh',],
                                ['img' => 'picture/10 (4).png', 'title' => 'Philippines',],
                                ['img' => 'picture/10 (5).png', 'title' => 'Myanmar',],
                                ['img' => 'picture/10 (6).png', 'title' => 'Singapore',],
                            ];
                        @endphp

                        <div class="d-flex flex-wrap justify-content-center gap-4">
                            @foreach ($items as $item)
                                <div style="flex: 0 0 auto; text-align: center;">
                                    <a class="text-decoration-none d-block">
                                        <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}"
                                            style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; transition: transform 0.3s;"
                                            onmouseover="this.style.transform='scale(1.1)'" 
                                            onmouseout="this.style.transform='scale(1)'">
                                        <div class="mt-2 fw-600 text-dark-gray fs-15">{{ $item['title'] }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        {{-- <section class="pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-11 md-mb-60px sm-mb-40px">
                        <div class="row mt-10 align-items-center">
                            <div class="col-xl-5 col-lg-6 col-sm-5 xs-mb-25px text-center">
                                <div class="position-relative">
                                    <span class="w-200px h-200px bg-yellow rounded-circle d-inline-block" data-anime='{ "opacity": [0, 1], "staggervalue": 0, "easing": "easeOutQuad" }'></span>
                                    <span class="fs-160 lg-fs-150 text-dark-gray fw-700 position-absolute left-0px w-100 top-50 ls-minus-5px md-top-40px" data-anime='{ "opacity": [0, 1], "staggervalue": 200, "easing": "easeOutQuad" }'>40</span>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-sm-7 ps-45px lg-ps-15px last-paragraph-no-margin text-center text-sm-start" data-anime='{  "opacity": [0,1], "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                                <h5 class="fw-600 text-dark-gray ls-minus-1px mb-15px">Who We Are</h5>
                                <p>Prostaff Recruitment Pte Ltd is a global manpower solutions provider based in [insert location if known]. With years of expertise in overseas placement, we specialize in connecting skilled professionals with international employers across various industries. Our mission is to bridge talent gaps and support career aspirations.</p>
                                <a href="demo-accounting-process.html" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-transform-none fw-600 mt-15px">
                                    <span>
                                        <span class="btn-text">Discover now</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-11 contact-form-style-01 position-relative">
                        <div class="position-absolute left-minus-25px md-left-minus-5px xs-left-0 top-100px md-top-0px">
                            <img src="images/demo-accounting-home-left-img.jpg" class="w-40px" alt="">
                        </div>
                        <div class="ps-14 pe-14 pt-12 pb-12 lg-p-12 bg-white box-shadow-quadruple-large border-radius-6px">
                            <h6 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-35px sm-mb-25px" data-anime='{ "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Request a free advice?</h6>
                            <form action="email-templates/contact-form.php" method="post" data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="position-relative form-group mb-15px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                    <input type="text" name="name" class="form-control required" placeholder="Your name*" />
                                </div>
                                <div class="position-relative form-group mb-15px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control required" placeholder="Your email address*" />
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                    <input type="tel" name="phone" class="form-control" placeholder="Your phone" />
                                </div>
                                <div class="position-relative terms-condition-box text-start d-inline-block">
                                    <label>
                                        <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition check-box align-middle required">
                                        <span class="box fs-16">I agree to the terms of service.</span>
                                    </label>
                                </div>
                                <div class="position-relative mt-20px">
                                    <button class="btn btn-large btn-round-edge btn-base-color btn-box-shadow submit w-100" type="submit">Get free quote</button>
                                    <div class="form-results mt-20px text-center lh-24 d-none"></div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->
        <!-- start section --> 

        
        

        <section class="bg-light py-5">
            <div class="container">

                <!-- Page Title -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-black">Sectors we serve</h2>
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

{{-- icon  --}}
<section class="bg-very-light-gray py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center mb-4 text-center">
            <div class="col-xl-5 col-lg-6 mb-3">
                <h4 class="text-dark-gray fw-700 mb-0 ls-minus-1px">
                    Why choose us as your recruitment consultant?
                </h4>
            </div>
            {{-- <div class="col-xl-5 col-lg-6">
                <p class="w-90 mx-auto">
                    We put a strong focus on the needs of your business to figure out solutions that best fit your demand.
                </p>
            </div> --}}
        </div>

        <div class="row text-center g-4">
            <!-- Icon Item -->
            <div class="col-6 col-md-3">
                <div class="p-4 border rounded bg-white shadow-sm h-100">
                    <div class="d-inline-flex align-items-center justify-content-center border border-primary rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <i class="fa-solid fa-users text-primary" style="font-size: 40px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0">Right People</h6>
                </div>
            </div>
            <!-- Icon Item -->
            <div class="col-6 col-md-3">
                <div class="p-4 border rounded bg-white shadow-sm h-100">
                    <div class="d-inline-flex align-items-center justify-content-center border border-primary rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <i class="fa-solid fa-headset text-primary" style="font-size: 40px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0">Custom Help</h6>
                </div>
            </div>
            <!-- Icon Item -->
            <div class="col-6 col-md-3">
                <div class="p-4 border rounded bg-white shadow-sm h-100">
                    <div class="d-inline-flex align-items-center justify-content-center border border-primary rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <i class="fa-solid fa-handshake text-primary" style="font-size: 40px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0">Full Support</h6>
                </div>
            </div>
            <!-- Icon Item -->
            <div class="col-6 col-md-3">
                <div class="p-4 border rounded bg-white shadow-sm h-100">
                    <div class="d-inline-flex align-items-center justify-content-center border border-primary rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <i class="fa-solid fa-shield-halved text-primary" style="font-size: 40px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0">Legal & Safe</h6>
                </div>
            </div>
        </div>
    </div>
</section>




        <!-- start section --> 
        {{-- <section class="p-0 bg-base-color">
            <div class="container">
                <div class="row align-items-center justify-content-center g-0">
                    <div class="col-auto d-flex align-items-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <img src="https://placehold.co/130x100" alt="" />
                        <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                            <p>Save your precious time and effort spent for finding a solution. <a href="contact.blade.php" class="text-decoration-line-bottom fw-500 text-white">Contact us now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->
        <!-- start section -->
        {{-- <section>
            <div class="container">
                <div class="row justify-content-center mb-6">
                    <div class="col-xl-6 col-md-8 col-sm-10 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h4 class="mb-0 text-dark-gray fw-700 ls-minus-1px w-85 xl-w-100 mx-auto">Trusted by the world's fastest growing companies</h4>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 justify-content-center mb-7 sm-mb-45px" data-anime='{ "el": "childs", "translateY": [50, 0], "rotateX":[30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col sm-mb-30px">
                        <div class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="images/logo-monday-dark-green.svg" class="h-40px md-h-35px sm-h-40px" alt="" />
                            </div>
                            <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                                <p>Project management - <span class="fw-600 text-dark-gray ls-minus-05px">275% Growth</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col sm-mb-30px">
                        <div class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="images/logo-dropbox-dark-green.svg" class="h-40px md-h-35px sm-h-40px" alt="" />
                            </div>
                            <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                                <p>Secure storage - <span class="fw-600 text-dark-gray ls-minus-05px">235% Growth</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="images/logo-slack-dark-green.svg" class="h-40px md-h-35px sm-h-40px" alt="" />
                            </div>
                            <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                                <p>Team management - <span class="fw-600 text-dark-gray ls-minus-05px">195% Growth</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row position-relative clients-style-08 mb-6 sm-mb-40px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-netflix-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-invision-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-yahoo-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-walmart-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-monday-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-logitech-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-netflix-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-invision-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-yahoo-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-walmart-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-monday-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                        </div> 
                    </div>  
                </div>
                <div class="row justify-content-center align-items-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-12 text-center">
                        <div class="d-inline-block align-middle bg-yellow fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">Trust</div>
                        <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Join the <span class="text-decoration-line-bottom text-dark-gray">10000+ companies</span> trusting crafto accounting.</div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section --> 
        <!-- start section -->
        {{-- <section class="bg-very-light-gray pb-0" id="services">
            <div class="container">
                <div class="row mb-8 sm-mb-10">
                    <div class="col-12 tab-style-08"> 
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show" id="tab_eight1">
                                <div class="row align-items-center justify-content-center g-lg-0">
                                    <div class="col-md-6 sm-mb-30px position-relative overflow-hidden" data-anime='{ "effect": "slide", "color": "#005153", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                                        <img src="https://placehold.co/600x505" alt="" class="w-100 border-radius-6px">
                                        <div class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 800, "staggervalue": 500, "easing": "easeOutQuad" }'>
                                            <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px" data-to="85"></h2>
                                            <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project completed</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                        <div class="mb-20px">
                                            <div class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2"></div>
                                            <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Strategic planning</span>
                                        </div>
                                        <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">Organization's process of defining strategy.</h4>
                                        <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and qualitative business process services to the customers which helps streamline your business and give your company a competitive. </p> 
                                        <a href="services.blade.php" class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn more<span class="bg-base-color text-white"><i class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_eight2">
                                <div class="row align-items-center justify-content-center g-lg-0">
                                    <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                        <img src="https://placehold.co/600x505" alt="" class="w-100 border-radius-4px">
                                        <div class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                            <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px" data-to="80"></h2>
                                            <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project completed</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                        <div class="mb-20px">
                                            <div class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2"></div>
                                            <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Audit assurance</span>
                                        </div>
                                        <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">An excellent audit service for company.</h4>
                                        <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and qualitative business process services to the customers which helps streamline your business and give your company a competitive. </p> 
                                        <a href="services.blade.php" class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn more<span class="bg-base-color text-white"><i class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_eight3">
                                <div class="row align-items-center justify-content-center g-lg-0">
                                    <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                        <img src="https://placehold.co/600x505" alt="" class="w-100 border-radius-4px">
                                        <div class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                            <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px" data-to="85"></h2>
                                            <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project completed</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                        <div class="mb-20px">
                                            <div class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2"></div>
                                            <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Financial projections</span>
                                        </div>
                                        <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">We are leader in tax advisor and financial.</h4>
                                        <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and qualitative business process services to the customers which helps streamline your business and give your company a competitive. </p> 
                                        <a href="services.blade.php" class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn more<span class="bg-base-color text-white"><i class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_eight4">
                                <div class="row align-items-center justify-content-center g-lg-0">
                                    <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                        <img src="https://placehold.co/600x505" alt="" class="w-100 border-radius-4px">
                                        <div class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                            <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px" data-to="80"></h2>
                                            <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project completed</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                        <div class="mb-20px">
                                            <div class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2"></div>
                                            <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Business planning</span>
                                        </div>
                                        <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">We creating specific business strategies.</h4>
                                        <p class="mb-35px md-mb-25px">We provide simplified accounting solutions and qualitative business process services to the customers which helps streamline your business and give your company a competitive. </p> 
                                        <a href="services.blade.php" class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn more<span class="bg-base-color text-white"><i class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-style-08 border-bottom border-color-extra-medium-gray bg-white box-shadow-quadruple-large">
                <div class="container">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs border-0 fw-500 fs-19 text-center">
                        <li class="nav-item"><a data-bs-toggle="tab" href="#tab_eight1" class="nav-link active">Strategic planning<span class="tab-border bg-base-color"></span></a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight2" data-tab="counter">Audit assurance<span class="tab-border bg-base-color"></span></a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight3" data-tab="counter">Financial projections<span class="tab-border bg-base-color"></span></a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight4" data-tab="counter">Business planning<span class="tab-border bg-base-color"></span></a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
        </section> --}}
        <!-- end section -->
        <!-- start section -->
        {{-- <section>
            <div class="container">
                <div class="row justify-content-center mb-7 md-mb-4">
                    <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px sm-mb-40px text-center text-lg-start">
                        <h4 class="fw-700 mb-0 text-dark-gray ls-minus-1px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Amazing accounting statistics showing the power of numbers.</h4>
                    </div>
                    <div class="col-lg-6 offset-xl-1 text-center text-lg-start">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <!-- start counter item -->
                            <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                                <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-2px mb-5px" data-text="%" data-to="96"><sup class="text-emerald-green top-minus-5px"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                                <span class="fs-19 fw-600 ls-minus-05px mb-5px d-block text-dark-gray" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Prefer cloud accounting</span>
                                <p class="w-90 sm-w-100 md-mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Lorem ipsum simply dummy text printing typesetting.</p>
                            </div>
                            <!-- end counter item -->
                            <!-- start counter item -->
                            <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                                <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-2px mb-5px" data-text="%" data-to="98"><sup class="text-emerald-green top-minus-5px"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                                <span class="fs-19 fw-600 ls-minus-05px mb-5px d-block text-dark-gray" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Most outsourced tasks</span>
                                <p class="w-90 sm-w-100 md-mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Lorem ipsum simply dummy text printing typesetting.</p>
                            </div>
                            <!-- end counter item -->
                        </div>
                    </div>
                </div>
                <div class="row m-0 align-items-center justify-content-center border border-color-extra-medium-gray border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large" data-anime='{ "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>                    
                    <div class="col-lg-10">
                        <div class="swiper slider-one-slide testimonials-style-09" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center pt-25px pb-25px"> 
                                        <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                            <img src="https://placehold.co/200x200" class="rounded-circle w-100px h-100px md-mb-35px" alt="">  
                                            <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">This is one of the best templates I've came across. Very organized, great design style and easy around.</span>
                                        </div>
                                        <div class="col-lg-1 d-none d-lg-inline-block">
                                            <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto"></div>
                                        </div>
                                        <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                            <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Shoko mugikura</span>
                                            <div>Financial manager</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center pt-25px pb-25px"> 
                                        <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start"> 
                                            <img src="https://placehold.co/200x200" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                            <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">This is one of the best templates I've came across. Very organized, great design style and easy around.</span>
                                        </div>
                                        <div class="col-lg-1 d-none d-lg-inline-block">
                                            <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto"></div>
                                        </div>
                                        <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                            <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Matthew taylor</span>
                                            <div>Financial manager</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center pt-25px pb-25px"> 
                                        <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start"> 
                                            <img src="https://placehold.co/200x200" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                            <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">This is one of the best templates I've came across. Very organized, great design style and easy around.</span>
                                        </div>
                                        <div class="col-lg-1 d-none d-lg-inline-block">
                                            <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto"></div>
                                        </div>
                                        <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                            <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Herman miller</span>
                                            <div>Chief financial</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-2 md-mb-25px">
                        <div class="d-flex justify-content-center">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-very-light-gray"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-very-light-gray"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->

@endsection
