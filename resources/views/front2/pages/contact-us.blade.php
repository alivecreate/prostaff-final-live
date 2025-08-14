@extends('front.layout.main-layout')

@section('additional-js')
    <script>
            $(".contact a").addClass( "active");
    </script>
@endsection

@section('content')


<section class="p-0">
    <div class="full-banner banner-layout-3 parallax text-center text-capitalize p-center p-0"
        style="background-image: url({{asset('frontend/images/banner')}}/contact-us-farming.jpg); background-size: cover; background-position: bottom center; display: block;"
    >
        <div class="container custom-breadcrumb m-0" style="
            background: #064f4078; width: 100%; margin: 0px; padding: 0px; width: 100%; max-width: 100%; overflow: hidden; padding: 6rem 5rem">
            <div class="row">
                <div class="col pl-0">
                    <div class="banner-contain">
                        
                        <h3 class="text-left">
                            <span class="text-white">Contact Us</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 col-sm-6 col-12 map">
                    
                    <div class="contact-right">
                        <ul>
                            <li class="p-0 ml-2"><h4 class="ml-4"
                                style="padding-left: 40px;font-weight: bold;">Contact Detail</h4></li>
                            @if(getWebsiteData()['primary_phone'])
                                <li>
                                    <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                    </div>
                                    <div class="media-body">
                                        @if(getWebsiteData()['primary_phone'])<a target="_blank" href="tel:91{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a>@endif
                                        @if(getWebsiteData()['secondary_phone'])<a target="_blank" href="tel:91{{getWebsiteData()['secondary_phone']}}">{{getWebsiteData()['secondary_phone']}}</a>@endif
                                    
                                    </div>
                                </li>
                            @endif

                            @if(getWebsiteData()['address'])
                                <li>
                                    <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <h6>Address</h6>
                                    </div>
                                    <div class="media-body">
                                        <p>{{getWebsiteData()['address']}}</p>
                                    </div>
                                </li>
                            @endif
                            @if(getWebsiteData()['primary_mail'])
                                <li>
                                    <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                    </div>
                                    <div class="media-body">
                                        @if(getWebsiteData()['primary_mail'])<a href="mailto:{{getWebsiteData()['primary_mail']}}">{{getWebsiteData()['primary_mail']}}</a>@endif
                                        @if(getWebsiteData()['secondary_mail']), <a href="mailto:{{getWebsiteData()['secondary_mail']}}">{{getWebsiteData()['secondary_mail']}}</a>@endif
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <iframe class="mt-4"
                    style="height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321"
                    allowfullscreen></iframe>    

                </div>

                <div class="col-lg-5 col-sm-6 col-12">
                    
                    @include('front.widget.inquiry-form')
                    
                </div>
            </div>

        </div>
    </section>


@endsection