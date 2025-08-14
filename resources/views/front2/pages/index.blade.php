@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".index a").addClass( "active");
    </script>
@endsection

@section('content')
    <!-- header end -->


    <!-- Home slider -->
    
   @include('front.widget.slider')
    

   <section class="section-b-space beauty-about" style="background: whitesmoke;">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-6 col-lg-6 col-md-12 text-center"><img
                        src="{{asset('frontend')}}/images/banner/indian-farming-service.jpg" alt="" class="img-fluid blur-up lazyload">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about-section">
                        <div>
                            
                            <div class="heading">
                                <h2 class="title-inner1">About Us</h2>
                            </div>

                            <div class="about-text">
                                <p class="mb-4">We started our company in 2022 as a fruit and vegetable supply chain, Angriness Trading Pvt. Ltd. The app is going to be one platform that aims to bridge the gap between farmers and B2B consumers. Our company is providing a door-to-door supply chain facility with integrated waste management.</p>
                            
                                <ul class="top-feature">
                                    <li>
                                        <div class="icon">
                                            <img
                                            src="{{asset('frontend/images/banner')}}/organic-product1.png" alt="Image Not Found">
                                        </div>
                                        <div class="info">
                                            <h4>100% Guaranteed Organic Product</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('frontend/images/banner')}}/organic-product2.png" alt="Image Not Found">
                                        </div>
                                        <div class="info">
                                            <h4>Top-Quality Healthy Foods Production</h4>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="service small-section pb-0">
                                
                                <a href="{{route('about')}}" class="btn btn-sm btn-rounded btn-solid">Read More</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    @include('front.widget.product-tab')

    @include('front.widget.blog-strip')



    @include('front.widget.modal')
    @include('front.widget.modal-delivery-area')

    @include('front.widget.scroll-settings')

    @include('front.widget.call-to-action-strip')

    


@endsection