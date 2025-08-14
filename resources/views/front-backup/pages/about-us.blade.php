@extends('front.layout.main-layout')
@section('page-title')
@endsection


@section('custom-js')
<script>
    $(document).ready(function(){
      $(".about").addClass( "current");
    });
</script>
@endsection


@section('content')


<section class="page-title" style="background-image:url('web/media/lg/1733241911_572.webp');">
    <div class="auto-container">
        <h1>About Us</h1>
    </div>

</section>
<!--End Page Title-->

<!--Page Info-->
<div class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <ul class="bread-crumb pull-left">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>About us</li>
            </ul>
            <div class="text pull-right">Certified Company ISO 9001-2008</div>
        </div>
    </div>
</div>
<!--End Page Info-->

<!--Company Section-->
<section class="company-section">
    <div class="auto-container">
        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title">
                    <h2>Company Vision</h2>
                    <div class="title">DEC Engineering Pvt. Ltd. specializes in delivering comprehensive solutions for
                        Design & Engineering, Procurement, Project Management, Construction, Plant Retrofitting and
                        Shutdowns.</div>
                    <div class="text"> DEC Engineering Pvt. Ltd was formed in the year 2007. DEC took over the
                        intellectual properties in the year 2008 of M/s Projects Technologists Pvt. Ltd. (PTPL), a
                        leading EPC Contractor. It has a Division – DEC Envirosystems for providing turn-key solutions
                        and technology for NOx reduction for Cement & Power Plants.
                        The Division has entered in to strategic technology colloboration with Associates having
                        extensive experience and successful track record. </div>
                    <div class="signature">

                        <h2 style="margin:21px 0px;margin-top: 34px;">Director's Desk</h2>
                        <div>
                            <div class="title">Jitendrasinh Parmar (Director)</div>
                            <div class="text">
                                He is Director of DEC Engineering Pvt. Ltd. He is Mechanical Engineer having 30+ years
                                of vast experience in various types of construction of projects and operating companies in
                                india and abroad.
                            </div>
                            <hr>

                            <div class="title">Srinivasan Krishnan (Director)</div>
                            <div class="text"> He is Director of DEC Engineering Pvt. Ltd. He is Mechanical Engineer
                                having 29+ years of vast experience in operating DEC Engineering Pvt Ltd.</div>
                            <hr>

                            <div class="title">Shivaji Karande (Director)</div>
                            <div class="text"> He is Director of DEC Engineering Pvt. Ltd. He is having 40+ years of
                                vast experience in executing Commercial and Legal metteres.</div>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Company Section-->

<!--Fluid Section One-->
<section class="fluid-section-one alternate">
    <div class="outer-container clearfix">
        <!--Image Column-->
        <div class="image-column" style="background-image:url({{asset('frontend')}}/images/hands.jpg);">
            <figure class="image-box"><img src="{{asset('frontend')}}/images/hands.jpg" alt=""></figure>
        </div>
        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title light">
                    <h2>Why Choose Us?</h2>
                </div>
                <div class="text">
                    <p>We're committed to providing you with a seamless engineering and construction experience. Trust
                        us to support for any project implementation with easy accessiblity whenever you need them.</p>
                    <p>We prioritize understanding your unique needs ensuring every solution to align with once goals.
                        Collaborating with clear communication to drive everyone's success.</p>
                    <p>We embrace creativity and the latest technologies to deliver results that stand out. Our approach
                        is agile, adaptive, and tailored to achieve excellence.</p>
                </div>
                <ul class="icons-list">
                    <li><span class="icon flaticon-target"></span>Dedicated <br> Team</li>
                    <li><span class="icon flaticon-group"></span>Best <br> Engineers</li>
                    <li><span class="icon flaticon-technology-2"></span>24/7 <br> Supports</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Fluid Section One-->

<section class="we-do-section grey-bg">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Our Achivements</h2>
            <div class="text">We're committed to providing you with a seamless engineering and construction experience.
                Trust us to keep your belongings safe, secure, and easily accessible whenever you need them.</div>
        </div>
        
        <section class="clients-section" style="background: inherit;padding-top: 0px;">
            <div class="auto-container">

                <div class="sponsors-outer">
                    <ul class="certificate-carousel owl-carousel owl-theme">
                        @foreach($certificates as $client)
                        <li class="slide-item certificate-block">
                            <figure class="image-box">
                                <a data-fancybox="gallery" data-src="{{asset('web')}}/media/md/{{$client->image}}">
                                    <img src="{{asset('web')}}/media/md/{{$client->image}}" />
                                </a>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </section>


    </div>
</section>



@include('front.widget.client-strip')



@endsection