@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".services a").addClass( "active");
    </script>
@endsection

@section('content')
    
    <section class="p-0">
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
            style="background-image: url({{asset('frontend/images/banner')}}/farming-service2.jpg); background-size: cover; background-position: center center; display: block;"
        >
            <div class="container custom-breadcrumb m-0" style="
                background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
                <div class="row">
                    <div class="col pl-0">
                        <div class="banner-contain">
                            
                            <h3 class="text-left"><a href="{{route('services')}}">Our Services</a><br>
                                <span class="text-white">Farming Service</span></h3>
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
            <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Farming Services</h3>
            <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Join us and get the full farming experience! Our comprehensive package includes material trading and integrated waste management services, making us your one-stop shop for all your farming needs. With our expertise, you can focus on what you do best - growing your crops and livestock - while we care for the rest.</p>
            
           
            <a
            style="border: none;background-image: linear-gradient(30deg, #377353 50%, transparent 50%);"
             href="{{route('farmingService')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Read more</a>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-4">

            @include('front.widget.inquiry-form', [
                "service" => "Farming Service"
            ])


        </div>
    </div>
</div>
</section>

    
  <section class="pt-2" id="services">
    <div class="">

    <section class="pt-2">
        <div class="farm">
            <div class="container">
                 <div class="row">
                    <div class="col-md-6 service-wrap">
                        <h4 class="text-left mt-4"><strong>1). End-to-End Package Solutions</strong></h4>
                        <ul class="list">
                            <li>Cultivation</li>
                            <li>Bordering Farm</li>
                            <li>Drip irrigation for watering</li>
                            <li>Seeds</li>
                            <li>Fertilizers</li>
                            <li>Equipment and Laborers for Farming work</li>
                            <li>Regular consulting</li>
                            <li>Crop collecting</li>
                            <li>Entire crop sale without grading (optional)</li>
                            <li>Another needful stuff</li>
                            <li>Integrated waste management</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6 service-wrap">
                        <h4 class="text-left mt-4"><strong>2). Individual Solutions: you can select and get service.</strong></h4>
                        <ul class="list">
                            <li>Cultivation</li>
                            <li>Bordering Farm</li>
                            <li>Drip irrigation for watering</li>
                            <li>Seeds</li>
                            <li>Fertilizers</li>
                            <li>Equipment and Laborers for Farming work</li>
                            <li>Regular consulting</li>
                            <li>Crop collecting</li>
                            <li>Entire crop sale without grading (optional)</li>
                            <li>Another needful stuff</li>
                            <li>Integrated waste management</li>
                        </ul>
                    </div>

                    <div class="col-md-6 service-wrap">
                        <h4 class="text-left mt-4"><strong>3). Hydroponic Farming Package: Home/Terrace/On the ground</strong></h4>
                        <ul class="list">
                            <li>Bordering</li>
                            <li>Shade</li>
                            <li>All pipes, Mugs, and Trays with fitting</li>
                            <li>Water pump with fitting</li>
                            <li>Water tank with fitting</li>
                            <li>Seeds</li>
                            <li>Nutritious</li>
                            <li>Regular consulting</li>
                            <li>Labour for work if needed</li>
                            <li>Another needful stuff</li>
                        </ul>
                    </div>

                    <div class="col-md-6 service-wrap">
                        <h4 class="text-left mt-4"><strong>4). Individual for Hydroponic Farming: Home/Terrace/On the ground</strong></h4>
                        <ul class="list">
                            <li>Bordering</li>
                            <li>Shade</li>
                            <li>All pipes, Mugs, and Trays with fitting</li>
                            <li>Water pump with fitting</li>
                            <li>Water tank with fitting</li>
                            <li>Seeds</li>
                            <li>Nutritious</li>
                            <li>Regular consulting</li>
                            <li>Labour for work if needed</li>
                            <li>Another needful stuff</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>  
      </div>


      @include('front.widget.our-service-strip', [
        "title" => "Other Services"
    ])
    

      @include('front.widget.call-to-action-strip')
    @endsection