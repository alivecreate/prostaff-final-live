@extends('front.layout.main-layout')

@section('content')
    

<body data-mobile-nav-style="classic" class="custom-cursor">

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background " style="background-image: url({{asset('picture/bg6.png')}})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        {{-- <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Latest news</h1> --}}
                        {{-- <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Accounting articles</h2> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->  

        <!-- 1. start section --> 
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{asset('picture/hiring-about.jpg')}}" alt="About Prostaff" class="img-fluid rounded shadow">
                    </div>

                    <!-- Right Column: Heading + Text -->
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3 text-black">Building Careers, Empowering Lives</h2>
                        <p class="text-muted">
                        At Prostaff Recruitment, we take pride in helping people find good job opportunities in other countries. We work closely with skilled workers—like nurses, construction workers, hotel staff, technicians, and more—and connect them with companies around the world who are looking to hire. Our goal is to make the hiring process easy, honest, and successful for both the workers and the employers.
                        <br>
                        We understand how important it is for people to have a secure and meaningful job, especially when they are moving abroad. That’s why we take time to carefully select each candidate, making sure they are qualified, prepared, and ready for international work. We also support them throughout the process—from documents and interviews to final placement and travel.
                        At the same time, we work with companies in Singapore, helping them find reliable and trained manpower. We believe in building long-term relationships based on trust, quality, and professionalism.
                        <br>
                        Whether you are looking for a job overseas or need manpower for your business, Prostaff Recruitment is here to guide and support you every step of the way.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->   


        <!-- 2. start section --> 
        {{-- <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Heading + Text -->
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3 text-black">Building Careers, Empowering Lives</h2>
                        <p class="text-muted">
                        At Prostaff Recruitment, we take pride in helping people find good job opportunities in other countries. We work closely with skilled workers—like nurses, construction workers, hotel staff, technicians, and more—and connect them with companies around the world who are looking to hire. Our goal is to make the hiring process easy, honest, and successful for both the workers and the employers.
                        <br>
                        We understand how important it is for people to have a secure and meaningful job, especially when they are moving abroad. That’s why we take time to carefully select each candidate, making sure they are qualified, prepared, and ready for international work. We also support them throughout the process—from documents and interviews to final placement and travel.
                        At the same time, we work with companies in Singapore, helping them find reliable and trained manpower. We believe in building long-term relationships based on trust, quality, and professionalism.
                        <br>
                        Whether you are looking for a job overseas or need manpower for your business, Prostaff Recruitment is here to guide and support you every step of the way.
                        </p>
                    </div>

                    <!-- Right Column: Image -->
                    <div class="col-md-6 mt-4 mt-md-0">
                        <img src="{{asset('picture/career-about.jpg')}}" alt="Prostaff Team" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->   


        <!-- start section --> 
        
        <!-- end section -->   

        @endsection