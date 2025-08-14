
<section class="p-0">
    <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0">
        <img src="{{asset('frontend')}}/images/banner/farming-bg1.jpg" alt="" class="bg-img blur-up lazyload">
        <div class="container m-0" style="
            background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 0rem">
            <div class="row">
                <div class="col pl-0">
                    <div class="banner-contain">
                        <h3 style="color: #f1f1b2;">Interested In Our Services? <br> <span class="text-white">Get In Touch With Us</span></h3>
                            <div class="col mt-5">
                                <a class="btn-inquire-now1" href="@if(getWebsiteData()['primary_phone'])tel:+91{{getWebsiteData()['primary_phone']}}@endif" class="btn btn-solid btn-sm">Call Us Now</a>
                                <button data-bs-toggle="modal" data-bs-target="#contact-form" class="btn-inquire-now2">Inquire Now</button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>