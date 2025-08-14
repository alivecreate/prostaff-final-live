
<section class="p-0">
    <div class="slide-1 home-slider">
        @foreach($slider as $slide)
            <div  style="background-image: url({{asset('web/media/lg')}}/{{$slide->image}}); 
                background-size: cover; background-position: center center; display: block;">
                <div class="home text-start"
                   
                >
                    <div class="slider-container">
                        <div class="align-content-center container ">
                            <div class="col pl-0">
                                <div class="slider-contain text-left">
                                    <div>
                                        
                                        
                                        @if($slide->title)    
                                            <h2>{{$slide->title}}</h2>
                                        @endif
                                            

                                        @if($slide->description)
                                            <h3 class="slider-text">{!! html_entity_decode($slide->description) !!}</h3>
                                        @endif

                                        @if($slide->url)    
                                            <a href="{{$slide->url}}" class="btn btn-solid">Read More</a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>