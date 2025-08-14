<footer class="footer-dark bg-dark-gray pt-0 pb-2 lg-pb-35px"
style="
    background: #050e56;
"
>
    <div class="footer-top pt-50px pb-50px sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- start footer column -->
                <div class="col-xl-6 text-center text-xl-start lg-mb-30px sm-mb-20px">
                    <h6 class="text-white mb-5px fw-500 ls-minus-1px">Build Your Workforce with Prostaff — Contact Us Now!</h6>
                    {{-- <span class="fs-20 widget-text fw-300">We will take care of your business accounting services.</span> --}}
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div class="col-xl-6 text-center text-xl-end">
                    <a href="{{ route('contact') }}" class="btn btn-extra-large btn-yellow left-icon btn-box-shadow btn-rounded text-transform-none d-inline-block align-middle me-15px xs-m-10px"><i class="feather icon-feather-mail"></i>Get Started</a>
                    <a href="tel:{{ getWebsiteData()['secondary_phone'] }}" class="btn btn-extra-large btn-black left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"><i class="feather icon-feather-phone-call"></i>{{ getWebsiteData()['secondary_phone'] }}</a>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>

    <div class="container">
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
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li> 
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li> 
                        <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li> 
                    </ul>
                </div>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Pages</span>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{route('services-category')}}">Services</a></li>

                    <li><a href="{{ route('process') }}">Foreign Employment Process</a></li>
                    <li><a href="{{ route('permit') }}">Work Permit Application</a></li>
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
            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Get in touch</span>
                {{-- <p class="mb-5px text-white">Need support?</p> --}}
                <a href="mailto:{{ getWebsiteData()['primary_mail'] }}" class="text-white text-decoration-line-bottom d-block mb-15px">
                    {{ getWebsiteData()['primary_mail'] }}
                </a>
                <a href="mailto:{{ getWebsiteData()['secondary_mail'] }}" class="text-white text-decoration-line-bottom d-block mb-15px">
                    {{ getWebsiteData()['secondary_mail'] }}
                </a>
                <span class="fs-18 fw-400 d-block text-white mb-5px">Contact No.</span>
                {{-- <p class="mb-5px text-white"></p> --}}
                <a href="tel:{{ getWebsiteData()['primary_phone'] }}" class="text-white lh-16 d-block">
                    {{ getWebsiteData()['primary_phone'] }}
                </a>
                <a href="tel:{{ getWebsiteData()['secondary_phone'] }}" class="text-white lh-16 d-block">
                    {{ getWebsiteData()['secondary_phone'] }}
                </a>
            </div>
            <!-- end footer column -->
        </div>

        <div class="row align-items-center fs-16 fw-300">
            <!-- start copyright -->
            <div class="col-md-4 last-paragraph-no-margin order-2 order-md-1 text-center text-md-start">
                <p>&COPY; Copyright 2025 
                    <a href="https://www.alivecreate.com/" target="_blank" class="text-decoration-line-bottom text-white">Alivecreate Web Solution</a>
                </p>
            </div>
            <!-- end copyright -->
            <!-- start footer menu -->
            <div class="col-md-8 text-md-end order-1 order-md-2 text-center text-md-end sm-mb-10px">
                {{-- Optional footer links can go here --}}
            </div>
            <!-- end footer menu -->
        </div>
    </div>
</footer>
