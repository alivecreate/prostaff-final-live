
<section class="p-0">
    <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0">
        
    <div class="it-footer-2-area bg-overlay p-relative" data-background="{{asset('frontend/img')}}/website/header-banner.webp"
   style="background-image: url(&quot;{{asset('frontend/img')}}/website/header-banner.webp&quot;);background-size: 100% 100%;background-repeat: no-repeat;
   padding: 48px 0px;
   "
   >   
        <div class="row">
                <div class="col pl-0">
                    <div class="banner-contain">
                        <h3 style="color: #f1f1b2;">Interested In Our Services? <br> <span class="text-white">Get In Touch With Us</span></h3>
                            <div class="col mt-5">
                                <a class="btn-inquire-now1" href="@if(getWebsiteData()['primary_phone'])tel:{{getWebsiteData()['primary_phone']}}@endif" class="btn btn-solid btn-sm">Call Us Now</a>
                                <button data-bs-toggle="modal" data-bs-target="#contact-form" class="btn-inquire-now2">Inquire Now</button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>