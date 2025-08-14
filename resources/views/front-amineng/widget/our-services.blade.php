
<section class="services-section-two">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="title-column col-lg-3 col-md-12 col-xs-12">
                	<h2>Our Services</h2>
                    <div class="text">We provide high-quality precision machining services to meet the unique needs of the business across various industries. Our team of experts utilizes advanced technology and tachniques to deliver exceptional results.</div>
                    <a href="{{route('services')}}" class="theme-btn btn-style-three">View all services</a>
                </div>
                
                <div class="blocks-column col-lg-9 col-md-12 col-xs-12">
                	<div class="row clearfix">
                    	

                    @foreach($services as $service)
                        <div class="services-block-three thumb-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{route('serviceDetail',$service->slug)}}"><img src="{{asset('web/media/md')}}/{{$service->image}}" alt="" /></a>
                                </div>
                                <div class="lower-content" style="padding-top: 12px;">
                                    <h3><a href="{{route('serviceDetail',$service->slug)}}">{{$service->name}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>