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
                <div class="text pull-right">Certified Company ISO 9001-2008</div>
            </div>
        </div>
    </div>
    
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15083.051941677093!2d73.0110917!3d19.0741557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c140ad2253d5%3A0x42510e59d6e573df!2sDEC%20Engineering%20%26%20Constructions%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1733256803542!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="contact-title">
            	<h2>Drop us message</h2>
                <div class="text">Praising pain was born and I will give you a complete account of the system, and </div>
            </div>
        	<div class="row clearfix">
            	
                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="sendemail.php">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="firstname" value="" placeholder="First name" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="lastname" value="" placeholder="Last name" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone No." required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Massage"></textarea>
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
                            <li><span>email:</span>{{getWebsiteData()['primary_mail']}}</li>
                            @endif

                            @if(getWebsiteData()['primary_phone'])
                            <li><span>phone:</span>@if(getWebsiteData()['secondary_phone'])(+91) {{getWebsiteData()['secondary_phone']}}
                            <br>@endif (+91) {{getWebsiteData()['primary_phone']}}</li>
                            @endif

                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    

    @endsection