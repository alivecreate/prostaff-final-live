@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".about a").addClass( "active");
    </script>
@endsection

@section('content')

<section class="p-0">
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
            style="background-image: url({{asset('frontend/images/banner')}}/about-banner.jpg); background-size: cover; background-position: center center; display: block;"
        >
        <div class="container custom-breadcrumb m-0" style="
            background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
            <div class="container">
                <div class="col pl-0">
                    <div class="banner-contain">
                        
                        <h3 class="text-left">Who We Are <br>
                            <span class="text-white">About Us</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- about section start -->
    <section class="about-page section-b-space" 
        style="padding-bottom: 70px; background-image: linear-gradient(45deg, #c5d7ce 0%, #ffffff 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">About Agriness Trading</h3>
                    <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">We started our company in 2022 as a fruit and vegetable supply chain, Angriness Trading Pvt. Ltd. The app is going to be one platform that aims to bridge the gap between farmers and B2B consumers. Our company is providing a door-to-door supply chain facility with integrated waste management...</p>
                </div>

                <div class="col-sm-12 col-md-4">
                    <img 
                    style="width: 100%;border: 3px solid white;border-radius: 40px;height: auto;"
                    class="sppb-img-responsive" src="{{asset('frontend/images/banner')}}/agriness-aboutus.jpg" alt="Image" title="">
                </div>
            </div>
        </div>
    </section>


    @include('front.widget.our-team')


    @include('front.widget.call-to-action-strip')

    @endsection