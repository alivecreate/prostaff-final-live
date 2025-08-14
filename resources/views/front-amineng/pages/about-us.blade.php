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


<section class="page-title" style="background-image:url('{{ env('TMP_URL') }}/web/media/sm/1734454080_338.webp');">
    <div class="auto-container">
        <h1>About Us</h1>
    </div>

</section>
<!--End Page Title-->

<img src="{{ Storage::url('uploads/krishna-kahar-1735433485.jpg') }}" alt="Image">



<!--Page Info-->
<div class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <ul class="bread-crumb pull-left">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>About us</li>
            </ul>
            <div class="text pull-right">Certified Company ISO 9001-2015</div>
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
                    <div class="title"> Incepted in the year 1989 at Vadodara (Gujarat, India), we <b>“Amin Engineering Works”</b> are identified as the reputed manufacturer and supplier, offering a premium quality range of SS Pipe Bends, SS Saddles, Stainless Steel Nipples, SS Adaptors, CI Adaptors and many more products. </div>
                    <div class="text"> As per the set industry standards, these products are manufactured by our diligent professionals using premium quality material like stainless steel, cast iron, mild steel etc. These products are highly demanded in the market, owing to their wonderful features such as high strength, simple installation, rugged design, light weight and high durability. Offered products serve a broad array of industries. Provided products are obtainable in diverse sizes, dimensions and material grades to choose from. Further, these products can be modified too as per the exact requirements of the clients. We also provide Precision Job Work at nominal prices. </div>
                    <div class="text"> We are supported by a large and modern infrastructure unit that helps us in attaining maximum clients’ satisfaction. This unit is outfitted with the contemporary tools and machinery that enables designing and manufacturing flawless quality products. In order to make smooth business process, this units is divided into several divisions that includes designing, procurement, manufacturing, quality controlling, packaging, sales and marketing etc. Installed machines in all these sub-units are frequently updated according to the latest technological advancement. Our strong business acumen, large product line, wide distribution network, modern production technique, simple payment modes, transparent dealings, professionals approach and prompt delivery have enabled us in garnering a huge clientele. </div>
                    <div class="signature">

                        <h2 style="margin:21px 0px;margin-top: 34px;"> Manufacturing Process </h2>
                        <div>
                            <div class="text">
                            Our company has established itself as the leading manufacturer and supplier of CNC Precision Components Job Work which is executed by our team of highly skilled professionals who have gained enormous experience in this domain.
                            </div>
                            <hr>

                            <div class="title">These metal drilling services are executed in timely manner to fulfill the aspirations.</div>
                            <div class="text"> 
                                <li> 1. We are manufacturing Precision Metal Turned Parts as per customized requirement. </li>
                                <li> 2. We are doing manufacturing Lathe Machining Job Works as per customized requirement and other precision machining job works. </li>
                                <li> 3. We are manufacturing Gear Shaft Machining Job Works as per customized requirement. </li>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fluid-section-one alternate">
    <div class="outer-container clearfix">
        <!--Image Column-->
        <div class="image-column" style="background-image:url({{ env('TMP_URL') }}/web/media/sm/1734434700_432.webp);">
            <figure class="image-box"><img src="{{ env('TMP_URL') }}/web/media/sm/1734434700_432.webp" alt=""></figure>
        </div>
        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title light">
                    <h2>Why Choose Us?</h2>
                </div>
                <div class="text">
                    <p>At Amin Engineering Works, precision, quality, and reliability are at the core of everything we do. With state-of-the-art machinery and a team of experienced professionals, we deliver top-notch engineering solutions tailored to meet the specific needs of our clients. Whether it’s CNC machining, grinding, or turning, our advanced capabilities ensure accuracy and consistency across every project, no matter the complexity. We prioritize customer satisfaction by providing cost-effective solutions without compromising on quality or timelines.</p>
                    <p> We guarantee that all products offered by us manufactured in sync with the set quality standards. Also, we offer these products in varied specifications. In order to meet utmost clients’ contentment, our adept professionals can modify this array as per the drawing of clients.</p>
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




@include('front.widget.our-achivements')



@endsection