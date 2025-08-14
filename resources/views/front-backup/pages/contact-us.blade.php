@extends('front.layout.main-layout')
@section('page-title')
@endsection


@section('custom-js')
<script>
    $(document).ready(function(){
      $(".contact").addClass( "current");
    });
</script>
@endsection


@section('content')

    

<section class="page-title" style="background-image:url({{asset('frontend')}}/images/contact-us.jpg);">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
        
    </section>
    
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="{{route('contact')}}">Home</a></li>
                    <li>Contact us</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2015</div>
            </div>
        </div>
    </div>
    
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            @if(getSocialMedia()['map_embed'])
            {!! html_entity_decode(getSocialMedia()['map_embed']) !!}
            @endif
        </div>
    </section>
    
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="contact-title">
            	<h2>Get in Touch with Us</h2>
                <div class="text">Have questions or need assistance? We’re here to help! Fill out the form below to reach out to our team, and we’ll get back to you as soon as possible.</div>
            </div>
        	<div class="row clearfix">
            	
                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<!--Contact Form-->
                        <div class="contact-form">
                            
                                
                            <form class="theme-form" action="{{ route('storeContactForm') }}"
                                    method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    
                                <input type="hidden" name="page_url" value="{{ Request::url() }}">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Full Name (required)" required>
                                    </div>

                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone No. (required)" required>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Email">
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="address"  class="form-control"  name="address">
                                            @foreach(getCountries() as $country)       
                                                <option value="{{$country}}" @if($country == 'India') selected="true" @endif>{{$country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    

                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <select class="form-control" name="service" id="service">
                                            <option value="">Choose Your Service</option>

                                            @foreach(getServiceList() as $service)
                                            <option value="{{$service}}">{{$service}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label for="document">Upload Document</label>
                                        <input type="file" name="document" id="document" value="">
                                        <p class="text-danger">File type: doc, docx, pdf, xls, xlsx, csv, txt, jpeg, jpg, png, gif, webp (Max Size: 20MB)</p>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                                    </div>                                        
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<ul>
                            
                            @if(getWebsiteData()['address'])
                        	    <li><span>Address:</span>{{getWebsiteData()['address']}}</li>
                            @endif
                            
                            @if(getWebsiteData()['primary_mail'])
                                <li>
                                    <span>Email:</span> 
                                    <a href="mailto:{{ getWebsiteData()['primary_mail'] }}">{{ getWebsiteData()['primary_mail'] }}</a>
                                    @if(getWebsiteData()['secondary_mail'])
                                        <br>
                                        <a href="mailto:{{ getWebsiteData()['secondary_mail'] }}">{{ getWebsiteData()['secondary_mail'] }}</a>
                                    @endif
                                </li>
                            @endif

                            @if(getWebsiteData()['primary_phone'])
                                <li>
                                    <span>Phone:</span> 
                                    <a href="tel:+91{{ getWebsiteData()['primary_phone'] }}">(+91) {{ getWebsiteData()['primary_phone'] }}</a>
                                    @if(getWebsiteData()['secondary_phone'])
                                        <br>
                                        <a href="tel:+91{{ getWebsiteData()['secondary_phone'] }}">(+91) {{ getWebsiteData()['secondary_phone'] }}</a>
                                    @endif
                                </li>
                            @endif



                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    

    @endsection