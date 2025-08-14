
    <section class="testimonial small-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide-3 testimonial-slider no-arrow">
                        @foreach(getTestimonials() as $testimonial)
                            <div>
                                <div class="media border-0">
                                    <div class="text-center">
                                        <img class="text-center" src="{{asset('web/media/sm')}}/{{$testimonial->image}}" alt="#">
                                    </div>
                                </div>
                                
                                <div class="media-body text-center px-5 py-3">
                                    <div class="media">
                                        <h5>{{$testimonial->title}}</h5>
                                    </div>

                                    <p>{{$testimonial->description}}</p>
                                        <div class="media">
                                            <div class="text-center">
                                            <h6><strong>{{$testimonial->name}}</strong></h6>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
