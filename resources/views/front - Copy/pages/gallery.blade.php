@extends('front.layout.main-layout')
@section('page-title')
@endsection


@section('custom-js')
<script>
    $(document).ready(function(){
      $(".gallery").addClass( "current");
    });
</script>
@endsection


@section('content')

<section class="page-title" style="background-image:url('{{asset('frontend')}}/images/services.jpg');">
    <div class="auto-container">
        <h1>Gallery</h1>
    </div>

</section>

<div class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <ul class="bread-crumb pull-left">
                <li><a href="{{route('contact')}}">Home</a></li>
                <li>Gallery</li>
            </ul>
            <div class="text pull-right">Certified Company ISO 9001-2008</div>
        </div>
    </div>
</div>

<section class="services-page-section">
    <div class="auto-container">
        <h2>Gallery</h2>
        <div class="row clearfix">

            @foreach(getServices() as $service)
            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{asset('web')}}/media/md/{{$service->image}}"
                                alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">{{$service->name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>


@endsection