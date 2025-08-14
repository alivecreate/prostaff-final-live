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

    <section class="page-title" style="background-image:url({{asset('web/media/sm')}}/{{$service->image}});">
        <div class="auto-container">
            <h1>{{$service->name}}</h1>
        </div>
    </section>
    
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li>{{$service->name}}</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2015</div>
            </div>
        </div>
    </div>
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="services-single">
						<div class="inner-box">
							
                            <h2>{{$service->name}}</h2>
                            <img src="{{asset('web/media/lg')}}/{{$service->image}}"  />
                            <div class="text">
                                <p>{!! html_entity_decode($service->description) !!} </p>
                            </div>
                        </div>


            <div class="auto-container">

                <div class="sponsors-outer">
                    <ul class="service-img-carousel owl-carousel owl-theme">
                        @foreach($service->images as $serviceImage)
                        <li class="slide-item">
                            <figure class="image-box">
                                <a data-fancybox="gallery" data-src="{{asset('web')}}/media/md/{{$serviceImage->image}}">
                                    <img src="{{asset('web')}}/media/md/{{$serviceImage->image}}" />
                                </a>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            
                    </div>
                </div>
				
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">

                                @foreach(getServices() as $sidebarService)
                                    <li class="@if($sidebarService->slug == $service->slug) active @endif)active"><a href="{{$sidebarService->slug}}">{{$sidebarService->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                       

                    	<div class="sidebar-widget contact-info-widget">
                        	<div class="sidebar-title style-two">
                                <h2>Contact Detail</h2>
                            </div>
                        	<div class="inner-box">
                            	<ul>
                          
                                    @if(getWebsiteData()['primary_phone'])<li><span class="icon fa fa-phone"></span><a class="text-black" href="tel:+91{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a></li>@endif
                                    @if(getWebsiteData()['primary_mail'])<li><span class="icon fa fa-send"></span><a class="text-black" href="mailto:+91{{getWebsiteData()['primary_mail']}}">{{getWebsiteData()['primary_mail']}}</a></li>@endif
                                </ul>
                            </div>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection