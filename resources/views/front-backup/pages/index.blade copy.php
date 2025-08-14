@extends('front.layout.main-layout')
@section('page-title')
@endsection

@section('custom-js')
<script>
    $(document).ready(function(){
      $(".home").addClass( "current");
    });
</script>
@endsection



@section('content')

    
@include('front.widget.slider')
    

<!--Call To Action-->
<section class="call-to-action">
    <div class="auto-container clearfix">
        <h2>A high Quality Control in compliance with international standards</h2>
        <a href="#" class="more">Know more</a>
    </div>
</section>

<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <h2>About Our Industry</h2>
                    <div class="text">Welcome to DEC Engineering Pvt. Ltd.</div>
                    <div class="bold-text">At DEC Engineering Pvt. Ltd., we pride ourselves on being a trusted partner in delivering comprehensive and customized engineering solutions across diverse industries. With expertise spanning Design & Engineering, Procurement, Project Management, Construction, and Plant Retrofitting, we bring innovation, precision, and excellence to every project we undertake. </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="image">
                            <img src="{{asset('frontend')}}/images/fabrication-man.png" alt="" />
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="image">
                            <img src="{{asset('frontend')}}/images/about-2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('front.widget.what-we-do')

@include('front.widget.our-projects')

@include('front.widget.client-strip')
@include('front.widget.latest-blog')



@endsection