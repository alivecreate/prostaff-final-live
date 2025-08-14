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
      <h3 class="text-light">Welcome to Our Agriculture Services</h3>
      <p class="text-light">Join us and get the full farming experience! Our comprehensive package includes material trading and integrated waste management services, making us your one-stop shop for all your farming needs. With our expertise, you can focus on what you do best - growing your crops and livestock - while we care for the rest.</p>
    </div>
  </section>

  
<section class="about-page section-b-space" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #c5d7ce 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Farming Services</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Join us and get the full farming experience! Our comprehensive package includes material trading and integrated waste management services, making us your one-stop shop for all your farming needs. With our expertise, you can focus on what you do best - growing your crops and livestock - while we care for the rest.</p>

               
                <a
                style="border: none;background-image: linear-gradient(30deg, #377353 50%, transparent 50%);"
                 href="{{route('farmingService')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Read more</a>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <img 
                style="width: 100%;border: 3px solid white;border-radius: 40px;height: auto;"
                class="sppb-img-responsive" src="https://img.freepik.com/free-photo/full-shot-male-gardener-heading-towards-camera-pushing-waggon-with-soil_1098-19419.jpg?t=st=1711538959~exp=1711542559~hmac=a5b97a013f3072b8f4250b50a6f343346135c5f645f5b1362a18271f48ba53f6&w=1060" alt="Image" title="">
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
                class="sppb-img-responsive" src="{{asset('frontend/images/banner')}}/waste-management.jpg" alt="Image" title="">
            </div>

            <div class="col-sm-12 col-md-12 col-lg-7">
                <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Waste Management</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Our comprehensive waste management service is tailor-made to cater to the unique needs of all our esteemed clients, whether they are Frenchies or farmers. By partnering with us, you can rest assured that your waste will be handled in an efficient and eco-friendly manner, ensuring a sustainable future for all. To get started, simply send us a quick text message informing us of your garbage, and we'll take care of the rest. Join us today and experience the benefits of a stress-free waste management solution.</p>

               
                <a
                style="border: none;background-image: linear-gradient(30deg, #c09d4a 50%, transparent 50%);"
                 href="{{route('wasteManagement')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Read more</a>

            </div>

        </div>
    </div>
</section>


  
<section class="about-page section-b-space" 
    style="padding-bottom: 70px; background-image: linear-gradient(45deg, #cfe8f7 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Drip Irrigation</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">Experience the benefits of our advanced drip irrigation methods that significantly improve plant growth and reduce water waste. By delivering water directly to the roots, our system ensures optimal hydration and nutrient absorption, resulting in healthier and more bountiful plants. Trust us to provide a reliable and efficient network of tubes, pipes, valves, and emitters that will revolutionize the way you water your plants.</p>

                <a
                style="border: none;background-image: linear-gradient(30deg, #3b81ae 50%, transparent 50%);"
                 href="{{route('dripIrrigation')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Read more</a>

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
                <h3 style="margin-bottom:20px; font-size: 26px;font-weight: 600;color: #3a3a3a;text-transform: uppercase;letter-spacing: 1px;">Solar System</h3>
                <p style="font-size: 20px;color: #006b52;box-shadow: 0 0 0 0 #ffffff;margin: 0px 0px 30px 0px;">We provide a diverse range of solar modules to cater to your specific needs. Whether you need a solar system for power plants, agriculture water pumps, home and office utilities, or large-scale solar power plants, we've got you covered. Choose us for efficient and sustainable solutions that will meet all your solar energy needs.</p>

               
                <a
                style="border: none;background-image: linear-gradient(30deg, #c09d4a 50%, transparent 50%);"
                 href="{{route('solarSystem')}}" class="mb-4 btn btn-sm btn-rounded btn-solid" tabindex="0">Read more</a>

            </div>

        </div>
    </div>
</section>




@include('front.widget.call-to-action-strip')

    @endsection