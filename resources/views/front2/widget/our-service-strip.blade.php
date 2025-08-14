
<section class="service-two" style="background: whitesmoke;">
    <div class="service-two__bottom-curv"></div>
    <div class="container">
        
        <div class="col-12">
            <div class="title1">
                <h4>{{ @$title ? 'Other Services' : 'Our Services' }}</h4>
                <h2 class="title-inner1">What We’re Offering</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 cursor-pointer">
                <a data-bs-toggle="modal" data-bs-target="#farming-services">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('frontend/images/banner')}}/farming-services.png" alt="">
                        </div>
                        <div class="service-two__card-content">
                            
                            <div class="service-icon-block">
                                <img src="{{asset('frontend/images/banner')}}/tractor-icon.png"
                                    class="" alt="">
                            </div>
                            <h3>Farming Services</h3>
                            <p>Expert Farming Services for Revolutionary Growth and Sustainability.</p>
                            <button data-bs-toggle="modal" data-bs-target="#farming-services" class="btn btn-sm btn-rounded btn-solid btn-inquire-now2">Inquire Now</button>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 cursor-pointer">
                <a data-bs-toggle="modal" data-bs-target="#waste-management">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('frontend/images/banner')}}/waste-management-service.webp" alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-icon-block">
                                <img src="{{asset('frontend/images/banner')}}/waste-managemen.svg"
                                    class="" alt="">
                            </div>
                            <h3>Waste Management</h3>
                            <p>Transform Your Waste into Wealth with Our Premier Waste Management Services.</p>
                            <button data-bs-toggle="modal" data-bs-target="#waste-management" class="btn btn-sm btn-rounded btn-solid btn-inquire-now2">Inquire Now</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 cursor-pointer">
                <a data-bs-toggle="modal" data-bs-target="#drip-irrigation">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('frontend/images/banner')}}/drip-irrigation.jpg" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            
                            <div class="service-icon-block">
                                <img src="{{asset('frontend/images/banner')}}/drip-irrigation-icon2.png"
                                    class="" alt="">
                            </div>

                            <h3>Drip Irrigation</h3>
                            <p>Revolutionize Your Crop Yield with Drip Irrigation Solutions, Maximize Efficiency and Conservation.</p>
                            <button data-bs-toggle="modal" data-bs-target="#drip-irrigation" class="btn btn-sm btn-rounded btn-solid btn-inquire-now2">Inquire Now</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 cursor-pointer custom-popup-link">
                <a data-bs-toggle="modal" data-bs-target="#solar-system">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('frontend/images/banner')}}/solar-system.jpg" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            
                            <div class="service-icon-block">
                                <img src="{{asset('frontend/images/banner')}}/waste-managemen.svg"
                                    class="" alt="">
                            </div>

                            <h3>Solar System</h3>
                            <p>Harness the Sun's Power with Our Cutting-Edge Solar Systems for Sustainable Living and Unmatched Savings.</p>
                            <button data-bs-toggle="modal" data-bs-target="#solar-system" class="btn btn-sm btn-rounded btn-solid btn-inquire-now2">Inquire Now</button>
                            
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>