
<section class="project-section">
    <div class="auto-container">

        <!--Sec Title-->
        <div class="sec-title light">
            <div class="clearfix">
                <div class="pull-left">
                    <h2>Our Services</h2>
                </div>
                <div class="pull-right">
                    <a href="{{route('services')}}" class="projects">View all Services</a>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            @foreach($services as $service)
                <div class="services-block thumb-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">

                            <a href="{{route('serviceDetail', $service->slug)}}"><img
                                    src="{{asset('web')}}/media/md/{{$service->image}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a class="text-white" href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        
        
    </div>
</section>