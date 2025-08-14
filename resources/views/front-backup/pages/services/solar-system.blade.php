@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".services a").addClass( "active");
    </script>
@endsection

@section('content')
    
    <section class="p-0">
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
            style="background-image: url({{asset('frontend/images/banner')}}/solar-system.jpg); background-size: cover; background-position: center center; display: block;"
        >
            <div class="container custom-breadcrumb m-0" style="
                background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
                <div class="row">
                    <div class="col pl-0">
                        <div class="banner-contain">
                            
                            <h3 class="text-left"><a href="{{route('services')}}">Our Services</a><br>
                                <span class="text-white">Solar System</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
<section class="about-page section-b-space" 
style="padding-bottom: 70px; background-image: linear-gradient(45deg, #c5d7ce 0%, #ffffff 100%);">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="banner-section">
                    <img src="http://localhost:8000/web/media/lg/1708334281_578.webp"
                    class="img-fluid blur-up lazyload" loading="lazy" alt=""></div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-7">
            <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Solar System</h3>
            <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">We provide a diverse range of solar modules to cater to your specific needs. Whether you need a solar system for power plants, agriculture water pumps, home and office utilities, or large-scale solar power plants, we've got you covered. Choose us for efficient and sustainable solutions that will meet all your solar energy needs.</p>
            
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4">

            @include('front.widget.inquiry-form', [
                "service" => "Solar System"
            ])


        </div>
    </div>
</div>
</section>




@include('front.widget.our-service-strip', [
    "title" => "Other Services"
])

@include('front.widget.call-to-action-strip')
@endsection