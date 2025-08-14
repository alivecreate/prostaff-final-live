@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".services a").addClass( "active");    
    </script>

    @if($errors->any())
        @if(old('service') == 'End-to-end package solutions')
            <script>
                $(document).ready(function(){
                    $('.btn-farming-service-form1').click();
                });
            </script>
        @endif
        @if(old('service') == 'Individual Farming Service')
            <script>
                $(document).ready(function(){
                    $('.btn-farming-service-form2').click();
                });
            </script>
        @endif
        
        @if(old('service'))
            <script>
                $(document).ready(function(){
                    $('.btn-inquire-now2').click();
                });
            </script>
        @endif
    @endif


@endsection


@section('content')

    <section class="p-0">
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0">
            
        <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
            style="background-image: url({{asset('frontend/images/banner')}}/services-farming.jpg); background-size: cover; background-position: center center; display: block;">
                  
            <div class="container custom-breadcrumb m-0" style="
                background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
                <div class="container">
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
    
  
<section class="about-page section-b-space" id="farmingService"
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #c5d7ce 0%, #ffffff 100%);">
    <div class="container">
        <div class="row">
           
            <div class="service-heading">
                <h2 style="margin-bottom: 20px;font-size: 32px;font-weight: 600;color: #3a3a3a;text-transform: capitalize;letter-spacing: 1px;">Farming Services</h2>
                <p>Join us and get the full farming experience! Our comprehensive package includes material trading and integrated waste management services, making us your one-stop shop for all your farming needs. With our expertise, you can focus on what you do best - growing your crops and livestock - while we care for the rest.</p>
            </div>


        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="service-two__card">
                <div class="service-two__card-image">
                    <img src="{{asset('frontend/images/banner')}}/farming-services.png" alt="">
                </div>
                <div class="service-two__card-content service-custom top-0 align-items-baseline text-left">
                    
                    <h2 class="ml-0">End-to-end package solutions</h2>
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form1"  class="btn btn-sm btn-rounded btn-solid btn-farming-service-form1" tabindex="0">Inquired Now</button>
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
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form2"  class="btn btn-sm btn-rounded btn-solid btn-farming-service-form2" tabindex="0">Inquired Now</button>
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
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form3"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button>
                </div>
            </div>
        </div>

        
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="service-two__card">
                <div class="service-two__card-image">
                    <img src="{{asset('frontend/images/banner')}}/farm-boardering-vadodara.jpg" alt="">
                </div>
                <div class="service-two__card-content service-custom top-0 align-items-baseline text-left">
                    
                    <h2 class="ml-0">Individual for Hydroponic Farming</h2>
                        <button data-bs-toggle="modal" data-bs-target="#farming-service-form4"  class="btn btn-sm btn-rounded btn-solid btn-farming-service-form2" tabindex="0">Inquired Now</button>
                </div>
            </div>
        </div>
        
        
        </div>
    </div>
</section>


<section class="about-page section-b-space" id="wasteManagement" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #e8ddc3 0%, #ffffff 100%)">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12 col-md-12 col-lg-4">
                <img
                style="width: 100%;border: 3px solid white;border-radius: 40px;height: auto;"
                class="sppb-img-responsive" src="{{asset('frontend/images/banner')}}/waste-management-service.webp" alt="Image" title="">
            </div>

            <div class="col-sm-12 col-md-12 col-lg-7">
                <h2 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Waste Management</h3>
                <p style="font-size: 18px;color: #57585a;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;line-height: 1.5;">Our comprehensive waste management service is tailor-made to cater to the unique needs of all our esteemed clients, whether they are Frenchies or farmers. By partnering with us, you can rest assured that your waste will be handled in an efficient and eco-friendly manner, ensuring a sustainable future for all. To get started, simply send us a quick text message informing us of your garbage, and we'll take care of the rest. Join us today and experience the benefits of a stress-free waste management solution.</p>
                
                <div class="col-md-12 service-wrap-list">
                    <h4 class="text-left mt-4"><strong>End-to-end waste management solutions</strong></h4>
                    <ul class="list mb-4">
                        <li>Farmers can sell their crops as well as their waste to us.</li>
                        <li>Franchise owners have the option to sell any leftover waste to us.</li>
                        <li>Our registered hotels, kitchens, restaurants, and canteens have the option to sell their leftover waste to us.</li>
                    </ul>
                </div>

                <button data-bs-toggle="modal" data-bs-target="#waste-management"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button>

            </div>

        </div>
    </div>
</section>


  
<section class="about-page section-b-space"  id="dripIrrigation"
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #cfe8f7 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <h2 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Drip Irrigation</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Experience the benefits of our advanced drip irrigation methods that significantly improve plant growth and reduce water waste. By delivering water directly to the roots, our system ensures optimal hydration and nutrient absorption, resulting in healthier and more bountiful plants. Trust us to provide a reliable and efficient network of tubes, pipes, valves, and emitters that will revolutionize the way you water your plants.</p>
                
                {{-- <button data-bs-toggle="modal" data-bs-target="#drip-irrigation"  class="btn btn-sm btn-rounded btn-solid" tabindex="0">Inquired Now</button> --}}

                <button data-bs-toggle="modal" data-bs-target="#drip-irrigation" 
                style="border: none;background-image: linear-gradient(30deg, #3b81ae 50%, transparent 50%);"
                 class="mb-4 btn btn-sm btn-rounded btn-solid" >Inquired Now</button>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <img 
                style="width: 100%;border: 3px solid white;border-radius: 40px;height: auto;"
                class="sppb-img-responsive" src="{{asset('frontend/images/banner')}}/drip-irrigation.jpg" alt="Image" title="">
            </div>
        </div>
    </div>
</section>

<section class="about-page section-b-space"  id="solarSystem"
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

               
                <button data-bs-toggle="modal" data-bs-target="#solar-system" 
                style="border: none;background-image: linear-gradient(30deg, #c09d4a 50%, transparent 50%);"
                 class="mb-4 btn btn-sm btn-rounded btn-solid" >Inquired Now</button>

            </div>

        </div>
    </div>
</section>




@include('front.widget.call-to-action-strip')

@endsection