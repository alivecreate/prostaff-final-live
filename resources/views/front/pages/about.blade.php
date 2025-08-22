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
                        <h2 class="fw-bold mb-3 text-black">About Prostaff Recruitment</h2>
                        <p class="text-muted">
                            Prostaff Recruitment Pte Ltd is a company that helps people find good job opportunities in other countries. We work closely with skilled workers—like nurses, construction workers, hotel staff, technicians, and more—and connect them with companies around the world who are looking to hire. Our goal is to make the hiring process easy, honest, and successful for both the workers and the employers.
                            <br>
                            We understand how important it is for people to have a secure and meaningful job, especially when they are moving abroad. That’s why we take time to carefully select each candidate, making sure they are qualified, prepared, and ready for international work. We also support them throughout the process—from documents and interviews to final placement and travel.
                            <br>
                            At the same time, we work with companies in countries like Singapore, UAE, Qatar, and others, helping them find reliable and trained manpower. We believe in building long-term relationships based on trust, quality, and professionalism.
                            <br>
                            Whether you are looking for a job overseas or need manpower for your business, Prostaff Recruitment is here to guide and support you every step of the way.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->   


        <!-- 2. start section --> 
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Heading + Text -->
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3 text-black">Building Careers, Empowering Lives</h2>
                        <p class="text-muted">
                            At Prostaff Recruitment, we believe that a job is more than just work — it’s a path to a better life. That’s why we go beyond simply placing candidates in roles. We take the time to understand their skills, their dreams, and the kind of support they need when working abroad. From the first conversation to the final deployment, we guide them step-by-step through the process. We help with documentation, interviews, visa support, and even after-placement follow-ups, ensuring they feel confident and secure in their new environment.
                            <br>
                            We’re also committed to the success of the companies we work with. By providing reliable, hardworking, and qualified manpower, we help businesses grow and meet their goals. Whether it's healthcare, construction, hospitality, or factory work, we make sure every placement is a win-win. Our goal is to create lasting partnerships built on trust, quality, and care — because when people are empowered, companies thrive, and communities grow stronger.
                        </p>
                    </div>

                    <!-- Right Column: Image -->
                    <div class="col-md-6 mt-4 mt-md-0">
                        <img src="{{asset('picture/career-about.jpg')}}" alt="Prostaff Team" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->   


        <!-- start section --> 
        
        <!-- end section -->   

        @endsection