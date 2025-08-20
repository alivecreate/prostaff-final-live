<footer class="footer-dark bg-dark-gray pt-0 pb-2 lg-pb-35px"style="background: #050e56;">
   
   
    {{-- <div class="footer-top pt-50px pb-50px sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 text-center text-xl-start lg-mb-30px sm-mb-20px">
                    <h6 class="text-white mb-5px fw-500 ls-minus-1px">Build Your Workforce with Prostaff</h6>
                </div>

                <div class="col-xl-6 text-center text-xl-end">
                    <a href="{{ route('contact') }}" class="btn btn-extra-large btn-yellow left-icon btn-box-shadow btn-rounded text-transform-none d-inline-block align-middle me-15px xs-m-10px"><i class="feather icon-feather-mail"></i>Get Started</a>
                    <a href="tel:{{ getWebsiteData()['secondary_phone'] }}" class="btn btn-extra-large btn-black left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"><i class="feather icon-feather-phone-call"></i>{{ getWebsiteData()['secondary_phone'] }}</a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container" style="padding-top: 40px;">
        <div class="row justify-content-center fs-17 fw-300 mt-5 mb-4 md-mt-45px md-mb-45px xs-mt-35px xs-mb-35px">
            <!-- start footer column -->
            <div class="col-6 col-lg-3 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                @if(isset(getWebsiteData()['light_logo']))
                   <a href="{{route('index')}}">
                      <img src="{{asset('web/media/sm')}}/{{getWebsiteData()['light_logo']}}" alt="{{getWebsiteData()['name']}}">
                   </a>
                @endif
                <div class="elements-social social-icon-style-02 mt-20px lg-mt-20px">
                    <ul class="small-icon light">
                        {{-- <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li> 
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>  --}}
                        <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li> 
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-lg-3 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Pages</span>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('permit') }}">Job seeker and Employer</a></li>
                    <li><a href="{{route('services-category')}}">Our Service Sectors</a></li>
                    {{-- <li><a href="{{ route('process') }}">Foreign Employment Process</a></li> --}}
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Who We Are</span>
                <p class="text-white" style="max-width: 200px; line-height: 1.6;">
                    Prostaff Recruitment connects skilled manpower with global job opportunities in diverse industries.
                </p>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-lg-4 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Get in touch</span>
                {{-- <p class="mb-5px text-white">Need support?</p> --}}
                <a href="mailto:{{ getWebsiteData()['primary_mail'] }}" class="text-white d-block mb-15px mb-2">
                    {{ getWebsiteData()['primary_mail'] }}
                </a>
                <a href="mailto:{{ getWebsiteData()['secondary_mail'] }}" class="text-white d-block mb-15px">
                    {{ getWebsiteData()['secondary_mail'] }}
                </a>
                <span class="fs-18 fw-400 d-block text-white mb-5px">Contact No.</span>
                {{-- <p class="mb-5px text-white"></p> --}}
                <a href="tel:{{ getWebsiteData()['primary_phone'] }}" class="text-white lh-16 d-block mb-2">
                    {{ getWebsiteData()['primary_phone'] }}
                </a>
                <a href="tel:{{ getWebsiteData()['secondary_phone'] }}" class="text-white lh-16 d-block">
                    {{ getWebsiteData()['secondary_phone'] }}
                </a>
            </div>
            <!-- end footer column -->
        </div>
        <div class="visitor-counter text-center mt-3" style="color: aliceblue">
            @php
                $counterFile = public_path('counter.txt');

                // Create the file if it doesn't exist
                if (!file_exists($counterFile)) {
                    file_put_contents($counterFile, 0);
                }

                // Read, increment, and save the counter
                $counter = (int)file_get_contents($counterFile);
                $counter++;
                file_put_contents($counterFile, $counter);

                // Display total visitors
                echo "Total Visitors: " . $counter;
            @endphp
        </div>

        <div class="row align-items-center fs-16 fw-300">
            <!-- Left: Copyright -->
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-white">
                    &COPY; Copyright 2025 
                    <a href="#" target="_blank" class="text-decoration-line-bottom text-white">Prostaff Recruitment</a>
                </p>
            </div>

            <!-- Right: Design & Developed -->
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0 text-white">
                    Design &amp; Developed by  
                    <a href="https://www.alivecreate.com/" target="_blank" class="text-decoration-line-bottom text-white">
                        Alivecreate Web Solution
                    </a>
                </p>
            </div>
        </div>

    </div>
</footer>

        <a href="https://wa.me/918078688378?text=Hi%2C%20I%E2%80%99m%20interested%20in%20your%20recruitment%20services.%20Please%20share%20details%20about%20the%20process%2C%20available%20opportunities%2C%20and%20how%20I%20can%20apply.%20Thank%20you%21" target="_blank" class="whatsapp-float">
            <i class="fab fa-whatsapp"></i>
        </a>


        <a href="tel:+81518464" class="float-btn call">
            <i class="fas fa-phone-alt"></i>
        </a>
          
          <style>
            .float-btn {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 20px;
            z-index: 1000;
            border-radius: 50%;
            text-align: center;
            font-size: 22px;
            color: white;
            line-height: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            }


            .whatsapp-float {
                position: fixed;
                bottom: 54px;
                right: 20px;
                color: white;
                background-color: #10a347;
                border-radius: 50%;
                padding: 15px;
                font-size: 24px;
                z-index: 1000;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                text-align: center;
                height: 50px;
                width: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
          .whatsapp-float:hover {
            background-color: #0e7636;
            color: white;
          }

          .call {
            bottom: 120px;
            right: 20px;
            background-color: #0a66c2;
            }

          .call:hover {
            bottom: 120px;
            right: 20px;
            background-color: #0c5299;
            color: white;
            }
          </style>
