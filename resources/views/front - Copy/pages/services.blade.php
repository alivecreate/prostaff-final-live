@extends('front.layout.main-layout')
@section('page-title')
@endsection

@section('custom-js')
<script>
    $(document).ready(function(){
      $(".service").addClass( "current");
    });
</script>
@endsection


@section('content')

<section class="page-title" style="background-image:url('{{asset('frontend')}}/images/services.jpg');">
    <div class="auto-container">
        <h1>Services</h1>
    </div>

</section>

<div class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <ul class="bread-crumb pull-left">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>Services</li>
            </ul>
            <div class="text pull-right">Certified Company ISO 9001-2008</div>
        </div>
    </div>
</div>

<section class="services-page-section">
    <div class="auto-container">
        <h2>Our Services</h2>
        <div class="text">DEC Engineering Pvt. Ltd., we are driven by a commitment to quality, innovation, and customer satisfaction. Whether you’re planning a new project, upgrading existing systems, or optimizing plant operations, our team of seasoned professionals is here to support you at every step. Your vision, our expertise – together, we engineer excellence.</div>
        <div class="row clearfix">

            @foreach(getServices() as $service)
            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="{{route('serviceDetail', $service->slug)}}"><img src="{{asset('web')}}/media/md/{{$service->image}}"
                                alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>


@endsection