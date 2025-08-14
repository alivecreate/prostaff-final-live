@extends('front.layout.main-layout')
@section('page-title')
@endsection

@section('custom-js')
<script>
$(document).ready(function() {
    $(".home").addClass("current");
});
</script>
@endsection



@section('content')


@include('front.widget.slider')


<!--Call To Action-->
<section class="call-to-action">
    <div class="auto-container clearfix">
        <h2 class="text-white">“Amin Engineering Works” is a reputed manufacturer and supplier</h2>
        <a href="{{route('about')}}" class="more text-white">Know more</a>
    </div>
</section>





<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <h2>About Our Industry</h2>
                    <div class="text">Welcome to Amin Engineering Works</div>
                    <div class="bold-text"> Incepted in the year 1989 at Vadodara (Gujarat, India), we “Amin Engineering
                        Works” are identified as the reputed manufacturer and supplier, offering a premium quality range
                        of SS Pipe Bends, SS Saddles, Stainless Steel Nipples, SS Adaptors, CI Adaptors and many more
                        products. As per the set industry standards, these products are manufactured by our diligent
                        professionals using premium quality material like stainless steel, cast iron, mild steel etc.
                    </div>
                </div>
            </div>

            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="row clearfix">
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="image">
                            <img src="{{ env('TMP_URL') }}/web/media/sm/1734511860_433.webp" alt=""
                                style="height: 350px;object-fit: cover;" />
                        </div>
                    </div>
                    
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="image">
                            <img src="{{ env('TMP_URL') }}/web/media/sm/1734511825_168.webp" alt=""
                                style="height: 350px;object-fit: cover;" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('front.widget.our-services')

@include('front.widget.what-we-do')

@include('front.widget.our-products')

@include('front.widget.latest-blog')


@endsection