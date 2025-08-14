@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".services a").addClass( "active");
    </script>
@endsection

@section('content')

    <section class="p-0">
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0">
            
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
            style="background-image: url({{asset('frontend/images/banner')}}/services-farming.jpg); background-size: cover; background-position: center center; display: block;"
        >
        
          
            <div class="container custom-breadcrumb m-0" style="
                background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
                <div class="row">
                    <div class="col pl-0">
                        <div class="banner-contain">
                            
                            <h3 class="text-left">What we offer <br>

                                <span class="text-white">Our Services</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
  <section class="pt-2" id="hero" style="
    background: linear-gradient(45deg, #367655 0%, #196d10 100%);
    color: white;
    ">
    
    <div class="container mt-4">
      <h2 class="text-light">Welcome to Our Agriculture Services</h2>
      <p class="text-light">Join us and get the full farming experience! Our comprehensive package includes material trading and integrated waste management services, making us your one-stop shop for all your farming needs. With our expertise, you can focus on what you do best - growing your crops and livestock - while we care for the rest.</p>
    </div>
  </section>

  
<section class="about-page section-b-space" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #c5d7ce 0%, #ffffff 100%);">
    <div class="container">
        <div class="row">
           
            <div class="service-heading">
                <h2>Farming Services</h2>
                <p>Join us and get the full farming experience! Our comprehensive package includes material trading and integrated waste management services, making us your one-stop shop for all your farming needs. With our expertise, you can focus on what you do best - growing your crops and livestock - while we care for the rest.</p>
            </div>
            
{{-- ModAL --}}


<div class="modal fade" id="farming-service-form1" tabindex="-1" aria-labelledby="farming-service-form1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Farmin Service</h5>
                <button type="button" class="btn-close position-relative h-auto" data-bs-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
              </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-sm-6 col-12 service-form">
                        <h2>End-to-end package solutions</h2>
                        
                        <p><i class="fa fa-check"></i> Cultivation</p>
                        <p><i class="fa fa-check"></i> Bordering farm</p>
                        <p><i class="fa fa-check"></i> Drip irrigation for watering</p>
                        <p><i class="fa fa-check"></i> Seeds</p>
                        <p><i class="fa fa-check"></i> Fertilizers</p>
                        <p><i class="fa fa-check"></i> Equipment and labours for farming work</p>
                        <p><i class="fa fa-check"></i> Regular consulting</p>
                        <p><i class="fa fa-check"></i> Crop collecting</p>
                        <p><i class="fa fa-check"></i> Entire crop sale without grading (optional)</p>
                        <p><i class="fa fa-check"></i> Another needful stuff</p>
                        <p><i class="fa fa-check"></i> Integrated waste management</p>

                    </div>
                    
                    <div class="col-sm-6 col-12 service-form">
                        @include('front.widget.inquiry-form', [
                            "service" => "Farming Service"
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="farming-service-form2" tabindex="-1" aria-labelledby="farming-service-form2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header service-form">
                <h2 class="mb-0">Individual farming service</h2>
                <button type="button" class="btn-close position-relative h-auto" data-bs-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
              </div>
            <div class="modal-body">
                <div class="row g-3">
                    
                    <div class="col-sm-12 col-12 service-form">
                        @include('front.widget.inquiry-form', [
                            "service" => "Individual Farming Service"
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End Modal --}}

        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="service-two__card">
                <div class="service-two__card-image">
                    <img src="{{asset('frontend/images/banner')}}/farming-services.png" alt="">
                </div>
                <div class="service-two__card-content service-custom top-0 align-items-baseline text-left">
                    
                    <h2 class="ml-0">End-to-end package solutions</h2>
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form1"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="service-two__card">
                <div class="service-two__card-image">
                    <img src="{{asset('frontend/images/banner')}}/induvidual-farming-service.jpg" alt="">
                </div>
                <div class="service-two__card-content service-custom top-0 align-items-baseline text-left">
                    
                    <h2 class="ml-0">Individual Farming Service</h2>
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form2"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button>
                </div>
            </div>
        </div>
           
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="service-two__card">
                <div class="service-two__card-image">
                    <img src="{{asset('frontend/images/banner')}}/hydroponic-farming.jpg" alt="">
                </div>
                <div class="service-two__card-content service-custom top-0 align-items-baseline text-left">
                    <h2 class="ml-0">Hydroponic farming package</h2>
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form2"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</section>


<section class="about-page section-b-space" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #e8ddc3 0%, #ffffff 100%)">
    <div class="container">
        <div class="row justify-content-center">
            
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="service-two__card">
                <div class="service-two__card-image">
                    <img src="{{asset('frontend/images/banner')}}/farming-services.png" alt="">
                </div>
                <div class="service-two__card-content service-custom top-0 align-items-baseline text-left">
                    
                    <h2 class="ml-0">End-to-end package solutions</h2>
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form1"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button>
                </div>
            </div>
        </div>


            <div class="col-sm-12 col-md-12 col-lg-7">
                <h2 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Waste Management</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Our comprehensive waste management service is tailor-made to cater to the unique needs of all our esteemed clients, whether they are Frenchies or farmers. By partnering with us, you can rest assured that your waste will be handled in an efficient and eco-friendly manner, ensuring a sustainable future for all. To get started, simply send us a quick text message informing us of your garbage, and we'll take care of the rest. Join us today and experience the benefits of a stress-free waste management solution.</p>

            </div>

        </div>
    </div>
</section>


  
<section class="about-page section-b-space" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #cfe8f7 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <h2 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Drip Irrigation</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Experience the benefits of our advanced drip irrigation methods that significantly improve plant growth and reduce water waste. By delivering water directly to the roots, our system ensures optimal hydration and nutrient absorption, resulting in healthier and more bountiful plants. Trust us to provide a reliable and efficient network of tubes, pipes, valves, and emitters that will revolutionize the way you water your plants.</p>

                <a
                style="border: none;background-image: linear-gradient(30deg, #3b81ae 50%, transparent 50%);"
                 href="{{route('dripIrrigation')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</a>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <img 
                style="width: 100%;border: 3px solid white;border-radius: 40px;height: auto;"
                class="sppb-img-responsive" src="{{asset('frontend/images/banner')}}/drip-irrigation.jpg" alt="Image" title="">
            </div>
        </div>
    </div>
</section>

<section class="about-page section-b-space" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #e8ddc3 0%, #ffffff 100%)">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-sm-12 col-md-12 col-lg-4">
                <img 
                style="width: 100%;border: 3px solid white;border-radius: 40px;height: auto;"
                class="sppb-img-responsive" src="{{asset('frontend/images/banner')}}/solar-system.jpg" alt="Image" title="">
            </div>

            <div class="col-sm-12 col-md-12 col-lg-7">
                <h2 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Solar System</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">We provide a diverse range of solar modules to cater to your specific needs. Whether you need a solar system for power plants, agriculture water pumps, home and office utilities, or large-scale solar power plants, we've got you covered. Choose us for efficient and sustainable solutions that will meet all your solar energy needs.</p>

               
                <a
                style="border: none;background-image: linear-gradient(30deg, #c09d4a 50%, transparent 50%);"
                 href="{{route('solarSystem')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</a>

            </div>

        </div>
    </div>
</section>




@include('front.widget.call-to-action-strip')

    @endsection